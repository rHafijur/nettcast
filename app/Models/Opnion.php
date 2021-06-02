<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opnion extends Model
{
    use HasFactory;
    protected $fillable=['divice_id','username','body'];
    public function device(){
        return $this->belongsTo('App\Models\Device');
    }
}
