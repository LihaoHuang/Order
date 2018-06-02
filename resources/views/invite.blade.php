@extends('layouts.master')
@section('title', '首頁')
@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">首頁</a>
        </li>
        <li class="breadcrumb-item active">邀請碼輸入</li>
      </ol>
      <div class="row">
        <div class="col-1">
        </div>
        <div class="col-10">
          <form action='{{ route('receipt.inviteStore') }}' class="form-signin" method="post">
             {{ csrf_field() }} 
              <div class="form-group">
                <label for="invite_code">邀請碼輸入</label>
                <input type="number" class="form-control" id="invite_code" name="invite_code" placeholder="請輸入6位驗證數字" required pattern="banana|cherry"/>
              </div>
              <button class="btn btn-success" type="submit">輸入</button>
          </form>
        </div>
        <div class="col-1">
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection