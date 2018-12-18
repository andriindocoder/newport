<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\GaleriFoto;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\GaleriFotoStoreRequest;
use App\Http\Requests\Backend\GaleriFotoUpdateRequest;

class GaleriFotoController extends BackendController
{
    protected $limit = 5;
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('galeri-foto');
    }

    private function statusList(){
      return [
        'active' => GaleriFoto::active()->count(),
        'trash'  => GaleriFoto::onlyTrashed()->count(),
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
            $galeriFotos = GaleriFoto::onlyTrashed()->latest()->paginate($perPage);
            $galeriFotosCount = GaleriFoto::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $galeriFotos = GaleriFoto::active()->latest()->paginate($perPage);
            $galeriFotosCount = GaleriFoto::active()->count();
        }else{
            $galeriFotos = GaleriFoto::latest()->paginate($perPage);
            $galeriFotosCount = GaleriFoto::count();
        }

        return view("backend.galeri-foto.index", compact('galeriFotos', 'galeriFotosCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GaleriFoto $galeriFoto)
    {
        return view("backend.galeri-foto.create", compact('galeriFoto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriFotoStoreRequest $request)
    {
        $data = $this->handleRequest($request);
        // $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        GaleriFoto::create($data);
        

        return redirect("/admin/galeri-foto")->with('message','Galeri Foto Berhasil Ditambahkan');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('namafile'))
        {
            $namafile    = $request->file('namafile');
            $fileName    = $namafile->getClientOriginalName();
            $extension   = $namafile->getClientOriginalExtension(); 
            $destination = $this->uploadPath;

            $path = $namafile->storeAs('gallery/'.date("Y").'/'.date("m").'/'.date("d"), date("Ymd").'_'.$fileName);
            $data['namafile']   = $path;
            $data['extension'] = $extension;
        }

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeriFoto = GaleriFoto::findOrFail($id);
        return view("backend.galeri-foto.edit", compact('galeriFoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriFotoUpdateRequest $request, $id)
    {
        $data = $this->handleRequest($request);
        $data = $request->all();
        $data['update_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        GaleriFoto::findOrFail($id)->update($data);

        return redirect("/admin/galeri-foto")->with('message','Galeri Foto berhasil di update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GaleriFoto::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/galeri-foto')->with('trash-message', ['Galeri Foto has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $galeriFoto = GaleriFoto::withTrashed()->findOrFail($id);
      $galeriFoto->forceDelete();

      return redirect('/admin/galeri-foto?status=trash')->with('message','Galeri Foto has been deleted permanently');
    }

    public function restore($id)
    {
      $galeriFoto = GaleriFoto::withTrashed()->findOrFail($id);
      $galeriFoto->restore();

      return redirect('/admin/galeri-foto')->with('message', 'Galeri Foto has been restored from the trash');

    }
}
