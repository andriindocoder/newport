<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TampilanDepan;
use Yajra\DataTables\Datatables;
use Session;
use Auth;

class TampilanDepanController extends Controller
{
    public function getData(){
        $tampilanDepans = TampilanDepan::select(['id', 'kode_tampilan','konten', 'tampilkan'])->active()->latest();
        return Datatables::of($tampilanDepans)
            ->addColumn('action', function($tampilanDepan){
                return view('backend.datatable._action',[
                    'model'     => $tampilanDepan,
                    'form_url'  => route('tampilan-depan.destroy', $tampilanDepan->id),
                    'edit_url'  => route('tampilan-depan.edit', $tampilanDepan->id),
                    'confirm_message' => 'Anda yakin untuk menghapus '. $tampilanDepan->kode_tampilan . '?'
                ]);
            })
            ->make(true);
    }

    public function index(){
        return view('backend.tampilan-depan.index');
    }

    public function create(){
        return view('backend.tampilan-depan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['kode_tampilan' => 'required']);
        $data = $request->all();
        $data['slug'] = slugify($data['kode_tampilan']);
        $tampilanDepan = TampilanDepan::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$tampilanDepan->kode_tampilan berhasil ditambahkan."
        ]);
        return redirect()->route('tampilan-depan.index');
    }

    public function edit($id){
        $tampilanDepan = TampilanDepan::findOrFail($id);
        return view('backend.tampilan-depan.edit', compact('tampilanDepan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['kode_tampilan' => 'required']);
        $tampilanDepan = TampilanDepan::find($id);
        $tampilanDepan->update($request->all());
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$tampilanDepan->kode_tampilan berhasil diubah."
        ]);
        return redirect()->route('tampilan-depan.index');
    }

    public function destroy($id)
    {
        $data = TampilanDepan::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$data->kode_tampilan berhasil dihapus."
        ]);
        return redirect()->route('tampilan-depan.index');
    }
}
