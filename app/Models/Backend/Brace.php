<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brace extends Model
{
    use HasFactory;
    protected $fileable=[
        'br_name',
        'br_manager',
        'br_phone',
        'br_email',
        'status',
    ];

}
