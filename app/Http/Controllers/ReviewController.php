<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function details($slug){
        $review=Review::where('slug',$slug)->firstOrFail();
        $device=$review->device;
        $category=$device->category()->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        return view("main.review",compact("review",'device','category'));
    }
}
