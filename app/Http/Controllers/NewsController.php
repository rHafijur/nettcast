<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function all(Request $request){
        if($request->tag){
            $newsArticles=News::whereJsonContains('meta_keywords',$request->tag)->with('author')->withCount('comments')->latest()->paginate(12);
        }elseif($request->q){
            $newsArticles=News::where('title','like',"%$request->q%")
            ->orWhere('meta_description','like',"%$request->q%")
            ->orWhere('body','like',"%$request->q%")
            ->orWhereJsonContains('meta_keywords',$request->q)
            ->with('author')->withCount('comments')->latest()->paginate(12);
        }else{
            $newsArticles=News::with('author')->withCount('comments')->latest()->paginate(12);
        }
        return view('main.news',compact('newsArticles'));
    }
    public function details($slug){
        $news=News::where('slug',$slug)->with('author')->withCount('comments')->firstOrFail();
        $prevNews=News::find($news->id - 1);
        $nextNews=News::find($news->id + 1);
        return view("main.single_news",compact("news","prevNews","nextNews"));
    }
    public function save_comment(Request $request){
        if($request->username){
            $uname=$request->username;
        }else{
            $uname="Anonymous";
        }
        $news=News::findOrFail($request->id);
        $news->comments()->create([
            'username'=>$uname,
            'body'=>$request->body
        ]);
        return redirect()->back();
    }
}
