@extends('layouts.admin_layouts')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Title 1</th>
              <th>Title 2</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($abouts) > 0)
                @foreach ($abouts as $about)
                  <tr>
                    <th scope="row">{{$about->id}}</th>
                    <td>{{$about->title1}}</td>
                    <td>{{$about->title2}}</td>
                    <td>
                      <img style="height:10vh" src="{{url($about->image)}}" alt="big_image">
                    </td>
                    <td>{{Str::limit(strip_tags($about->description),40)}}</td>
                    <td>
                      <div class="row">
                        <div>
                          <a href="{{route('admin.abouts.edit',$about->id)}}" class="btn btn-primary m-2">Edit</a>
                        </div>
                        <div>
                          <form action="{{route('admin.abouts.destroy',$about->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="submit" onclick="return confirm('Are you Delete')" value="Delete" class="btn btn-danger m-2">
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