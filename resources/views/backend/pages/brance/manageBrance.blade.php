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
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sl NO</th>
                            <th>Brance Name</th>
                            <th>Brance Manager</th>
                            <th>Branch Phone</th>
                            <th>Branch Email</th>
                            <th>Branch Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <?php $sl=1; ?>
                    @foreach($brace as $branch)
                    <tbody>
                        <tr>
                            <td>{{$sl}}</td>
                            <td>{{$branch->br_name}}</td>
                            <td>{{$branch->br_manager}}</td>
                            <td>{{$branch->br_phone}}</td>
                            <td>{{$branch->br_email}}</td>
                            <td>
                                @if($branch->status==1)
                                <a href="{{ Route('status',$branch->id)}}" class="btn btn-success btn-sm">Active</a>
                                @else
                                <a href="{{ Route('status',$branch->id)}}" class="btn btn-danger btn-sm">Inactive</a>
                                @endif
                            </td>                            
                            <td>
                                <a href="{{Route('branchedit',$branch->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{Route('branchdestroy',$branch->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>                            
                        </tr>                    
                    </tbody>
                    <?php $sl++; ?>
                    @endforeach                   
                </table>
            </div>
       </div>
      
      </div><!-- br-pagebody -->
@endsection