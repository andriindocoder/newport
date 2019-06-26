<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\KategoriVideo;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class KategoriVideoController extends Controller
{
    public function getData(){
        $kategoriVideos = KategoriVideo::select(['id', 'title'])->active()->latest();
        return Datatables::of($kategoriVideos)
            ->addColumn('action', function($kategoriVideo){
                return view('backend.datatable._action',[
                    'model'     => $kategoriVideo,
                    'form_url'  => route('admin.kategori-video.destroy', $kategoriVideo->id),
                    'edit_url'  => route('admin.kategori-video.edit', $kategoriVideo->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $kategoriVideo->title . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.kategori-video.index');
    }

    public function create(){
        return view('backend.kategori-video.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        $data = $request->all();
        $data['slug'] = slugify($data['title']);
        $kategoriVideo = KategoriVideo::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$kategoriVideo->title berhasil ditambahkan."
        ]);
        return redirect()->route('admin.kategori-video.index');
    }

    public function edit($id){
        $kategoriVideo = KategoriVideo::findOrFail($id);
        return view('backend.kategori-video.edit', compact('kategoriVideo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required']);
        $kategoriVideo = KategoriVideo::find($id);
        $kategoriVideo->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$kategoriVideo->title berhasil diubah."
        ]);
        return redirect()->route('admin.kategori-video.index');
    }

    public function destroy($id)
    {
        $data = KategoriVideo::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->title berhasil dihapus."
        ]);
        return redirect()->route('admin.kategori-video.index');
    }
}
