@extends('layouts.app')
@section('title', 'Categories')
@section('header', 'Categories')
@section('content')
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{url('admin/advertising/create')}}" class="btn btn-success">Add New Advertising</a>
            <a href="{{action('Admin\AdvertisingController@export')}}" class="btn btn-success">Export</a>
            </br>
            </br>
            <form method="get" class="input-group" action="{{url('admin/advertising/all')}}">
              <label style="margin:0px 10px 0px 0px" for="from">From</label>
              <input type="date" name="from"></input>
              <label style="margin:0px 10px 0px 20px" for="to">To</label>
              <input style="margin:0px 10px 0px 0px" type="date" name="to"></input>
              <button class="btn btn-primary">Search</button>
            </form>
            </br>
            <table id="table_id" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company Name</th>
                  <th>Governorate</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Type</th>
                  <th>Views</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($advertisings as $advertising)
                <tr>
                  <td>{{$loop->iteration}}</a></td>
                  <td><a href="{{url('admin/advertising/show/'. $advertising->id)}}">{{$advertising->company_name}}</a>
                  </td>
                  @if($advertising->governorate_id == null)
                  <td>All</td>
                  @else
                  <td>{{optional($advertising->governorate)->name}}</td>
                  @endif

                  @if($advertising->city_id == null)
                  <td>All</td>
                  @else
                  <td>{{optional($advertising->city)->name}}</td>
                  @endif

                  @if($advertising->area_id == null)
                  <td>All</td>
                  @else
                  <td>{{optional($advertising->area)->name}}</td>
                  @endif
                  <td>{{$advertising->ad_type}}</td>
                  <td>{{$advertising->views}}</td>
                  <td><a href="{{url('admin/advertising/edit/'. $advertising->id)}}" class="btn btn-success btn-xs"><i
                        class="fa fa-Edit"></i>Edit</a></td>
                  <td>
                        <form method="GET" action="{{url('admin/advertising/delete/'. $advertising->id)}}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}

                          <div class="form-group">
                              <input type="submit" class="btn btn-danger btn-xs delete" value="delete">
                          </div>
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
  <!-- /.content -->
</div>
@stop
@push('scripts')
  <script>
      $('.delete').click(function(e){
          e.preventDefault() // Don't post the form, unless confirmed
          if (confirm('Are you sure you want to delete this field?')) {
              // Post the form
              $(e.target).closest('form').submit() // Post the surrounding form
          }
      });
  </script>
@endpush
