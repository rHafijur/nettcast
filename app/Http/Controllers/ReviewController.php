<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function details($slug){
        $review=Review::where('slug',$slug)->firstOrFail();
        if(!strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
        {
            $review->increment('view_count');
        }
        $device=$review->device;
        $category=$device->category()->with(['brands'=>function($q){
            return $q->orderby('priority','asc')->limit(40);
        }])->firstOrFail();
        $title=$review->title;
        return view("main.review",compact("review",'device','category'));
    }
}
