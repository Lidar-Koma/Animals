<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'bird_id'];   

    public function bird() {
        return $this->hasMany('App\Bird');
     }
}
?>