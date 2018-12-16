<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\KategoriBerita;
use Yajra\DataTables\Datatables;

class KategoriBeritaController extends Controller
{
    public function getData(){
        $kategoriBeritas = KategoriBerita::select(['id', 'title']);
        return Datatables::of($kategoriBeritas)
            ->addColumn('action', function($kategoriBerita){
                return view('datatable._action',[
                    'model'     => $kategoriBerita,
                    'form_url'  => route('kategori-berita.destroy', $kategoriBerita->id),
                    'edit_url'  => route('kategori-berita.edit', $kategoriBerita->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $kategoriBerita->title . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.kategori-berita.index');
    }
}
