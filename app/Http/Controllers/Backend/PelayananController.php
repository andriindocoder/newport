<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Pelayanan;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\PelayananStoreRequest;
use App\Http\Requests\Backend\PelayananUpdateRequest;

class PelayananController extends BackendController
{


    private function statusList(){
      return [
        'active' => Pelayanan::active()->count(),
        'trash' => Pelayanan::onlyTrashed()->count(),
      ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request ,$data="all")
    {
        $onlyTrashed = FALSE;

        $statusList = $this->statusList();

        $perPage = $this->limit;

        if(($status = $request->get('status')) && $status == 'trash'){
            $pelayanans = Pelayanan::onlyTrashed()->latest()->paginate($perPage);
            $pelayanansCount = Pelayanan::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $pelayanans = Pelayanan::active()->paginate($perPage);
            $pelayanansCount = Pelayanan::active()->count();
        }else{
            $pelayanans = Pelayanan::latest()->paginate($perPage);
            $pelayanansCount = Pelayanan::count();
        }

        return view("backend.pelayanan.index", compact('pelayanans', 'pelayanansCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelayanan = new Pelayanan();
        return view("backend.pelayanan.create", compact('pelayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PelayananStoreRequest $request)
    {
        $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('pelayanan/'.$tahun.'/'.$bulan);
            $data['gambar'] = $path;
        }

        Pelayanan::create($data);

        return redirect("/admin/pelayanan")->with('message','Pelayanan Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
        return view("backend.pelayanan.edit", compact('pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PelayananUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        $pelayanan = Pelayanan::findOrFail($id);
        $oldImage = $pelayanan->gambar;

        if($request->hasFile('gambar')){
            $bulan = date('m');
            $tahun = date('Y');
            $path = $request->file('gambar')->store('pelayanan/'.$tahun.'/'.$bulan);
            $data['gambar'] = $path;
        }
        $pelayanan->update($data);
        if($oldImage !== $pelayanan->gambar){
          $this->removeImage($oldImage);
        }

        return redirect("/admin/pelayanan")->with('message','Pelayanan Berhasil di update');
    }

    public function show(){
        
    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelayanan::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/pelayanan')->with('trash-message', ['Pelayanan has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $pelayanan = Pelayanan::withTrashed()->findOrFail($id);
      $pelayanan->forceDelete();

      return redirect('/admin/pelayanan?status=trash')->with('message','Pelayanan has been deleted permanently');
    }

    public function restore($id)
    {
      $pelayanan = Pelayanan::withTrashed()->findOrFail($id);
      $pelayanan->restore();

      return redirect('/admin/pelayanan')->with('message', 'Pelayanan has been restored from the trash');

    }

    public function removeFile($id)
    {
        $data = Pelayanan::findOrFail($id);
        $oldImage = $data->gambar;
        $this->removeImage($oldImage);
        $data->gambar = null;
        $data->update();
        return redirect('/admin/pelayanan')->with('trash-message', ['Attachment has been moved to the trash', $id]);
    }
}
