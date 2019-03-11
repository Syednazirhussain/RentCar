@extends('admin.auth.default')


@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Admin</b>LTE</a>
  </div>
  @include('include.messages')
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="{{ route('admin.login.attempt') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
    <a href="javascript:void(0)">I forgot my password</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection