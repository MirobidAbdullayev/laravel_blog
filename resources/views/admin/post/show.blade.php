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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          @can('posts.create', Auth::user())
            <a class="col-lg-offset-5 btn btn-success" href="{{route('post.create')}}">Add New</a>
          @endcan
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="card-head">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>So.No</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                     <td>{{$loop->index + 1}}</td>
                     <td>{{$post->title}}</td>
                     <td>{{$post->subtitle}}</td>
                     <td>{{$post->slug}}</td>
                     <td>{{$post->created_at}}</td>
                     
                      <td><a href="{{route('post.edit', $post->id)}}" class="btn btn"><i class="fas fa-edit"></i></a></td>
                     
                     <td><form id="delete-form-{{$post->id}}" method="post" action="{{route('post.destroy',$post->id)}}" style="display: none">
                      {{csrf_field() }}
                      {{method_field('DELETE')}}
                     </form>
                     <a href="" onClick="if(confirm('Are you sure, You want to delete this? '))
                      {
                       event.preventDefault();
                       document.getElementById('delete-form-{{$post->id}}').submit();
                      }
                      else{event.preventDefault();
                      }"class="btn btn"><i class="fas fa-trash"></i></a></td> 
                      
                    </tr>
                    @endforeach
                  <tfoot>
                    <tr>
                      <th>So.No</th>
                      <th>Title</th>
                      <th>Subtitle</th>
                      <th>Slug</th>
                      <th>Created At</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfood>
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