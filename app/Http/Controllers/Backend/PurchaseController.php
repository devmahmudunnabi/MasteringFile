<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Purchase;
use App\Models\Backend\Brace;
use App\Models\Backend\Product;
use App\Models\Backend\stock;

class PurchaseController extends Controller
{
    public function add(){
        $brace=Brace::all();
        return view("backend.pages.purchase.addpurchase",compact("brace"));
    }
    public function store(Request $request){
        $purchase = new Purchase;
        $purchase->date = $request->date;
        $purchase->invoice = $request->invoice;
        $purchase->br_id = $request->br_id;
        $purchase->company_name = $request->company_name;
        $purchase->product_id = $request->pro_code;
        $purchase->dis = $request->dis;
        $purchase->dis_amount = $request->dis_amount;
        $purchase->total = $request->total;
        $purchase->save();

        $stock =new stock();
        $stock->br_id = $request->br_id;
        $stock->pr_id = $request->pro_code;
        $stock->quantity = $request->astock;       
        $stock->save();

        return response()->json([
            "vudapash"=>"success"
        ]);

    }
    public function show(){}
    public function edit($id){}
    public function find($id){
        $product=Product::where('product_code',$id)->select('cost_price')->first();
        $stock=stock::find($product->id);

        return response()->json([
            "product"=>$product,
            "stock"=>$stock
        ]);
    }
    public function update($id){}
    public function deleteid($id){}
    public function stock(){
        $stock = stock::all();
        return view("backend.pages.stock.stock",compact("stock"));
    }
}
