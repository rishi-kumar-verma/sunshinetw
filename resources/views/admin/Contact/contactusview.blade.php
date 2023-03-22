@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('display_banner')}}" method="post" enctype="multipart/form-data">
@csrf
    @if($errors->any())
    <div class = "alert alert-danger">
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
    </div>
    @endif
    
   
<div class="x_panel">
    <div class="x_title">
      <h2 class="sub_title">Page Content</h2>
        <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
        </ul>
        
        <div class="clearfix"></div>
    </div>
        
        <div class="x_content">
                 

                <div class="table-bordered">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->firstname}}</td>
                            <td>{{$users->subject}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->message}}</td>
                            <td>{{$users->email}}</td>
                        </tr>
                    @endforeach 
                       
                    </tbody>
                    </table>

                    
                </div>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush