<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Berita;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Backend\BackendController;
use App\Model\Tag;
use App\Http\Requests\Backend\BeritaStoreRequest;
use App\Http\Requests\Backend\BeritaUpdateRequest;
use Session;

class BeritaController extends BackendController
{

    public function __construct(){
      parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyTrashed = FALSE;
        $perPage = $this->limit;

        if(($status = $request->get('status')) && $status == 'trash')
        {
          $posts = Berita::onlyTrashed()->with('category','author')->latest()->paginate($this->limit);
          $postCount = Berita::onlyTrashed()->count();
          $onlyTrashed = TRUE;
        }elseif($status=='published'){
          $posts = Berita::published()->with('category','author')->latest()->paginate($this->limit);
          $postCount = Berita::published()->count();
        }elseif($status=='scheduled'){
          $posts = Berita::scheduled()->with('category','author')->latest()->paginate($this->limit);
          $postCount = Berita::scheduled()->count();
        }elseif($status=='draft'){
          $posts = Berita::draft()->with('category','author')->latest()->paginate($this->limit);
          $postCount = Berita::draft()->count();
        }elseif($status=='own'){
          $posts = $request->user()->posts()->with('category','author')->latest()->paginate($this->limit);
          $postCount = $request->user()->posts()->count();
        }else{
          $posts = Berita::with('category','author')->latest()->paginate($this->limit);
          $postCount = Berita::count();
        }

        $statusList = $this->statusList($request);

        return view('backend.berita.index', compact('posts','postCount','onlyTrashed','statusList','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Berita $post)
    {
        $post = new Berita();
        return view('backend.berita.create',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaStoreRequest $request)
    {
        $data = $this->handleRequest($request);
        // $request->user()->posts()->create($data);

        $newPost = $request->user()->posts()->create($data);

        $newPost->createTags($data['post_tags']);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berita berhasil ditambahkan."
        ]);
        return redirect()->route('admin.berita.index');
    }

    private function handleRequest($request){
      $data = $request->all();
      $data['body'] = htmlspecialchars($data['body']);
      $bulan = date('m');
      $tahun = date('Y');

      if($request->hasFile('image')){
          $path = $request->file('image')->store('gambar-berita/'.$tahun.'/'.$bulan);
          $data['image'] = $path;
      }

      $data['slug'] = slugify($data['title']);
      $data['view_count'] = 1;

      return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Berita::findOrFail($id);
        return view('backend.berita.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeritaUpdateRequest $request, $id)
    {
        $post = Berita::findOrFail($id);
        $oldImage = $post->image;

        $data = $this->handleRequest($request);
        $post->update($data);
        if($oldImage !== $post->image){
          $this->removeImage($oldImage);
        }
        $data['slug'] = slugify($data['title']);
        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "Berita berhasil diupdate."
        ]);

        return redirect()->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::findOrFail($id)->delete();

        return redirect('/admin/berita')->with('trash-message', ['Berita sudah dihapus', $id]);
    }

    public function forceDestroy($id){
      $post = Berita::withTrashed()->findOrFail($id);
      $post->forceDelete();

      $this->removeImage($post->image);

      Session::flash("flash_notification", [
        "level" => "success",
        "message" => "Berita berhasil dihapus permanen."
    ]);

      return redirect('/admin/berita?status=trash');
    }

    public function restore($id)
    {
      $post = Berita::withTrashed()->findOrFail($id);
      $post->restore();

      Session::flash("flash_notification", [
        "level" => "warning",
        "message" => "Berita berhasil diaktifkan kembali."
    ]);

      return redirect('/admin/berita');

    }

    private function removeImage($image){
      if(!empty($image)){
          $imagePath = storage_path().'/app/'.$image;
          $ext = substr(strrchr($image,'.'),1);

        if(file_exists($imagePath)) unlink($imagePath);
      }
    }

    private function statusList($request){
      return [
        'own' => $request->user()->posts()->count(),
        'all' => Berita::count(),
        'published' => Berita::published()->count(),
        'scheduled' => Berita::scheduled()->count(),
        'draft' => Berita::draft()->count(),
        'trash' => Berita::onlyTrashed()->count(),
      ];
    }
}
