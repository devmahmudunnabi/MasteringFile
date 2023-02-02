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
            <div class="col-md-4">
                    <input type="text" id="name" class="form-control name" placeholder="Enter product Name">
                    <span class="text-danger error_name">
                    </span>

                    <textarea class="form-control mt-3 des" cols="20" rows="5" placeholder="Enter description">{{old('des')}}</textarea>
                    <span class="text-danger error_des">                           
                    </span>

                    <select class="form-control mt-3 size">
                        <option value="">------- Select Size --------</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="l">l</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>  
                    <span class="text-danger error_size">
                    </span>  

                    <input type="color" value="{{old('color')}}" class="form-control mt-3 color" placeholder="Enter Your color Name">
                    <span class="text-danger  error_color">
                    </span>

                    <input type="number" value="{{old('product_code')}}" class="form-control mt-3 product_code" placeholder="Enter Your product_code Name">
                    <span class="text-danger error_product_code">
                    </span>

                    <input type="number" value="{{old('cost_price')}}" class="form-control mt-3 cost_price" placeholder="Enter Your cost_price">
                    <span class="text-danger error_cost_price">
                    </span> 
                     <input type="number" value="{{old('sale_price')}}" class="form-control mt-3 sale_price" placeholder="Enter Your sale_price">
                    <span class="text-danger error_sale_price">

                    </span>

                   <button class="form-control addproduct btn btn-success mt-3">save</button>
            </div>
            <div class="col-md-8">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#sl</th>
                            <th>Product Name</th>
                            <th>Product Size</th>
                            <th>Product Color</th>
                            <th>Product Code</th>
                            <th>Cost Price</th>
                            <th>Sale Price</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody class="data">
                                     
                    </tbody>
                </table>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confarm Massage to Delete</h5>                   
                    </div>
                    <div class="modal-body">
                    Are you sure Delete this Data.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button"  value="'+item.id+'" class="deleteProductId btn btn-danger ">Delete</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- For edit  -->
            <!-- Modal -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
                    </div>
                    <div class="modal-body">


                            <input type="text" id="namcghxe" class="form-control " placeholder="Enter product Name">                          
                            <textarea class="form-control mt-3" id="des" cols="20" rows="5" placeholder="Enter description">{{old('des')}}</textarea>

                            <select class="form-control mt-3 " id="size">
                                <option value="">------- Select Size --------</option>
                                <option value="XXL">XXL</option>
                                <option value="XL">XL</option>
                                <option value="l">l</option>
                                <option value="M">M</option>
                                <option value="S">S</option>
                            </select>  
                           
                            <input type="color" id="color" class="form-control mt-3 " placeholder="Enter Your color Name">
                          
                            <input type="number" id="product_code" class="form-control mt-3 " placeholder="Enter Your product_code Name">
                           
                            <input type="number" id="cost_price" class="form-control mt-3 " placeholder="Enter Your cost_price">
                            
                            <input type="number" id="sale_price" class="form-control mt-3 " placeholder="Enter Your sale_price">

                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary update">Update</button>
                    </div>
                    </div>
                </div>
            </div>
      </div><!-- br-pagebody -->
@endsection  