<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    protected $fillable = ['name',  'category_id', 'habitats_id', 'birdsdetial_id',
    'geographicalrange_id','images_id','videos_id'];   

    public function category() {
    return $this->belongsTo('App\Category');
    }
    public function birdsdetail() {
        return $this->hasOne('App\BirdsDetail');
        }
        public function habitat() {
            return $this->hasMany('App\Habitat');
         }
         public function geographical() {
            return $this->hasMany('App\GeographicalRange');
         }
         public function image() {
            return $this->hasMany('App\Image');
         }
         public function Video() {
            return $this->hasMany('App\Video');
         }
}
