<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 protected $table = 'categories';
 protected $guarded = [];
 public $timestamps = false;

 use HasFactory;
 public function category_subs()
 {
     return $this->hasMany(Sub_Category::class,'category_id');
 }
}
