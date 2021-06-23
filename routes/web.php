<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sync-brand',[BrandController::class,'sync']);
Route::get('/', [PageController::class,'index']);
Route::get('/{category_slug}/brands/{category_id}', [PageController::class,'brands'])->name('brands.all');
Route::get('/{category_slug}/{brand_title}/{category_id}/{brand_id}/devices', [PageController::class,'devices'])->name('category.brands.devices');
Route::get('/{category_slug}/{brand_title}/{device_slug}/{device_id}', [PageController::class,'device'])->name('device.details');

Route::get('get-image',function(){
    $devices=App\Models\Device::all();
    $arr=[];
    foreach($devices as $device){
        $arr[]="https://www.gsmarena.com.bd/images/products/".strtolower($device->slug).".jpg";
    }
    return implode("\n",$arr);
});
// Route::get('/import',[DeviceController::class, 'import']);
// Route::get('change',function(){
//     // $devices=App\Models\Device::orderBy('id','desc')->get();
//     // $devices=App\Models\Device::orderBy('id','desc')->limit(50)->get();
//     // foreach($devices as $device){
//     //     $data=json_decode($device->cover_specifications_2,true);
//     //     // dump($data);
//     //     preg_match('/[0-9]+ [a-zA-Z]*/i',$data['four']['Battery'],$val1);
//     //     preg_match('/[0-9].[0-9]+ inches/i',$data['one']['Display'],$val2);
//     //     if(isset($val1[0]) || isset($val2[0])){
//     //         if(isset($val1[0])){
//     //             $val1=str_replace(" ","",$val1[0]);
//     //             $data['four']['Battery']=$val1;
//     //         }
//     //         if(isset($val2[0])){
//     //             $val2=str_replace(" inches",'"',$val2[0]);
//     //             $data['one']['Display']=$val2;
//     //         }
//     //         // dump($data);
//     //         $device->cover_specifications_2=json_encode($data);
//     //         $device->save();
//     //         // echo $device->id."<br>";
//     //     }
//     // }


//     $devices=App\Models\Device::all();
//     // $devices=App\Models\Device::limit(30)->get();
//     $i=0;
//     foreach($devices as $device){
//         $data=json_decode($device->cover_specifications_2,true);
//         $src=json_decode($device->specifications,true);
//         // dump($src["MAIN CAMERA"]);
//         $src=$src["MAIN CAMERA"];
//         if($src==null){
//             continue;
//         }
//         foreach($src as $sr){
            
//             preg_match('/(\dK)|(\d+p)|No/',$sr,$val);
//             if(isset($val[0])){
//                 // dump($val[0],$src);
//                 $data['two']['Video']=$val[0];
//                 $device->cover_specifications_2=json_encode($data);
//                 $device->save();
//                 $i++;
//                 break;
//             }
//         }
        
//     }
//     dump($i);
// });


// $arr= array_unique($val[0]);
//             if(count($arr)>1){
//                 $vs=[];
//                 foreach($arr as $s){
//                     preg_match('/\d+/i',$s,$v);
//                     $vs[]=$v[0];
//                 }
//                 preg_match('/(GB|MB|KB) RAM/i',$arr[0],$str);
//                 $output=implode('/',$vs).$str[0];
//             }else{
//                 $output=$val[0][0];
//             }
//             if($output!=null){
//                 $output=str_replace(" GB","GB",$output);
//                 $output=str_replace(" MB","MB",$output);
//                 $output=str_replace(" KB","KB",$output);
//                 $data['three']['RAM']=$output;
//                 $device->cover_specifications_2=json_encode($data);
//                 $device->save();
//                 $i++;
//             }
