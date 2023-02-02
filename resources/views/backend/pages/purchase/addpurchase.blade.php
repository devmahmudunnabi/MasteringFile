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
          <div class="col-md-6">
                <select class="form-control br_id" id="br_id">
                    <option value="">----select Branch-------</option>
                    @foreach($brace as $brace)
                    <option value="{{$brace->id}}">{{$brace->br_name}}</option>
                    @endforeach
                </select>
                <input type="text" class="form-control mt-3 company_name" placeholder="Enter Company Name">

                <input type="date" class="form-control mt-3 date" placeholder="Enter Company Name">

                <input type="number" class="form-control mt-3 invoice" placeholder="Enter invoice Namber">

                <input  type="text" class="form-control mt-3  astock" placeholder="stck">

                <input  type="number" class="form-control mt-3 code" placeholder="Enter product code">

                <input readonly type="number" class="form-control mt-3 cost_price" placeholder="Cost Price">

                <input type="number" class="form-control mt-3 qnt" placeholder="Enter Quentity">

                <input readonly type="number" class="form-control mt-3 total" placeholder=" Total Amount">

                <input type="number" class="form-control mt-3 dis" placeholder="Enter Discount">

                <input readonly type="number" class="form-control mt-3 dis_amount" placeholder="Enter Discount amount">                

                <input readonly type="number" class="form-control mt-3 gtotal" placeholder="Enter Grand Total Amount">
                
                <button class="btn-puradd btn btn-success form-control mt-3"> save</button>
          </div>
      </div>
    </div><!-- br-pagebody -->
@endsection