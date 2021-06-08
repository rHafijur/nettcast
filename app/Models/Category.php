<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['title','icon','slug','specification_attributes','cover_specification_attributes_1','cover_specification_attributes_2','review_headers'];

    public function brands(){
        return $this->belongsToMany('App/Models/Brand','brand_categories','category_id','brand_id');
    }
    public function devices(){
        return $this->hasMany('App\Models\Device');
    }
}
