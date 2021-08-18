<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['device_id','title','slug','thumbnail','audio_path','meta_title','meta_description','meta_keywords','body','video_url','view_count'];

    public function device(){
        return $this->belongsTo('App\Models\Device');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function getMetaKeywords(){
        if($this->meta_keywords==null){
            return '';
        }
        // dd(implode(',',json_decode($this->meta_keywords)));
        return implode(',',json_decode($this->meta_keywords));
    }
}
