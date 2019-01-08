<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Pengaduan;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\PengaduanStoreRequest;
use App\Http\Requests\Backend\PengaduanUpdateRequest;

class PengaduanController extends BackendController
{

    const WHISTLEBLOWER_DIBALAS = 2;

    protected $uploadPath;

    private function statusList(){
      return [
        'active' => Pengaduan::active()->count(),
        'trash' => Pengaduan::onlyTrashed()->count(),
      ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyTrashed = FALSE;

        $statusList = $this->statusList();

        $perPage = $this->limit;

        if(($status = $request->get('status')) && $status == 'trash'){
            $pengaduans = Pengaduan::onlyTrashed()->paginate($perPage);
            $pengaduansCount = Pengaduan::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $pengaduans = Pengaduan::active()->paginate($perPage);
            $pengaduansCount = Pengaduan::active()->count();
        }else{
            $pengaduans = Pengaduan::paginate($perPage);
            $pengaduansCount = Pengaduan::count();
        }

        return view("backend.pengaduan.index", compact('pengaduans', 'pengaduansCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = new Pengaduan();
        return view("backend.pengaduan.create", compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengaduanStoreRequest $request)
    {
        $data = $request->all();
        $data['created_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        Pengaduan::create($data);

        return redirect("/admin/pengaduan")->with('message','Pengaduan Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view("backend.pengaduan.edit", compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengaduanUpdateRequest $request, $id)
    {
        $data = Pengaduan::findOrFail($id);

        $data['update_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        $data['status_pengaduan'] = self::WHISTLEBLOWER_DIBALAS;
        $data['balasan'] = $request->get('balasan');

        // $member = [
        //     'email' => $data['email'],
        //     'name'  => $data['nama'],
        //     'subject' => 'Balasan Pengaduan Whistleblower'
        // ];

        // Mail::send('email.balasan-whistleblower', ['data' => $data], function($m) use ($member){
        //     $m->to($member['email'], $member['name'])->cc('andri@zonakreatif.id')->subject($member['subject']);
        // });

        $data->update();

        return redirect("/admin/pengaduan")->with('message','Pengaduan berhasil dibalas.');
    }

    public function show(){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengaduan::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/pengaduan')->with('trash-message', ['Pengaduan has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $pengaduan = Pengaduan::withTrashed()->findOrFail($id);
      $pengaduan->forceDelete();

      return redirect('/admin/pengaduan?status=trash')->with('message','Pengaduan has been deleted permanently');
    }

    public function restore($id)
    {
      $pengaduan = Pengaduan::withTrashed()->findOrFail($id);
      $pengaduan->restore();

      return redirect('/admin/pengaduan')->with('message', 'Pengaduan has been restored from the trash');

    }
}
