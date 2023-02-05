<?php

namespace App\Http\Controllers\Backend;
use App\Models\Backend\Product;
use App\Models\Backend\stock;
use App\Models\Backend\Brace;
use App\Models\Backend\Purchase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard(){
        $totalProduct = stock::sum('quantity');
        $purchase = Purchase::sum('total');
        $brace = Brace::count();
        return view("backend.dashboard",compact("totalProduct","brace","purchase"));
    }
}
