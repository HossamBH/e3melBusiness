@extends('layouts.app')
@section('title', 'Categories')
@section('header', 'Categories')
@section('content')
<section class="content">

<div class="row">
    <div class="col-12">
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add New Category</a>
        </br>
        </br>
        <table id="table_id" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Activation</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</a></td>
                <td>{{$category->name}}</td>
                <td>
                    @if($category->active == 0)
                    <a href="{{route('admin.categories.activation', $category->id)}}" class="btn btn-danger">In-Active</i></a>
                    @else
                    <a href="{{route('admin.categories.activation', $category->id)}}" class="btn btn-success">Active</i></a>
                    @endif
                </td>
                <td style="text-align:center;">
                    <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <form style="display: inline-block" action="{{route('admin.categories.destroy', $category->id)}}" method="post">
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
