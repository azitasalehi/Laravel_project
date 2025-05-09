<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = 'sub_categories';
    protected $guarded=[];
    public $timestamps = false;


    use HasFactory;
    public function sub_items()
    {
        return $this->hasMany(Items_sub_categories::class,'sub_category_id');
    }
}
