@extends('layouts.master')
@section('title', '首頁')
@section('content')
    @inject('ReceiptPresenter', '\App\Presenters\ReceiptPresenter')
    <style type="text/css">
        .work{
            background-image: url("{{ asset('img/work.gif') }}");
            background-size:100px 100px;
        }
    </style>
  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
                </li>
            <li class="breadcrumb-item"><a href="{{ route('store.index') }}/1">店家</a></li>
            <li class="breadcrumb-item active">我要訂購</li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    {{ Form::open(['id'=>'receipt_crate','method' => 'POST','route'=> ['receipt.store','9'], 'files'=>true]) }}
                    <div class="card-header">訂單資訊</div>
                    <div class="card-body">
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>暱稱(必填)</th>
                                <td>{{ Form::input('text', 'nick_name', null, ['class' => 'form-control', 'placeholder' => '請輸入暱稱(必填)']) }}</td>
                                <th>統一編號(可選)</th>
                                <td>{{ Form::input('text', 'uni_number', null, ['class' => 'form-control', 'placeholder' => '請輸入統一編號(可選)']) }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="bd-example offset-md-5" >
                        {{ Form::submit('送出', ['type'=>'button', 'class'=>'btn btn-primary']) }}
                        <a href="{{ route('store.index') }}/1" class="btn btn-primary">取消</a>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">店家資訊</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <div class="list-group-item list-group-item-action list-group-item-primary">店名:虎尾香腸</div>
                            <div class="list-group-item list-group-item-action list-group-item-primary">負責人:威傑尬阿黑</div>
                            <div class="list-group-item list-group-item-action list-group-item-primary"><a href="https://www.google.com.tw/maps?q=雲林縣虎尾鎮公安路97號" target="_blank">地址:雲林縣虎尾鎮公安路97號</a></div>
                            <div class="list-group-item list-group-item-action list-group-item-primary">電話:0912345678</div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection