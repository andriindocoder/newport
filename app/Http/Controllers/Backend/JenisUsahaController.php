<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\JenisUsaha;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class JenisUsahaController extends Controller
{
    public function getData(){
        $jenisUsahas = JenisUsaha::select(['id', 'jenis_usaha', 'kode_jenis_usaha'])->active()->latest();
        return Datatables::of($jenisUsahas)
            ->addColumn('action', function($jenisUsaha){
                return view('backend.datatable._action',[
                    'model'     => $jenisUsaha,
                    'form_url'  => route('jenis-usaha.destroy', $jenisUsaha->id),
                    'edit_url'  => route('jenis-usaha.edit', $jenisUsaha->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $jenisUsaha->jenis_usaha . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.jenis-usaha.index');
    }

    public function create(){
        return view('backend.jenis-usaha.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['jenis_usaha' => 'required', 'kode_jenis_usaha'=>'required']);
        $data = $request->all();
        $jenisUsaha = JenisUsaha::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$jenisUsaha->jenis_usaha berhasil ditambahkan."
        ]);
        return redirect()->route('jenis-usaha.index');
    }

    public function edit($id){
        $jenisUsaha = JenisUsaha::findOrFail($id);
        return view('backend.jenis-usaha.edit', compact('jenisUsaha'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['jenis_usaha' => 'required']);
        $jenisUsaha = JenisUsaha::find($id);
        $jenisUsaha->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$jenisUsaha->jenis_usaha berhasil diubah."
        ]);
        return redirect()->route('jenis-usaha.index');
    }

    public function destroy($id)
    {
        $data = JenisUsaha::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->jenis_usaha berhasil dihapus."
        ]);
        return redirect()->route('jenis-usaha.index');
    }
}
