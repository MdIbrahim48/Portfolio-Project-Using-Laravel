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
        <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row ml-2">
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="icon"><h4>Font Awesome Icon</h4></label>
                        <input class="form-control" type="text" name="icon" id="icon">
                    </div>
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="description"><h4>Description</h4></label>
                        <textarea type="text" class="form-control" name="description" id="description"></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary ml-3">
        </form>
    </main>
@endsection