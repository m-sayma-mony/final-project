@extends('backend.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Manage Category</h1>
            @include('notify')
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <a href="" class="btn">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn">
                            <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection