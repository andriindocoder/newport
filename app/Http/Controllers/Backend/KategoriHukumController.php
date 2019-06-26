<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\KategoriHukum;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class KategoriHukumController extends Controller
{
    public function getData(){
        $kategoriHukums = KategoriHukum::select(['id', 'title'])->active()->latest();
        return Datatables::of($kategoriHukums)
            ->addColumn('action', function($kategoriHukum){
                return view('backend.datatable._action',[
                    'model'     => $kategoriHukum,
                    'form_url'  => route('admin.kategori-hukum.destroy', $kategoriHukum->id),
                    'edit_url'  => route('admin.kategori-hukum.edit', $kategoriHukum->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $kategoriHukum->title . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.kategori-hukum.index');
    }

    public function create(){
        return view('backend.kategori-hukum.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        $data = $request->all();
        $data['slug'] = slugify($data['title']);
        $kategoriHukum = KategoriHukum::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$kategoriHukum->title berhasil ditambahkan."
        ]);
        return redirect()->route('admin.kategori-hukum.index');
    }

    public function edit($id){
        $kategoriHukum = KategoriHukum::findOrFail($id);
        return view('admin.kategori-hukum.edit', compact('kategoriHukum'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required']);
        $kategoriHukum = KategoriHukum::find($id);
        $kategoriHukum->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$kategoriHukum->title berhasil diubah."
        ]);
        return redirect()->route('admin.kategori-hukum.index');
    }

    public function destroy($id)
    {
        $data = KategoriHukum::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->title berhasil dihapus."
        ]);
        return redirect()->route('admin.kategori-hukum.index');
    }
}
