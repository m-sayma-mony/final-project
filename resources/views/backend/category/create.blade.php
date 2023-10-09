@extends('backend.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Add Category</h1>
            <form action="{{route('store.category')}}" method="POST" enctype="multipart/form-data">
                @include('notify')
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
            
                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
        </div>
    </div>
@endsection