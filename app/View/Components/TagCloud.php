<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\News;
class TagCloud extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tags;
    public $title;
    public function __construct($title = "Tag Cloud", $amount = 20)
    {
        $this->title=$title;
        $tagArray=News::pluck('meta_keywords');
        $countTags=[];
        foreach($tagArray as $t){
            foreach(\json_decode($t) as $tag){
                if(isset($countTags[$tag])){
                    $countTags[$tag]++;
                }else{
                    $countTags[$tag]=1;
                }
            }
        }
        // dump($tagArray);
        arsort($countTags);
        // dd($countTags);
        $this->tags=[];
        $i=0;
        foreach($countTags as $key => $val){
            if($i>$amount) break;
            $this->tags[]=$key;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-cloud');
    }
}
