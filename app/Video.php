<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['name','videourl','bird_id'];   

    public function birds() {
        return $this->belongsTo('App\Bird');
        }
}
