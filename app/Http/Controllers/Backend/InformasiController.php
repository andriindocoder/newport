<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Informasi;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\InformasiStoreRequest;
use App\Http\Requests\Backend\InformasiUpdateRequest;

class InformasiController extends BackendController
{


    private function statusList(){
      return [
        'active' => Informasi::active()->count(),
        'trash' => Informasi::onlyTrashed()->count(),
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
            $informasis = Informasi::onlyTrashed()->latest()->paginate($perPage);
            $informasisCount = Informasi::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $informasis = Informasi::active()->paginate($perPage);
            $informasisCount = Informasi::active()->count();
        }else{
            switch($data){
                case 'informasi-publik':
                    $informasis = Informasi::latest()->jenisInformasi(1)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'program-dan-kegiatan':
                    $informasis = Informasi::latest()->jenisInformasi(2)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'data-dan-informasi' :
                    $informasis = Informasi::latest()->jenisInformasi(3)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'kinerja-kantor-otoritas-pelabuhan' :
                    $informasis = Informasi::latest()->jenisInformasi(4)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'informasi-hukum' :
                    $informasis = Informasi::latest()->jenisInformasi(5)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'tarif-pnbp' :
                    $informasis = Informasi::latest()->jenisInformasi(6)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                case 'indeks-kepuasan-masyarakat' :
                    $informasis = Informasi::latest()->jenisInformasi(7)->active()->paginate($perPage);
                    $informasisCount = Informasi::count();
                    break;
                default:
                    $informasis = Informasi::latest()->paginate($perPage);
                    $informasisCount = Informasi::count();
            }
        }

        return view("backend.informasi.index", compact('informasis', 'informasisCount', 'onlyTrashed', 'statusList','perPage'));
    }

    public function dataInformasi(){
        $onlyTrashed = FALSE;
        $statusList = $this->statusList();
        $perPage = $this->limit;
        $informasis = Informasi::where('jenis_informasi_id',3)->active()->paginate($perPage);
        $informasisCount = Informasi::active()->count();

        return view("backend.informasi.index", compact('informasis', 'informasisCount', 'onlyTrashed','statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $informasi = new Informasi();
        return view("backend.informasi.create", compact('informasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformasiStoreRequest $request)
    {
        $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('informasi/'.$tahun.'/'.$bulan);
            $data['gambar'] = $path;
        }

        Informasi::create($data);

        return redirect("/admin/informasi")->with('message','Informasi Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view("backend.informasi.edit", compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformasiUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        Informasi::findOrFail($id)->update($data);

        return redirect("/admin/informasi")->with('message','Informasi Berhasil di update');
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
        $data = Informasi::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/informasi')->with('trash-message', ['Informasi has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $informasi = Informasi::withTrashed()->findOrFail($id);
      $informasi->forceDelete();

      return redirect('/admin/informasi?status=trash')->with('message','Informasi has been deleted permanently');
    }

    public function restore($id)
    {
      $informasi = Informasi::withTrashed()->findOrFail($id);
      $informasi->restore();

      return redirect('/admin/informasi')->with('message', 'Informasi has been restored from the trash');

    }
}
