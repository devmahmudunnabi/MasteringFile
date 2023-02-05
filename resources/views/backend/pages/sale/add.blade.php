@extends('backend.masterTemplate.masterTemplate')
@section('allcontent')
        <div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Dashboard</h4>
                <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>
        </div>
    
       <div class="br-pagebody">
          <div class="row">
          <div class="col-md-2">
                <input type="date" class="form-control sdate">
            </div>
            <div class="col-md-2">
                <select class="sbr_id form-control">
                    <option value="">-----select Branch-----</option>
                    @foreach($Brace as $Brace)
                    <option value="{{$Brace->id}}">{{$Brace->br_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <input readonly value="1234" type="text" class="form-control sinvoice" placeholder="Invoice">
            </div>
            <div class="col-md-2">
                <input readonly type="text" class="form-control sastock" placeholder="astock">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control sproduct_id" placeholder="Enter your Product Id ">
            </div>
            <div class="col-md-2">
                <input readonly type="text" class=" form-control ssale_Price" placeholder="Sale price ">
            </div>
            <div class="col-md-2">
                <input type="text" class=" mt-5 form-control squantity" placeholder="Enter your Quantity">
            </div>     
            <div class="col-md-2">
                <input  readonly type="text" class=" mt-5 form-control sQprice" placeholder="Quantity Price">
            </div>           
            <div class="col-md-2">
                <input  type="text" class="mt-5 form-control sdis" placeholder="Enter your Discount ">
            </div>
            <div class="col-md-2">
                <input readonly type="text" class=" mt-5 form-control sdis_amount" placeholder="Discount Amount ">
            </div>
            <div class="col-md-2">
                <input readonly type="text" class=" mt-5 form-control stotal_amount" placeholder="Total Amount ">
            </div>
            <div class="col-md-2">
                <button class="mt-5 btn btn-info btn_saleadd form-control">Add</button>
            </div>
            <!-- TABILE -->
            <div class="col-md-12 mt-5 pt-5">
                <table class="table">
                   <thead>
                        <tr>
                            <th>Date</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Dis.Amount</th>
                            <th>Sub Total</th>
                            <th>delete</th>
                        </tr>
                   </thead>
                    <tbody class="SalesData">
                       
                    </tbody>
                </table>
            </div>
            <!-- TABILE End -->
            <div class="col-md-2 mt-4 pt-3">
               <button class="btn btn-success form-control" onclick="window.print()">Print <i class="fa fa-print"></i></button>
            </div>
          </div>
      </div><!-- br-pagebody -->
@endsection