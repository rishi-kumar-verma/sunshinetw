@extends('admin.layout')
@section('content')
<?php
$url = explode("/", Request::path());

if ($url[0] === 'edit_achievement') {
    $filter = 'Achievement';
    $action = 'update-achievement';
}
if ($url[0] === 'edit_event') {
    $filter = 'Event';
    $action = 'update-event';
}
if ($url[0] === 'edit_gallery') {
    $filter = 'Gallery';
    $action = 'update-gallery';
}
?>
<div class="row">

    <form action="{{url( $action )}}" method="post" enctype="multipart/form-data">

        <input type="hidden" value="{{$info['id']}}" name="id">

        @csrf

        @if($errors->any())
        <div class="alert alert-danger">
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
                <div class="form-group has-feedback" style="position:relative;">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control " id="formGroupExampleInput" value="{{$info['title']}}" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description">{{$info['description']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                <img src="{{ asset('../images/gallery/'.$info->image) }}" alt="Image" width="100">
                            </div>
                            <div class="hidden form-group">
                                <label for="exampleFormControlTextarea1">Catagory</label>
                                <select id="formGroupExampleInput" class="form-control" name="catagory">
                                    <option value={{$filter}} selected>{{ $filter }}</option>
                                </select>
                            </div>
                            <br>
                            <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                            <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                            @if($filter == 'Gallery')
                            <a href="{{url('view_gallery')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
                            @endif
                            @if($filter == 'Event')
                            <a href="{{url('view_event')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
                            @endif
                            @if($filter == 'Achievement')
                            <a href="{{url('view_achievement')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
                            @endif





                        </div>
                    </div>
                </div>




            </div>



        </div>

    </form>
</div>


@endsection
@push('footer-scripts')
@endpush