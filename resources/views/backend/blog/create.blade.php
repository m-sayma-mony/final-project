@extends('backend.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Add Blog</h1>
            <form action="{{route('store.blog')}}" method="POST" enctype="multipart/form-data">
                @include('notify')
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                  </div>
            
                <button type="submit" class="btn btn-primary">Add Blog</button>
              </form>
        </div>
    </div>
@endsection