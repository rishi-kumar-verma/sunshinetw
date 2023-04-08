@extends('admin.layout')
@section('content')
<div class="row">
    <form action="{{url('create_gallery')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </div>
        @endif
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
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
            <?php
            if (Request::path() === 'create_achievement') {
                $filter = 'Achievement';
            }
            if (Request::path() === 'create_event') {
                $filter = 'Event';
            }
            if (Request::path() === 'create_gallery') {
                $filter = 'Gallery';
            }
            ?>
            <div class="x_content">
                <div class="form-group has-feedback" style="position:relative;">
                    <div class="form-group">

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Title</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                        </div>
                        <div class=" hidden form-group">
                            <label for="exampleFormControlTextarea1">Catagory</label>
                            <select id="formGroupExampleInput" class="form-control" name="catagory">
                                <option value={{$filter}} selected>{{ $filter }}</option>
                            </select>
                        </div>
                        <br>
                        <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </div>








                </div>



            </div>

    </form>
</div>


@endsection
@push('footer-scripts')
@endpush