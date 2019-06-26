<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\JenisLaporan;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class JenisLaporanController extends Controller
{
    public function getData(){
        $jenisLaporans = JenisLaporan::select(['id', 'kode', 'nama','keterangan'])->active()->latest();
        return Datatables::of($jenisLaporans)
            ->addColumn('action', function($jenisLaporan){
                return view('backend.datatable._action',[
                    'model'     => $jenisLaporan,
                    'form_url'  => route('admin.jenis-laporan.destroy', $jenisLaporan->id),
                    'edit_url'  => route('admin.jenis-laporan.edit', $jenisLaporan->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $jenisLaporan->nama . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.jenis-laporan.index');
    }

    public function create(){
        return view('backend.jenis-laporan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['kode' => 'required', 'nama'=>'required','keterangan'=>'required']);
        $data = $request->all();
        $jenisLaporan = JenisLaporan::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$jenisLaporan->nama berhasil ditambahkan."
        ]);
        return redirect()->route('admin.jenis-laporan.index');
    }

    public function edit($id){
        $jenisLaporan = JenisLaporan::findOrFail($id);
        return view('backend.jenis-laporan.edit', compact('jenisLaporan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['kode' => 'required', 'nama'=>'required','keterangan'=>'required']);
        $jenisLaporan = JenisLaporan::find($id);
        $jenisLaporan->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$jenisLaporan->nama berhasil diubah."
        ]);
        return redirect()->route('admin.jenis-laporan.index');
    }

    public function destroy($id)
    {
        $data = JenisLaporan::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->nama berhasil dihapus."
        ]);
        return redirect()->route('admin.jenis-laporan.index');
    }
}
