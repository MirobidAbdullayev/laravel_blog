@extends('admin.layouts.app')

@section('main-content')
<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Permission</h3>
              </div>
              @include('includes.messages')
              <!-- /.card-header -->
              <!-- form start -->
              <div class="content">
              <form role="form" action="{{route('permission.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="title">Permission</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="permission">
                    </div>
                    <div class="formg-group">
                      <label for="for">Permission for</label>
                      <select name="for" id="for" class="form-control">
                        <option selected disable>Selected Permission for</option>
                        <option value="user">User</option>
                        <option value="post">Post</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>      
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
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