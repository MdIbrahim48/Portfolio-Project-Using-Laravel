@extends('layouts.admin_layouts')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <form action="{{route('admin.abouts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group ml-2 mt-3 col-md-3">
                    <h3>Image</h3>
                    <img style="height:30vh" src="{{asset('assets/img/big.jpg')}}" class="img-thumbnail" alt="">
                    <input class="mt-3" type="file" name="image">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title1"><h4>Title 1</h4></label>
                        <input class="form-control" type="text" name="title1" id="title1" value="">
                    </div>
                    <div class="mb-5">
                        <label for="title2"><h4>Title 2</h4></label>
                        <input type="text" class="form-control" name="title2" id="title2" value="">
                    </div>
                </div>
                <div class="form-group ml-2 mt-3 col-md-6">
                    <h3>Description</h3>
                    <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary ml-3 my-5">
        </form>
    </main>
@endsection