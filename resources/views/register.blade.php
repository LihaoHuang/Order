@extends('layouts.logmaster')
@section('title', '註冊')
@section('content')
  <style type="text/css">
    body{
        background-image: url('https://picsum.photos/1600/900?image=0&blur');
    }
  </style>
  <div class="container">
    <div align="center">
      <img style="width: 80vw;max-width: 40rem;" src="{{ asset('img/order.png') }}">
    </div>
    <div class="card card-register mx-auto mt-5">
      <div class="card-body">
        {{ Form::open(['method' => 'post', 'route' => 'register']) }}
          <div class="form-group">
            {{ Form::label('username','Account') }}
            {{ Form::text('username',null,['class' => 'form-control','placeholder' =>'Enter account','required'])}}
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                {{ Form::label('password','Password') }}
                {{ Form::password('password',['class' => 'form-control','placeholder' =>'Password','required'])}}
              </div>
              <div class="col-md-6">
                {{ Form::label('password_confirmation','Confirm Password') }}
                {{ Form::password('password_confirmation',['class' => 'form-control','placeholder' =>'Confirm password','required'])}}
              </div>
            </div>
          </div>
          <div class="form-group">
            {{ Form::label('nameHelp','Name') }}
            {{ Form::text('name',null,['class' => 'form-control','aria-describedby' => 'nameHelp','placeholder' =>'Enter name','required'])}}
          </div>
          <div class="form-group">
            {{ Form::label('emailHelp','Email address') }}
            {{ Form::email('email',null,['class' => 'form-control','aria-describedby' => 'emailHelp','placeholder' =>'Enter email','required'])}}
          </div>
          <div class="form-group">
            {{ Form::label('phoneHelp','Phone') }}
            {{ Form::text('phone',null,['class' => 'form-control','aria-describedby' => 'phoneHelp','placeholder' =>'Enter phone','required'])}}
          </div>
          {{ Form::submit('Register',['class' => 'btn btn-primary btn-block']) }}
        {{ Form::close() }}
        <div class="text-center">
          {{ link_to_route('login','Login Page',null,['class' => 'd-block small mt-3']) }}
        </div>
      </div>
    </div>
  </div>
@endsection