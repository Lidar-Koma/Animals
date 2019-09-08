<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirdsDetail extends Model
{
    protected $fillable = ['bird_id'];   

    public function birds() {
        return $this->belongsTo('App\Bird');
        }
}
