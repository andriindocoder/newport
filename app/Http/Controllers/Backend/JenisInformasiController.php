<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\JenisInformasi;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class JenisInformasiController extends Controller
{
    public function getData(){
        $jenisInformasis = JenisInformasi::select(['id', 'kode', 'nama','keterangan'])->active()->latest();
        return Datatables::of($jenisInformasis)
            ->addColumn('action', function($jenisInformasi){
                return view('backend.datatable._action',[
                    'model'     => $jenisInformasi,
                    'form_url'  => route('jenis-informasi.destroy', $jenisInformasi->id),
                    'edit_url'  => route('jenis-informasi.edit', $jenisInformasi->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $jenisInformasi->nama . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.jenis-informasi.index');
    }

    public function create(){
        return view('backend.jenis-informasi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['kode' => 'required', 'nama'=>'required','keterangan'=>'required']);
        $data = $request->all();
        $jenisInformasi = JenisInformasi::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$jenisInformasi->nama berhasil ditambahkan."
        ]);
        return redirect()->route('jenis-informasi.index');
    }

    public function edit($id){
        $jenisInformasi = JenisInformasi::findOrFail($id);
        return view('backend.jenis-informasi.edit', compact('jenisInformasi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['kode' => 'required', 'nama'=>'required','keterangan'=>'required']);
        $jenisInformasi = JenisInformasi::find($id);
        $jenisInformasi->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$jenisInformasi->nama berhasil diubah."
        ]);
        return redirect()->route('jenis-informasi.index');
    }

    public function destroy($id)
    {
        $data = JenisInformasi::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->nama berhasil dihapus."
        ]);
        return redirect()->route('jenis-informasi.index');
    }
}
