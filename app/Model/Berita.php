<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\User;

class Berita extends Model
{
    use SoftDeletes;
    protected $table = 'berita';
    protected $dates = ['published_at'];
    protected $fillable = ['title','slug','excerpt','body','published_at','category_id','image','view_count'];

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(KategoriBerita::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }
  
    public function createTags($tagString)
    {
        $tags = explode(",", $tagString[0]);
        $tagIds = [];

        foreach ($tags as $tag)
        {
            $newTag = Tag::firstOrCreate(
            ['slug' => str_slug($tag), 'name' => ucwords(trim($tag))]
            );

            $newTag->save();

            $tagIds[] = $newTag->id;
        }

        $this->tags()->attach($tagIds);
    }

    public function scopePublished($query){
        return $query->where("published_at","<=",Carbon::now());
    }

    public function scopeScheduled($query){
        return $query->where("published_at",">",Carbon::now());
    }

    public function scopeDraft($query){
        return $query->whereNull("published_at");
    }

    public function scopeFilter($query, $term){
        if($term){
            $query->where(function($q) use ($term){
                $q->orWhere('title', 'LIKE', "%{$term}%");
            });
        }
    }

    public function getDateAttribute($value){
        Carbon::setLocale('id');
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }
}
