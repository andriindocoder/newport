<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Model\GaleriVideo;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Http\Requests\Backend\GaleriVideoStoreRequest;
use App\Http\Requests\Backend\GaleriVideoUpdateRequest;

class GaleriVideoController extends BackendController
{
    protected $limit = 5;
    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('galeri-video');
    }

    private function statusList(){
      return [
        'active' => GaleriVideo::active()->count(),
        'trash'  => GaleriVideo::onlyTrashed()->count(),
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
            $galeriVideos = GaleriVideo::onlyTrashed()->latest()->paginate($perPage);
            $galeriVideosCount = GaleriVideo::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }elseif($status == 'active'){
            $galeriVideos = GaleriVideo::active()->latest()->paginate($perPage);
            $galeriVideosCount = GaleriVideo::active()->count();
        }else{
            $galeriVideos = GaleriVideo::latest()->paginate($perPage);
            $galeriVideosCount = GaleriVideo::count();
        }

        return view("backend.galeri-video.index", compact('galeriVideos', 'galeriVideosCount', 'onlyTrashed', 'statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GaleriVideo $galeriVideo)
    {
        return view("backend.galeri-video.create", compact('galeriVideo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriVideoStoreRequest $request)
    {
        $data = $this->handleRequest($request);
        // $data = $request->all();
        $data['create_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        GaleriVideo::create($data);
        

        return redirect("/admin/galeri-video")->with('message','Galeri Video berhasil Ditambahkan');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('namafile'))
        {
            $namafile    = $request->file('namafile');
            $fileName    = $namafile->getClientOriginalName();
            $extension   = $namafile->getClientOriginalExtension(); 
            $destination = $this->uploadPath;

            $path = $namafile->storeAs('gallery/'.date("Y").'/'.date("m").'/'.date("d"), date("Ymd").'_'.$fileName);
            $data['namafile']   = $path;
            $data['extension'] = $extension;
        }

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeriVideo = GaleriVideo::findOrFail($id);
        return view("backend.galeri-video.edit", compact('galeriVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriVideoUpdateRequest $request, $id)
    {
        $data = $this->handleRequest($request);
        $data = $request->all();
        $data['update_id'] = Auth::user()->id;
        $data['updated_at'] = Carbon::now();

        GaleriVideo::findOrFail($id)->update($data);

        return redirect("/admin/galeri-video")->with('message','Galeri Video berhasil di update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GaleriVideo::findOrFail($id);
        $data['delete_id'] = Auth::user()->id;
        $data['status_aktif'] = 0;
        $data->update();
        $data->delete();

        return redirect('/admin/galeri-video')->with('trash-message', ['Galeri Video has been moved to the trash', $id]);
    }

    public function forceDestroy($id){
      $galeriVideo = GaleriVideo::withTrashed()->findOrFail($id);
      $galeriVideo->forceDelete();

      return redirect('/admin/galeri-video?status=trash')->with('message','Galeri Video has been deleted permanently');
    }

    public function restore($id)
    {
      $galeriVideo = GaleriVideo::withTrashed()->findOrFail($id);
      $galeriVideo->restore();

      return redirect('/admin/galeri-video')->with('message', 'Galeri Video has been restored from the trash');

    }
}
