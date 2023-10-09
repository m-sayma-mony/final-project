@extends('backend.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Manage Blog</h1>
            @include('notify')
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->name }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>
                                <img src="{{ asset('/') }}{{ $blog->image }}" alt="" width="50">
                            </td>
                            <td>{{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
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
