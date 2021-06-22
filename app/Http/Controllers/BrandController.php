<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use DB as DB;

class BrandController extends Controller
{
    public function sync(){
        $categories=Category::all();
        foreach($categories as $category){
           $brand_ids= $category->devices()->select('brand_id')->distinct()->pluck('brand_id')->toArray();
        //    dd($brand_ids);
        $category->brands()->sync($brand_ids);
        }
    }
}
