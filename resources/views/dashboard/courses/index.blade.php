@extends('layouts.app')
@section('title', 'Courses')
@section('header', 'Courses')
@section('content')
<section class="content">

<div class="row">
    <div class="col-12">
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">
        <a href="{{ route('admin.courses.create') }}" class="btn btn-success">Add New Course</a>
        </br>
        </br>
        <table id="table_id" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Rating</th>
                <th>Level</th>
                <th>Hours</th>
                <th>Views</th>
                <th>Activation</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$loop->iteration}}</a></td>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->category->name}}</td>
                <td>{{$course->rating}}</td>
                <td>{{$course->levels}}</td>
                <td>{{$course->hours}}</td>
                <td>{{$course->views}}</td>
                <td>
                    @if($course->active == 0)
                    <a href="{{route('admin.courses.activation', $course->id)}}" class="btn btn-danger">In-Active</i></a>
                    @else
                    <a href="{{route('admin.courses.activation', $course->id)}}" class="btn btn-success">Active</i></a>
                    @endif
                </td>
                <td style="text-align:center;">
                    <a href="{{route('admin.courses.edit', $course->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <form style="display: inline-block" action="{{route('admin.courses.destroy', $course->id)}}" method="post">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            @method('DELETE')
                            @csrf
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div>
        </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
</section>

@stop
@push('scripts')

@endpush
