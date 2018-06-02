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
          {{ Form::open(['method' => 'post','route' => 'receipt.inviteStore', 'class' => 'form-signin']) }}

              <div class="form-group">
                {{ Form::label('invite_code','邀請碼輸入') }}
                {{ Form::text('invite_code',null,['class' => 'form-control', 'id' => 'invite_code', 'placeholder' => '請輸入6位驗證數字', 'required', 'pattern' => '\d{6}','maxlength'=>'6','title' => '數字6碼'])}}
              </div>
            {{ Form::submit('輸入',['class' => 'btn btn-success'])  }}
          {{ Form::close() }}
        </div>
        <div class="col-1">
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection