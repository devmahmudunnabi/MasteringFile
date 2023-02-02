<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Backend\Brace;
// use App\Models\Backend\Product;

class stock extends Model
{
    use HasFactory;
    public function brinfo(){
        return $this->belongsTo(Brace::class,'br_id');
    }
    public function prinfo(){
        return $this->belongsTo(Product::class,'pr_id','product_code');
    }
}
   