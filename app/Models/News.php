<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;
    protected $fillable=['brand_id','user_id','title','slug','thumbnail','meta_title','meta_description','meta_keywords','body','view_count'];
   
    public function author(){
        return $this->belongsTo('App\Models\CmsUser','user_id');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand');
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
    public function getCreatedTimeDiff(){
        $c=Carbon::parse($this->created_at)->diffForHumans();
        return $c;
    }
    public function getShortDescription(){
        $str=$this->meta_description;
        $cnt=strlen($str);
        if($cnt<100){
            return $str;
        }else{
            return substr($str,100)."...";
        }
    }

}
