<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $table = 'magazines';
    protected $guarded=[];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mag_category()
    {
        return $this->belongsTo(Mag_category::class,'mag_category_id');
    }


}
