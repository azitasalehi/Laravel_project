<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mini_icon extends Model
{
    protected $table = 'mini_icons';
    protected $guarded=[];
    public $timestamps = false;

    use HasFactory;

}
