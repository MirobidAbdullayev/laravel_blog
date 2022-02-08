@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('blog')}}">Logout</a></li>
              <li class="breadcrumb-item active">Fazo Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{route('role.create')}}">Add New</a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>So.No</th>
                    <th>Role Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($roles as $role)
                    <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$role->name}}</td>
                    <td><a href="{{route('role.edit', $role->id)}}" class="btn btn"><i class="fas fa-edit"></i></a></td>
                     <td><form id="delete-form-{{$role->id}}" method="post" action="{{route('role.destroy',$role->id)}}" style="display: none">
                      {{csrf_field() }}
                      {{method_field('DELETE')}}
                     </form>
                     <a href="" onClick="if(confirm('Are you sure, You want to delete this? '))
                      {
                       event.preventDefault();
                       document.getElementById('delete-form-{{$role->id}}').submit();
                      }
                      else{event.preventDefault();
                      }"class="btn btn"><i class="fas fa-trash"></i></a></td> 
                    </tr>
                    @endforeach
                  <tfoot>
                  <tr>
                    <th>So.No</th>
                    <th>Role Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection