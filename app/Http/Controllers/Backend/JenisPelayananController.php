<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\JenisPelayanan;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class JenisPelayananController extends Controller
{
    public function getData(){
        $jenisPelayanans = JenisPelayanan::select(['id', 'kode_pelayanan', 'nama_pelayanan','tipe_form','keterangan'])->active()->latest();
        return Datatables::of($jenisPelayanans)
            ->addColumn('action', function($jenisPelayanan){
                return view('backend.datatable._action',[
                    'model'     => $jenisPelayanan,
                    'form_url'  => route('admin.jenis-pelayanan.destroy', $jenisPelayanan->id),
                    'edit_url'  => route('admin.jenis-pelayanan.edit', $jenisPelayanan->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $jenisPelayanan->nama_pelayanan . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.jenis-pelayanan.index');
    }

    public function create(){
        return view('backend.jenis-pelayanan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['kode_pelayanan' => 'required', 'nama_pelayanan'=>'required','keterangan'=>'required']);
        $data = $request->all();
        $jenisPelayanan = JenisPelayanan::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$jenisPelayanan->nama_pelayanan berhasil ditambahkan."
        ]);
        return redirect()->route('admin.jenis-pelayanan.index');
    }

    public function edit($id){
        $jenisPelayanan = JenisPelayanan::findOrFail($id);
        return view('backend.jenis-pelayanan.edit', compact('jenisPelayanan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['kode_pelayanan' => 'required', 'nama_pelayanan'=>'required','keterangan'=>'required']);
        $jenisPelayanan = JenisPelayanan::find($id);
        $jenisPelayanan->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$jenisPelayanan->nama_pelayanan berhasil diubah."
        ]);
        return redirect()->route('admin.jenis-pelayanan.index');
    }

    public function destroy($id)
    {
        $data = JenisPelayanan::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->nama_pelayanan berhasil dihapus."
        ]);
        return redirect()->route('admin.jenis-pelayanan.index');
    }
}
