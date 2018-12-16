<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\KategoriFoto;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class KategoriFotoController extends Controller
{
    public function getData(){
        $kategoriFotos = KategoriFoto::select(['id', 'title'])->active()->latest();
        return Datatables::of($kategoriFotos)
            ->addColumn('action', function($kategoriFoto){
                return view('backend.datatable._action',[
                    'model'     => $kategoriFoto,
                    'form_url'  => route('kategori-foto.destroy', $kategoriFoto->id),
                    'edit_url'  => route('kategori-foto.edit', $kategoriFoto->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $kategoriFoto->title . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.kategori-foto.index');
    }

    public function create(){
        return view('backend.kategori-foto.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        $data = $request->all();
        $data['slug'] = slugify($data['title']);
        $kategoriFoto = KategoriFoto::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$kategoriFoto->title berhasil ditambahkan."
        ]);
        return redirect()->route('kategori-foto.index');
    }

    public function edit($id){
        $kategoriFoto = KategoriFoto::findOrFail($id);
        return view('backend.kategori-foto.edit', compact('kategoriFoto'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required']);
        $kategoriFoto = KategoriFoto::find($id);
        $kategoriFoto->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$kategoriFoto->title berhasil diubah."
        ]);
        return redirect()->route('kategori-foto.index');
    }

    public function destroy($id)
    {
        $data = KategoriFoto::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->title berhasil dihapus."
        ]);
        return redirect()->route('kategori-foto.index');
    }
}
