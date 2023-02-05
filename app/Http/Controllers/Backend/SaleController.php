<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Sale;
use App\Models\Backend\Brace;
use App\Models\Backend\Product;

class SaleController extends Controller
{
    public function add(){
        $Brace = Brace::all();
        return view("backend.pages.sale.add",compact("Brace"));
    }
    public function store(Request $request){
        $sale = New Sale;
        $sale->sdate = $request->date;    
        $sale->sbr_id = $request->br_id;
        $sale->sinvoice = $request->invoice;
        $sale->sproduct_id = $request->product_id;
        $sale->squantity = $request->quantity;
        $sale->sdis = $request->dis;
        $sale->sdis_amount = $request->dis_amount;
        $sale->stotal_amount = $request->total_amount;
        $sale->save();
        return response()->JSON([
            'status'=>"success"
        ]);
    }
    public function salesshow(){
        $sales =Sale::latest()->get();
        return response()->json([
            "data"=> $sales
        ]);
    }
    public function edit(){
        
    }
    public function find($id){
        $product = Product::find($id);
        return response()->JSON([
            'data'=>$product
        ]);
    }
    public function update(){
        
    }
    public function destroy($id){
        $sales=sale::find($id);
        $sales->delete();
        return response()->Json([
            'status'=>"success"
        ]);
    }
}