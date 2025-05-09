<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner_ads extends Model
{
    protected $table = 'banner_ads';
    protected $guarded=[];
    public $timestamps = false;

    use HasFactory;
}
