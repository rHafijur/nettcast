<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['device_id','title','slag','thumbnail','audio_path','meta_title','meta_description','meta_keywords','body','video_url','view_count'];

    public function device(){
        return $this->belongsTo('App\Models\Device');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
