<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\SubMenu;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\ReformasiBirokrasiStoreRequest;
use App\Http\Requests\Backend\ReformasiBirokrasiUpdateRequest;

class ReformasiBirokrasiController extends BackendController
{


    private function statusList(){
      return [
        'active' => SubMenu::active()->count(),
        'trash' => SubMenu::onlyTrashed()->count(),
      ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyTrashed = FALSE;

        $statusList = $this->statusList();

        $perPage = $this->limit;

        if(($status = $request->get('status')) && $status == 'trash'){
            $subMenus = SubMenu::onlyTrashed()->latest()->paginate($perPage);
            $subMenusCount = SubMenu::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $subMenus = SubMenu::active()->paginate($perPage);
            $subMenusCount = SubMenu::active()->count();
        }else{
            $subMenus = SubMenu::latest()->paginate($perPage);
            $subMenusCount = SubMenu::count();
        }

        return view("backend.reformasi-birokrasi.index", compact('subMenus', 'subMenusCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subMenu = new SubMenu();
        return view("backend.reformasi-birokrasi.create", compact('subMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReformasiBirokrasiStoreRequest $request)
    {
        $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();
        $data['menu_id'] = 28;
        $data['slug'] = slugify($data['judul_menu']);
        $bulan = date('m');
        $tahun = date('Y');

        if($request->hasFile('attachment')){
            $path = $request->file('attachment')->store('informasi/'.$tahun.'/'.$bulan);
            $data['attachment'] = $path;
        }

        SubMenu::create($data);

        return redirect("/admin/reformasi-birokrasi")->with('message','Sub Menu Reformasi Birokrasi Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subMenu = SubMenu::findOrFail($id);
        return view("backend.reformasi-birokrasi.edit", compact('subMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReformasiBirokrasiUpdateRequest $request, $id)
    {
        $data = $request->all();
        $data['updated_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();
        $data['menu_id'] = 28;
        $data['slug'] = slugify($data['judul_menu']);

        $subMenu = SubMenu::findOrFail($id);
        $oldImage = $subMenu->attachment;
        $data = $request->all();
        if($request->hasFile('attachment')){
            $bulan = date('m');
            $tahun = date('Y');
            $path = $request->file('attachment')->store('informasi/'.$tahun.'/'.$bulan);
            $data['attachment'] = $path;
        }
        $subMenu->update($data);
        if($oldImage !== $subMenu->attachment){
          $this->removeImage($oldImage);
        }

        return redirect("/admin/reformasi-birokrasi")->with('message','Sub Menu Reformasi Birokrasi Berhasil di update');
    }

    public function show(){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SubMenu::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/reformasi-birokrasi')->with('trash-message', ['Reformasi Birokrasi has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $subMenu = SubMenu::withTrashed()->findOrFail($id);
      $subMenu->forceDelete();

      return redirect('/admin/reformasi-birokrasi?status=trash')->with('message','Reformasi Birokrasi has been deleted permanently');
    }

    public function restore($id)
    {
      $subMenu = SubMenu::withTrashed()->findOrFail($id);
      $subMenu->restore();

      return redirect('/admin/reformasi-birokrasi')->with('message', 'Reformasi Birokrasi has been restored from the trash');

    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }
}
