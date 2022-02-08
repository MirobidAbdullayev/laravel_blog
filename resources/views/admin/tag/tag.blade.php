@extends('admin.layouts.app')

@section('main-content')
<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
              @include('includes.messages')
              <!-- /.card-header -->
              <!-- form start -->
              <div class="content">
              <form role="form" action="{{route('tag.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="title">Tag Title</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="slug">Tag Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                  </div>      
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
                </div>
            </form>
          </div> 
        </div>
        </div>
      </div>
      <!-- ./row -->
    </section>
</div>
  <!-- /.content-wrapper -->
@endsection