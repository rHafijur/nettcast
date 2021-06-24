<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class NewsSection8 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $newsList;
    public $sectionTitle;
    public function __construct($newsList,$sectionTitle ="")
    {
        $this->newsList=$newsList;
        $this->sectionTitle=$sectionTitle;
    }
    public function timeDiff($time){
        $c=Carbon::parse($time)->diffForHumans();
        return $c;
    }
    public function description($str){
        $cnt=strlen($str);
        if($cnt<100){
            return $str;
        }else{
            return substr($str,100)."...";
        }
    }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.news-section8');
    }
}
