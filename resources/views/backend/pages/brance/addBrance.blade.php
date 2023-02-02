@extends('backend.masterTemplate.masterTemplate')
@section('allcontent')
<div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>
        </div>
        <!-- @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{$error}}")
        @endforeach
         @endif -->
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6">
                <form action="{{Route('branchstore')}}" method="POST">
                    @csrf
                    <div class="form-group">
                       <input type="text" value="{{old('br_name')}}" class="form-control" name="br_name" placeholder="Enter Branch Name">
                    <span class="text-danger">
                            @error('br_name')
                                {{$message}}   
                            @enderror
                    </span>
                    </div>
                    <div class="form-group">
                      <input type="text" value="{{old('br_manager')}}" class="form-control" name="br_manager" placeholder="Enter Branch manager">
                        <span class="text-danger">
                                @error('br_manager')
                                    {{$message}}   
                                @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="number" value="{{old('br_phone')}}" class="form-control" name="br_phone" placeholder="Enter Phone Namber">   
                        <span class="text-danger">
                            @error('br_phone')
                                {{$message}}   
                            @enderror
                    </span>             
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('br_email')}}" class="form-control" name="br_email" placeholder="Enter Your Email Name">
                        <span class="text-danger">
                            @error('br_email')
                                {{$message}}   
                            @enderror
                    </span>
                    </div>
                    
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="">-------Select Status----------</option>
                            <option value="1" @if(old('status')==1)selected @endif>Active</option>
                            <option value="2"@if(old('status')==2)selected @endif>Inactive</option>
                        </select>
                        <span class="text-danger">
                            @error('status')
                                {{$message}}   
                            @enderror
                    </div>
                    <button class="form-control btn btn-success">save</button>
                </form>
            </div>
        </div>
      </div><!-- br-pagebody -->
@endsection 