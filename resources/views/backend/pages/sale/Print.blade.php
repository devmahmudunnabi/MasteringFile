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
            <h2>Merchant Shopping Center</h2>
            <h4>mohammadpur rod,Dhaka</h4>
            <p>Reg:202555</p>
            <div style="over:hiden;">
                <div class="left" style="float:left;">Print date 05-02-2023</div>
                <div class="Right" style="float:Right;">Time: 12:30:25</div>
            </div>
            <hr>
            <table >
                <thead>
                    <tr>
                        <th>#sl1</th>
                        <th>Product Name</th>
                        <th>Quentity</th>
                        <th>Price</th>
                        <th>Dis.Amount</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                    <tr>
                        <td>{{$sl}}</td>
                        <td>{{$sale->}}</td>
                        <td>{{$sale->}}</td>
                        <td>{{$sale->}}</td>
                        <td>{{$sale->}}</td>
                        <td>{{$sale->}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3> thank you</h3>
          </div>
        </div><!-- br-pagebody -->
@endsection
