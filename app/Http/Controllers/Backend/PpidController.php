<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Ppid;
use App\Http\Requests\Backend\PpidStoreRequest;
use App\Http\Requests\Backend\PpidUpdateRequest;
use Carbon\Carbon;
use Auth;

class PpidController extends BackendController
{

    const PPID_DIBALAS = 2;

    protected $uploadPath;

    private function statusList(){
      return [
        'active' => Ppid::active()->count(),
        'trash' => Ppid::onlyTrashed()->count(),
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
            $ppids = Ppid::onlyTrashed()->paginate($perPage);
            $ppidsCount = Ppid::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $ppids = Ppid::active()->paginate($perPage);
            $ppidsCount = Ppid::active()->count();
        }else{
            $ppids = Ppid::latest()->paginate($perPage);
            $ppidsCount = Ppid::count();
        }

        return view("backend.ppid.index", compact('ppids', 'ppidsCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ppid = new Ppid();
        return view("backend.ppid.create", compact('ppid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PpidStoreRequest $request)
    {
        $data = $request->all();
        $data['created_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        Ppid::create($data);

        return redirect("/admin/ppid")->with('message','Perizinan Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppid = Ppid::findOrFail($id);
        return view("backend.ppid.edit", compact('ppid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PpidUpdateRequest $request, $id)
    {
        $data = Ppid::findOrFail($id);
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();
        
        $data['status_ppid'] = self::PPID_DIBALAS;
        $data['balasan'] = $request->get('balasan');
        // $member = [
        //     'email' => $data['email'],
        //     'name'  => $data['nama_lengkap'],
        //     'subject' => 'Balasan Permintaan Informasi'
        // ];

        // Mail::send('email.balasan-ppid', ['data' => $data], function($m) use ($member){
        //     $m->to($member['email'], $member['name'])->subject($member['subject']);
        // });

        $data->update();

        return redirect("/backend/ppid")->with('message','PPID berhasil dibalas dan email berhasil dikirim');
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
        $data = Ppid::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/ppid')->with('trash-message', ['PPID has been moved to the trash', $id]);
    }

    public function reply($id)
    {
        $data = Ppid::findOrFail($id);
        $data['status_ppid'] = self::PPID_DIBALAS;

        $data->update();

        return redirect('/admin/ppid')->with('message', 'Balasan Permohonan PPID telah berhasil dikirim.');
    }

    public function forceDestroy($id){
      $ppid = Ppid::withTrashed()->findOrFail($id);
      $ppid->forceDelete();

      return redirect('/admin/ppid?status=trash')->with('message','PPID has been deleted permanently');
    }

    public function restore($id)
    {
      $ppid = Ppid::withTrashed()->findOrFail($id);
      $ppid->restore();

      return redirect('/admin/ppid')->with('message', 'PPID has been restored from the trash');

    }
}
