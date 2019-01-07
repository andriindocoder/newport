<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Profil;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\ProfilStoreRequest;
use App\Http\Requests\Backend\ProfilUpdateRequest;

class ProfilController extends BackendController
{


    private function statusList(){
      return [
        'active' => Profil::active()->count(),
        'trash' => Profil::onlyTrashed()->count(),
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
            $profils = Profil::onlyTrashed()->latest()->paginate($perPage);
            $profilsCount = Profil::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $profils = Profil::active()->paginate($perPage);
            $profilsCount = Profil::active()->count();
        }else{
            $profils = Profil::latest()->paginate($perPage);
            $profilsCount = Profil::count();
        }

        return view("backend.profil.index", compact('profils', 'profilsCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = new Profil();
        return view("backend.profil.create", compact('profil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfilStoreRequest $request)
    {
        $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('gambar1')){
            $path = $request->file('gambar1')->store('profile/'.$tahun.'/'.$bulan);
            $data['gambar1'] = $path;
        }else{
          dd("File gambar tidak boleh lebih dari 2MB");
        }

        Profil::create($data);

        return redirect("/admin/profil")->with('message','Profil Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view("backend.profil.edit", compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        $profil = Profil::findOrFail($id);
        $oldImage = $profil->gambar1;
        $data = $request->all();
        if($request->hasFile('gambar1')){
            $bulan = date('m');
            $tahun = date('Y');
            $path = $request->file('gambar1')->store('profile/'.$tahun.'/'.$bulan);
            $data['gambar1'] = $path;
        }
        $profil->update($data);
        if($oldImage !== $profil->gambar1){
          $this->removeImage($oldImage);
        }

        return redirect("/admin/profil")->with('message','Profil Berhasil di update');
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
        $data = Profil::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/profil')->with('trash-message', ['Profil has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $profil = Profil::withTrashed()->findOrFail($id);
      $profil->forceDelete();

      return redirect('/admin/profil?status=trash')->with('message','Profil has been deleted permanently');
    }

    public function restore($id)
    {
      $profil = Profil::withTrashed()->findOrFail($id);
      $profil->restore();

      return redirect('/admin/profil')->with('message', 'Profil has been restored from the trash');

    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }
}
