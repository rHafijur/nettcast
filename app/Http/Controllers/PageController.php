<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use App\Models\News;
use DB as DB;

class PageController extends Controller
{
    public function index(){
        $categories=Category::with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(29);
        }])->get();
        $news8=News::with('author')->withCount('comments')->latest()->limit(8)->get();
        // dd($news8);
        // $brands=Brand::orderby('priority','asc')->limit(29)->get();
        // dd(array_chunk($brands->toArray(),8));
        return view('main.index',compact('categories','news8'));
    }

    public function brands($category_slug,$category_id){
        $category=Category::where('id',$category_id)->with(['brands'=>function($q){
            return $q->orderby('priority','asc');
        }])->firstOrFail();
        return view('main.brands',compact('category'));
    }

    public function devices($category_slug,$brand_title,$category_id,$brand_id){
        $category=Category::where('id',$category_id)->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        $news8=News::with('author')->withCount('comments')->orderBy("view_count",'desc')->limit(8)->get();
        $brand=Brand::findOrFail($brand_id);
        $devices=Device::where('category_id',$category_id)->where('brand_id',$brand_id)->latest()->paginate(30);
        // $devices=Device::where('category_id',$category_id)->where('brand_id',$brand_id)->latest()->get();
        return view('main.device_grid',compact('devices','category','brand','news8'));
    }

    public function device($category_slug,$brand_title,$device_slug,$device_id){
        $device=Device::findOrFail($device_id);
        $category=$device->category()->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        return view('main.device',compact('device','category'));
    }
}
