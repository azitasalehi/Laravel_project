<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer_carousel extends Model
{
   protected $table='offer_carousel';
   protected $guarded=[];
   public $timestamps = false;

   use HasFactory;
}
