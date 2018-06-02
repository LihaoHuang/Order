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
        <form>
          <div class="form-group">
            <label for="account">Account</label>
            <input class="form-control" id="account" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password" required>
              </div>
              <div class="col-md-6">
                <label for="confirmPassword">Confirm password</label>
                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm password" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" id="phone" type="number" aria-describedby="emailHelp" placeholder="Enter phone" required>
          </div>
          
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login">Login Page</a>
          <a class="d-block small" href="forgot-password">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
@endsection