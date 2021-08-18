<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Opinion extends Model
{
    use HasFactory;
    protected $fillable=['divice_id','user_id','body'];
    public function device(){
        return $this->belongsTo('App\Models\Device');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function createdAt(){
        $ca=Carbon::parse($this->created_at);
        return $ca->diffForHumans();
    }
}
