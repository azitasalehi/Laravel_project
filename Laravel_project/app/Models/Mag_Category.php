<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mag_Category extends Model
{
    protected $table = 'mag_categories';
    protected $guarded=[];
    public $timestamps = false;


    public function category_Mag()
    {
        return $this->hasMany(Mag_Category::class,'mag_category_id');

    }
}
