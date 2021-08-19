<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Device;
use App\Models\News;
use Illuminate\Support\Str;
use DB as DB;

class PageController extends Controller
{
    public function index(){
        $categories=Category::with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(29);
        }])->get();
        $news8=News::with('author')->withCount('comments')->latest()->limit(8)->get();
        $news4=News::with('author')->withCount('comments')->latest()->skip(4)->limit(4)->get();
        // dd($news8);
        // $brands=Brand::orderby('priority','asc')->limit(29)->get();
        // dd(array_chunk($brands->toArray(),8));
        return view('main.index',compact('categories','news8','news4'));
    }

    public function brands($category_slug,$category_id){
        $category=Category::where('id',$category_id)->with(['brands'=>function($q){
            return $q->orderby('priority','asc');
        }])->firstOrFail();
        $title=$category->title." all brands";
        return view('main.brands',compact('category','title'));
    }

    public function devices($category_slug,$brand_title,$category_id,$brand_id){
        $category=Category::where('id',$category_id)->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        $news8=News::with('author')->withCount('comments')->orderBy("view_count",'desc')->limit(8)->get();
        $brand=Brand::findOrFail($brand_id);
        $devices=Device::where('category_id',$category_id)->where('brand_id',$brand_id)->latest()->paginate(30);
        $title=$brand->title." all ".Str::plural($category->title);
        // $devices=Device::where('category_id',$category_id)->where('brand_id',$brand_id)->latest()->get();
        return view('main.device_grid',compact('devices','category','brand','news8','title'));
    }

    public function device($device_slug,$device_id){
        $device=Device::findOrFail($device_id);
        if(!strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
        {
            $device->increment('view_count');
        }
        $category=$device->category()->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        $title=$device->brand->title." ".$device->title;
        return view('main.device',compact('device','category','title'));
    }
    public function device_pictures($device_slug,$device_id){
        $device=Device::findOrFail($device_id);
        $category=$device->category()->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        $title=$device->brand->title." ".$device->title." pictures";
        return view('main.device_pictures',compact('device','category','title'));
    }
    public function ajax_search($q){
        $q=trim($q);
        $slq=str_replace(" ","-",$q);
        $deviceArray=[];
        $devices=Device::where('slug','like','%'.$slq.'%')->limit(5)->with('brand')->select('id','brand_id','slug','image','title')->get();
        foreach($devices as $device){
            $deviceArray[]=[
                "title"=>$device->brand->title." ".$device->title,
                "image"=>asset($device->image),
                "url"=>route('device.details',['device_slug'=>$device->slug,'device_id'=>$device->id])
            ];
        }
        return [
            'devices'=>$deviceArray
        ];
    }
    public function compare_ajax_search($q){
        $q=trim($q);
        $slq=str_replace(" ","-",$q);
        $deviceArray=[];
        $devices=Device::where('slug','like','%'.$slq.'%')->limit(5)->with('brand')->select('id','brand_id','slug','image','title')->get();
        foreach($devices as $device){
            $deviceArray[]=[
                "id"=>$device->id,
                "title"=>$device->brand->title." ".$device->title,
                "image"=>asset($device->image),
            ];
        }
        return $deviceArray;
    }
    public function compare(Request $request){
        $sp1=null;
        $sp2=null;
        $sp3=null;
        $device1=null;
        $device2=null;
        $device3=null;
        $sp=[];
        if($request->device1_id){
            $device1=Device::find($request->device1_id);
            $sp1=json_decode($device1->specifications,true);
            // dd($sp1);
            foreach($sp1 as $key=> $s1){
                foreach($s1 as $k => $at1){
                    $sp[$key][$k]["one"]= $at1;
                }
            }
        }
        if($request->device2_id){
            $device2=Device::find($request->device2_id);
            $sp2=json_decode($device2->specifications,true);
            foreach($sp2 as $key=> $s2){
                foreach($s2 as $k => $at2){
                    $sp[$key][$k]["two"]= $at2;
                }
            }
        }
        if($request->device3_id){
            $device3=Device::find($request->device3_id);
            $sp3=json_decode($device3->specifications,true);
            foreach($sp3 as $key=> $s3){
                foreach($s3 as $k => $at3){
                    $sp[$key][$k]["three"]= $at3;
                }
            }
        }
        $sps=$sp;
        $title="compare";
        return view('main.compare',compact('sps','device1','device2','device3','title'));
    }
}
