@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session()->has('success'))
                    <div class="alert-success">
                        <strong>{{ session('success') }}</strong>
                    </div>
                    @endif

                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" required placeholder="Title" >
                        @if($errors->has('title'))
                          <p class="text-danger">{{ $errors->first('title') }}</li>
                       @endif
                      </div>
                      
                      <div class="form-group">
                        <label>Post Type</label>
                        <select name="post_type" required class="form-control">
                            <option>--select--</option>
                            <option value="1">Image</option>
                            <option  value="2">Video</option>
                        </select>
                        @if($errors->has('post_type'))
                          <p class="text-danger">{{ $errors->first('post_type') }}</li>
                       @endif
                      </div>
                      <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" required name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @if($errors->has('title'))
                          <p class="text-danger">{{ $errors->first('title') }}</li>
                       @endif
                      </div>
                      <div class="form-group">
                        <label >Image / Video </label>
                        <input type="file" name="contain" required id="exampleInputFile">
                        @if($errors->has('contain'))
                          <p class="text-danger">{{ $errors->first('contain') }}</li>
                       @endif
                      </div>
                        
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

