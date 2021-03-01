    @extends('layouts.admin_layouts')

    @section('content')
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashbord</li>
                </ol>
            </div>
            <form action="{{route('admin.main.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group ml-2 mt-3 col-md-3">
                        <h3>Background Image</h3>
                        <img style="height:30vh" src="{{url($main->bc_img)}}" class="img-thumbnail" alt="">
                        <input class="mt-3" type="file" name="bc_img" id="bc_img">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{($main->title)}}">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{($main->sub_title)}}">
                        </div>
                        <div>
                            <h4>Upload Resume</h4>
                            <input type="file" name="resume" id="resume">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5 ml-3">
            </form>
        </main>
    @endsection