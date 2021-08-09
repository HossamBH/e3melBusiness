@extends('layouts.app')
@section('title', 'Categories')
@section('header', 'Categories')
@section('content')
<form method="POST" action="{{url(route('admin.categories.update', $category->id))}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>

                    <div class="card-tools">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{old('name', $category->name)}}" name="name" placeholder="Enter Name">
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="active">Activation</label>
                        <select name="active" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option {{ old('active', $category->active) == "1" ? "selected" : "" }} value="1">Active</option>
                            <option {{ old('active', $category->active) == "0" ? "selected" : "" }} value="0">In-Active</option>
                        </select>
                        @error('active')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </section>
</form>
</div>
@stop
