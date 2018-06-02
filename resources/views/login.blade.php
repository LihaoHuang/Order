@extends('layouts.logmaster')
@section('title', '登入')
@section('content')
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        {{ Form::open(['method' => 'post', 'route' => 'login']) }}
          <div class="form-group">
            {{ Form::label('exampleInputEmail1','Account') }}
            {{ Form::text('username',null,['class' => 'form-control', 'id' => 'exampleInputEmail1','aria-describedby' => 'emailHelp', 'placeholder' => 'Enter Account']) }}
          </div>
          <div class="form-group">
            {{ Form::label('exampleInputPassword1','Password') }}
            {{ Form::password('password',['class' => 'form-control', 'id' => 'exampleInputPassword1', 'placeholder' => 'Password']) }}
          </div>
          {{--<div class="form-group">--}}
            {{--<div class="form-check">--}}
              {{--<label class="form-check-label">--}}
                  {{--{{ Form::checkbox('remember_token',null,null,['class' => 'form-check-input']) }}--}}
                  {{--Remember Password--}}
              {{--</label>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{ Form::submit('Login',['class' => 'btn btn-primary btn-block']) }}
        {{ Form::close() }}
        <div class="text-center">
          {{ link_to_route('register','Register an Account',null,['class' => 'd-block small mt-3']) }}
          {{--<a class="d-block small" href="forgot-password">Forgot Password?</a>--}}
        </div>
      </div>
    </div>
  </div>
@endsection