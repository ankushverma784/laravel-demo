@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div> --}}
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">  
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Descriptions</label>
                <textarea class="form-control" style="height:150px" name="description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control" name="price" placeholder="price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="image" class="file-upload-default">
                {{-- <input type="text" class="form-control" name="image" placeholder="price"> --}}
                {{-- <div class="input-group col-xs-12"> --}}
                  {{-- <input type="text" class="form-control file-upload-info" placeholder="Upload Image"> --}}
                  {{-- <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="button">Upload</button> --}}
                  </span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" name="city" placeholder="Location">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label >No of Days</label>
                <input type="text" class="form-control" name="no_of_days" placeholder="Days">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection