<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items_sub_categories extends Model
{
    protected  $table = 'items_sub_categories';
    protected $guarded = [];
    public $timestamps=false;
    use HasFactory;
    public function subCategory()
    {
        return $this->belongsTo(Sub_Category::class, 'sub_category_id');
    }

}
