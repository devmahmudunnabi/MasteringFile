<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;     
    protected $fillable =[
     "sdate",
      "sbr_id",
      "sinvoice",
      "sproduct_id",
      "squantity",
      "sdis",
      "sdis_amount",
      "stotal_amount",
    ];
}
