<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded=[];
    public $timestamps = false;
use HasFactory;


public function comments()
{
    return $this->hasMany(Comments::class,'product_id')->where('approve','=',1);

}
}
