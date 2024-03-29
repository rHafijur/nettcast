<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=['username','body','commentable_id','commentable_type'];

    public function commentable()
    {
        return $this->morphTo();
    }
    public function getCreatedTime(){
        $c=Carbon::parse($this->created_at)->diffForHumans();
        return $c;
    }
}
