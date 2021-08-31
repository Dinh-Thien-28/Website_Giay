<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   protected $table = "products";
   public $fillable = [
    'name', 'cate_id', 'image','quantity',
    'price', 'sale_price', 'short_desc',
    'pro_desc', 'specification',
];

public function category(){
    return $this->belongsTo(Category::class, 'cate_id');
}

}

