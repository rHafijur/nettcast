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
// Route::get('/import',[DeviceController::class, 'import']);
Route::get('change',function(){
    $devices=App\Models\Device::orderBy('id','desc')->get();
    foreach($devices as $device){
        $device->created_at=Carbon\Carbon::now();
        $device->save();
    }
});
