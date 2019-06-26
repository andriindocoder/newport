<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\KategoriBerita;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class KategoriBeritaController extends Controller
{
    public function getData(){
        $kategoriBeritas = KategoriBerita::select(['id', 'title'])->active()->latest();
        return Datatables::of($kategoriBeritas)
            ->addColumn('action', function($kategoriBerita){
                return view('backend.datatable._action',[
                    'model'     => $kategoriBerita,
                    'form_url'  => route('admin.kategori-berita.destroy', $kategoriBerita->id),
                    'edit_url'  => route('admin.kategori-berita.edit', $kategoriBerita->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $kategoriBerita->title . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.kategori-berita.index');
    }

    public function create(){
        return view('backend.kategori-berita.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        $data = $request->all();
        $data['slug'] = slugify($data['title']);
        $kategoriBerita = KategoriBerita::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$kategoriBerita->title berhasil ditambahkan."
        ]);
        return redirect()->route('admin.kategori-berita.index');
    }

    public function edit($id){
        $kategoriBerita = KategoriBerita::findOrFail($id);
        return view('backend.kategori-berita.edit', compact('kategoriBerita'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required']);
        $kategoriBerita = KategoriBerita::find($id);
        $kategoriBerita->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$kategoriBerita->title berhasil diubah."
        ]);
        return redirect()->route('admin.kategori-berita.index');
    }

    public function destroy($id)
    {
        $data = KategoriBerita::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->title berhasil dihapus."
        ]);
        return redirect()->route('admin.kategori-berita.index');
    }
}
