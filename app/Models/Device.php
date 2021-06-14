<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category_id',
        'brand_id',
        'title',
        'slug',
        'image',
        'price',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'specifications',
        'cover_specifications_1',
        'cover_specifications_2',
        'view_count',
        'affilate_links'
    ];

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
    public function opinions(){
        return $this->hasMany('App\Models\Opinion');
    }
    public function deviceImages(){
        return $this->hasMany('App\Models\DeviceImage');
    }
    public function videos(){
        return $this->hasMany('App\Models\Videos');
    }
    public function getMetaKeywords(){
        if($this->meta_keywords==null){
            return '';
        }
        // dd(implode(',',json_decode($this->meta_keywords)));
        return implode(',',json_decode($this->meta_keywords));
    }
    public function getJsonString($col){
        return str_replace('\\"','\\\"',$this->{$col});
    }
}
