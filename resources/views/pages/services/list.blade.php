@extends('layouts.admin_layouts')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Icon</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($services) > 0)
                @foreach ($services as $service)
                  <tr>
                    <th scope="row">{{$service->id}}</th>
                    <td>{{$service->icon}}</td>
                    <td>{{$service->title}}</td>
                    <td>{{Str::limit(strip_tags($service->description),40)}}</td>
                    <td>
                      <div class="row">
                        <div class="col-sm-2">
                          <a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col-sm-2">
                          <form action="{{route('admin.services.destroy',$service->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="submit" onclick="return confirm('Are you Delete')" value="Delete" class="btn btn-danger">
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
            @endif
          </tbody>
        </table>
    </main>
@endsection