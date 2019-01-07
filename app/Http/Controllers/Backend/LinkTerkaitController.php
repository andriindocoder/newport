<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\LinkTerkait;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\LinkTerkaitStoreRequest;
use App\Http\Requests\Backend\LinkTerkaitUpdateRequest;

class LinkTerkaitController extends BackendController
{


    private function statusList(){
      return [
        'active' => LinkTerkait::active()->count(),
        'trash' => LinkTerkait::onlyTrashed()->count(),
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
            $linkTerkaits = LinkTerkait::onlyTrashed()->latest()->paginate($perPage);
            $linkTerkaitsCount = LinkTerkait::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $linkTerkaits = LinkTerkait::active()->paginate($perPage);
            $linkTerkaitsCount = LinkTerkait::active()->count();
        }else{
            $linkTerkaits = LinkTerkait::latest()->paginate($perPage);
            $linkTerkaitsCount = LinkTerkait::count();
        }

        return view("backend.link-terkait.index", compact('linkTerkaits', 'linkTerkaitsCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linkTerkait = new LinkTerkait();
        return view("backend.link-terkait.create", compact('linkTerkait'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinkTerkaitStoreRequest $request)
    {
        $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('logo_instansi')){
            $path = $request->file('logo_instansi')->store('logo-instansi/'.$tahun.'/'.$bulan);
            $data['logo_instansi'] = $path;
        }else{
          dd("File gambar tidak boleh lebih dari 2MB");
        }

        LinkTerkait::create($data);

        return redirect("/admin/link-terkait")->with('message','Link Terkait Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linkTerkait = LinkTerkait::findOrFail($id);
        return view("backend.link-terkait.edit", compact('linkTerkait'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinkTerkaitUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        $linkTerkait = LinkTerkait::findOrFail($id);
        $oldImage = $linkTerkait->logo_instansi;
        $data = $request->all();
        if($request->hasFile('logo_instansi')){
            $bulan = date('m');
            $tahun = date('Y');
            $path = $request->file('logo_instansi')->store('logo-instansi/'.$tahun.'/'.$bulan);
            $data['logo_instansi'] = $path;
        }
        $linkTerkait->update($data);
        if($oldImage !== $linkTerkait->logo_instansi){
          $this->removeImage($oldImage);
        }

        return redirect("/admin/link-terkait")->with('message','Link Terkait berhasil di update');
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
        $data = LinkTerkait::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/link-terkait')->with('trash-message', ['Link Terkait has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $linkTerkait = LinkTerkait::withTrashed()->findOrFail($id);
      $linkTerkait->forceDelete();

      return redirect('/admin/link-terkait?status=trash')->with('message','Link Terkait has been deleted permanently');
    }

    public function restore($id)
    {
      $linkTerkait = LinkTerkait::withTrashed()->findOrFail($id);
      $linkTerkait->restore();

      return redirect('/admin/link-terkait')->with('message', 'Link Terkait has been restored from the trash');

    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }
}
