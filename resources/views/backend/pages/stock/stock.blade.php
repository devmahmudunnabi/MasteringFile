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
       
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Branch Name</th>
                    <th>Branch Manager name</th>
                    <th>Product Name</th>
                    <th>Cost Price</th>
                    <th>Sales Price</th>
                    <th>Quantity</th>
                </tr>
                @foreach($stock as $stock)
                <tr>
                    <td>{{$stock->brinfo->br_name}}</td>
                    <td>{{$stock->brinfo->br_manager}}</td>                  
                    <td>{{$stock->prinfo->name}}</td>
                    <td>{{$stock->prinfo->cost_price}}</td>
                    <td>{{$stock->prinfo->sale_price}}</td>                  
                    <td>{{$stock->quantity}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div><!-- br-pagebody -->
@endsection