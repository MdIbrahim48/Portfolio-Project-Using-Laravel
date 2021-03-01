@extends('layouts.admin_layouts')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <form action="{{route('admin.portfolios.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group ml-2 mt-3 col-md-3">
                    <h3>Big Image</h3>
                    <img style="height:30vh" src="{{asset('assets/img/big.jpg')}}" class="img-thumbnail" alt="">
                    <input class="mt-3" type="file" name="big_image">
                </div>
                <div class="form-group ml-2 mt-3 col-md-3">
                    <h3>Small Image</h3>
                    <img style="height:20vh" src="{{asset('assets/img/small.jpg')}}" class="img-thumbnail" alt="">
                    <input class="mt-3" type="file" name="small_image">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input class="form-control" type="text" name="title" id="title" value="">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" value="">
                    </div>
                </div>
                <div class="form-group ml-2 mt-3 col-md-6">
                    <h3>Description</h3>
                    <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="client"><h4>Client</h4></label>
                        <input class="form-control" type="text" name="client" id="client" value="">
                    </div>
                    <div class="mb-3">
                        <label for="category"><h4>Category</h4></label>
                        <input type="text" class="form-control" name="category" id="category" value="">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary ml-3">
        </form>
    </main>
@endsection