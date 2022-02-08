@extends('admin.layouts.app')

@section('main-content')
<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Roles</h3>
              </div>
              @include('includes.messages')
              <!-- /.card-header -->
              <!-- form start -->
              <div class="content">
              <form role="form" action="{{route('role.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="title">Role Title</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="role">
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <label for="title">Post Permissions</label>
                        @foreach ($permissions as $permission)
                          @if ($permission->for == 'post')
                            <div class="checkbox">
                              <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="col-lg-4">
                        <label for="title">User Permissions</label>
                        @foreach ($permissions as $permission)
                          @if ($permission->for == 'user')
                            <div class="checkbox">
                              <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                            </div>
                          @endif
                        @endforeach
                      </div>
                      <div class="col-lg-4">
                        <label for="title">User Permissions</label>
                        @foreach ($permissions as $permission)
                          @if ($permission->for == 'other')
                            <div class="checkbox">
                              <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                            </div>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  </div>      
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('role.index')}}" class="btn btn-warning">Back</a>
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