<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Models\Device;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
// Route::get('/sync-brand',[BrandController::class,'sync']);
Route::get('/', [PageController::class,'index']);
Route::get('/compare', [PageController::class,'compare'])->name('compare');
Route::get('/ajax-search/{q}', [PageController::class,'ajax_search'])->name('ajax.search');
Route::get('/compare-ajax-search/{q?}', [PageController::class,'compare_ajax_search'])->name('ajax.compare_search');
Route::get('/news', [NewsController::class,'all'])->name("news.all");
Route::get('/news/{slug}', [NewsController::class,'details'])->name("news.details");

// Route::get('/reviews', [ReviewController::class,'all'])->name("reviews.all");
Route::get('/reviews/{slug}', [ReviewController::class,'details'])->name("reviews.details");

Route::post('/news/comment/new', [NewsController::class,'save_comment'])->name("news.post_comment");
Route::post('/device/comment/new', [DeviceController::class,'save_comment'])->name("device.post_comment");
Route::get('/{category_slug}/brands/{category_id}', [PageController::class,'brands'])->name('brands.all');
Route::get('/{category_slug}/{brand_title}/{category_id}/{brand_id}/devices', [PageController::class,'devices'])->name('category.brands.devices');
Route::get('/{device_slug}_{device_id}', [PageController::class,'device'])->name('device.details');
Route::get('/{device_slug}_{device_id}/pictures', [PageController::class,'device_pictures'])->name('device.pictures');

// Route::get('/import',[DeviceController::class, 'import']);
// Route::get('change',function(){
//     $devices=App\Models\Device::all();
//     $i=0;
//     // $devices=App\Models\Device::limit(10)->get();
//     // dd($devices);
//     // $devices=App\Models\Device::orderBy('id','desc')->limit(50)->get();
//     foreach($devices as $device){
//         $data=json_decode($device->cover_specifications_2,true);
//         // dump($data);
//         // preg_match('/[0-9]+ [a-zA-Z]*/i',$data['four']['Battery'],$val1);
//         $src=json_decode($device->specifications);
//         if($src->DISPLAY==null){
//             continue;
//         }
//         preg_match('/[0-9]+.[0-9]+ inches/i',$src->DISPLAY->Size,$val2);
//         if(isset($val2[0])){
//             $val2=str_replace(" inches",'"',$val2[0]);
//             $data['one']['Display']=$val2;
//             // dump($data);
//             $device->cover_specifications_2=json_encode($data);
//             $device->save();
//             $i++;
//         }
//     }
//     dump($i);

// });
Route::get('change',function(){
    $devices=App\Models\Device::all();
    $i=0;
    foreach($devices as $device){
        $d=storage_path('app/public/device_images/'.$device->id);
        // if(!is_dir($d)){
        //     mkdir($d);
        // }
        if(!(file_exists(public_path('storage/device_images/'.$device->id."/".strtolower($device->slug).".jpg")))){
            // Storage::move();
            // if (copy(storage_path('app/public/device_images/'.strtolower($device->slug).".jpg"), storage_path('app/public/device_images/'.$device->id."/".strtolower($device->slug).".jpg"))) 
            // {
            // unlink(storage_path('app/public/device_images/'.strtolower($device->slug).".jpg"));
            // }
            // $device->image='storage/device_images/'.$device->id."/".strtolower($device->slug).".jpg";
            // $device->save();
            try{
                if(is_dir($d)){
                    rmdir($d);
                }
            }catch(\Exception $e){

            }
            $i++;
        }
    }
    return $i;
});
Route::get('file',function(){
    $d=storage_path('app/public/device_images/');
    // dd(glob($d."huawei-y8p*.jpg"));
    $devices=App\Models\Device::whereNull('image')->get();
    $i=0;
    foreach($devices as $device){
        $D=storage_path('app/public/device_images/'.$device->id);
        $card=$d.strtolower($device->slug)."*.jpg";
        $arr= glob($card);
        if(count($arr)>0){
            if(!is_dir($D)){
                mkdir($D);
            }
            if (copy($arr[0], storage_path('app/public/device_images/'.$device->id."/".strtolower($device->slug).".jpg"))) 
            {
            unlink($arr[0]);
            }
            $device->image='storage/device_images/'.$device->id."/".strtolower($device->slug).".jpg";
            $device->save();
            $i++;
        }
    }
    return $i;
});
route::view('/dashboard','dashboard')->name('dashboard')->middleware('auth');
require __DIR__.'/auth.php';