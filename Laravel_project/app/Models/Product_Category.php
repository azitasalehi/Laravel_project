<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = 'product_categories';

    protected $guarded=[];

    public $timestamps = false;

    use HasFactory;
}
