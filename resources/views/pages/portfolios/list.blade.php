@extends('layouts.admin_layouts')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Portfolios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Sub Title</th>
              <th>Big Image</th>
              <th>Small Image</th>
              <th>Description</th>
              <th>Client</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($portfolios) > 0)
                @foreach ($portfolios as $portfolio)
                  <tr>
                    <th scope="row">{{$portfolio->id}}</th>
                    <td>{{$portfolio->title}}</td>
                    <td>{{$portfolio->sub_title}}</td>
                    <td>
                      <img style="height:10vh" src="{{url($portfolio->big_image)}}" alt="big_image">
                    </td>
                    <td>
                      <img style="height:10vh" src="{{url($portfolio->small_image	)}}" alt="small_image">
                    </td>
                    <td>{{Str::limit(strip_tags($portfolio->description),40)}}</td>
                    <td>{{$portfolio->client}}</td>
                    <td>{{$portfolio->category}}</td>
                    <td>
                      <div class="row">
                        <div>
                          <a href="{{route('admin.portfolios.edit',$portfolio->id)}}" class="btn btn-primary m-2">Edit</a>
                        </div>
                        <div>
                          <form action="{{route('admin.portfolios.destroy',$portfolio->id)}}" method="POST">
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