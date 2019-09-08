<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','imageurl','bird_id'];   

    public function birds() {
        return $this->belongsTo('App\Bird');
        }
}
