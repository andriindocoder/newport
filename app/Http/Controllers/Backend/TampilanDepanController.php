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
                    'form_url'  => route('admin.tampilan-depan.destroy', $tampilanDepan->id),
                    'edit_url'  => route('admin.tampilan-depan.edit', $tampilanDepan->id),
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
        $data['create_id'] = Auth::user()->id;
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('slider');
            $data['foto'] = $path;
        }
        $tampilanDepan = TampilanDepan::create($data);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "$tampilanDepan->kode_tampilan berhasil ditambahkan."
        ]);
        return redirect()->route('admin.tampilan-depan.index');
    }

    public function edit($id){
        $tampilanDepan = TampilanDepan::findOrFail($id);
        return view('backend.tampilan-depan.edit', compact('tampilanDepan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['kode_tampilan' => 'required']);
        $tampilanDepan = TampilanDepan::find($id);
        $oldImage = $tampilanDepan->foto;
        $data = $request->all();
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('slider');
            $data['foto'] = $path;
        }
        $tampilanDepan->update($data);
        if($oldImage !== $tampilanDepan->foto){
          $this->removeImage($oldImage);
        }
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "$tampilanDepan->kode_tampilan berhasil diubah."
        ]);
        return redirect()->route('admin.tampilan-depan.index');
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
        return redirect()->route('admin.tampilan-depan.index');
    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }
}
