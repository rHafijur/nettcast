<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=['title','logo','overview','origin','ceo','headquarters','est'];

    public function categories(){
        return $this->belongsToMany('App\Models\Category','brand_categories','brand_id','category_id');
    }
    public function devices(){
        return $this->hasMany('App\Models\Device');
    }
    public function news(){
        return $this->hasMany('App\Models\News');
    }
    public function reviews(){
        return $this->hasMany('App\Models\Reviews');
    }
}
