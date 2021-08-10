@extends('layouts.app')
@section('title', 'Courses')
@section('header', 'Courses')
@section('content')
    <form method="POST" action="{{url(route('admin.courses.update', $course->id))}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Edit Course</h3>
                        <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{old('name', $course->name)}}" name="name" placeholder="Enter Name">
                                @error('name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Description">{{ old('description', $course->description) }}</textarea>
                                @error('description')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option {{ old('category_id') == "" ? "selected" : "" }} value="" disabled>Choose Activation</option>
                                    @foreach ($categories as $category)
                                    <option {{ old('category_id', $course->category_id) == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <input type="text" class="form-control" value="{{old('rating', $course->rating)}}" name="rating" placeholder="Enter Rating">
                                @error('rating')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="levels">Level</label>
                                <select name="levels" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option {{ old('levels', $course->levels) == "" ? "selected" : "" }} value="" disabled>Choose Level</option>
                                    <option {{ old('levels', $course->levels) == "beginner" ? "selected" : "" }} value="beginner">Beginner</option>
                                    <option {{ old('levels', $course->levels) == "immediat" ? "selected" : "" }} value="immediat">Immediat</option>
                                    <option {{ old('levels', $course->levels) == "high" ? "selected" : "" }} value="high">High</option>
                                </select>
                                @error('levels')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hours">Hours</label>
                                <input type="number" class="form-control" value="{{old('hours', $course->hours)}}" name="hours" placeholder="Enter Hours">
                                @error('hours')
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
                                    <option {{ old('active') == "" ? "selected" : "" }} value="" disabled>Choose Activation</option>
                                    <option {{ old('active', $course->active) == "1" ? "selected" : "" }} value="1">Active</option>
                                    <option {{ old('active', $course->active) == "0" ? "selected" : "" }} value="0">In-Active</option>
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
@stop
