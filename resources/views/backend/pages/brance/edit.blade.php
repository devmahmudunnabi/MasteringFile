@extends('backend.masterTemplate.masterTemplate')
@section('allcontent')
<div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin templates.</p>
            </div>
        </div>
    
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('branchupdate',$branch->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                       <input type="text" value="{{$branch->br_name}}" class="form-control" name="br_name" placeholder="Enter Branch Name">                
                    </div>
                    <div class="form-group">
                      <input type="text" value="{{$branch->br_manager}}" class="form-control" name="br_manager" placeholder="Enter Branch manager">                    
                    </div>
                    <div class="form-group">
                        <input type="number" value="{{$branch->br_phone}}" class="form-control" name="br_phone" placeholder="Enter Phone Namber">                                 
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$branch->br_email}}" class="form-control" name="br_email" placeholder="Enter Your Email Name">                     
                    </div>                    
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="">-------Select Status----------</option>
                            <option value="1" @if($branch->status)==1) selected @endif>Active</option>
                            <option value="2" @if($branch->status)==2) selected @endif>Inactive</option>
                        </select>
                    </div>
                    <button class="form-control btn btn-success">save</button>
                </form>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection 