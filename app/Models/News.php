<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=['brand_id','user_id','title','slug','thumbnail','meta_title','meta_description','meta_keywords','body','view_count'];
   
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    public function getMetaKeywords(){
        if($this->meta_keywords==null){
            return '';
        }
        // dd(implode(',',json_decode($this->meta_keywords)));
        return implode(',',json_decode($this->meta_keywords));
    }
}
