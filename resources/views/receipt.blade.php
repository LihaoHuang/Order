@extends('layouts.master')
@section('title', '首頁')
@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">首頁</a>
                </li>
            <li class="breadcrumb-item active">訂單統計資訊</li>
        </ol>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">
                        <h3 style="display:inline">{{ $receipt->od_stores->name }}</h3> 訂單號碼 - {{ $receipt->id }} ({{ $receipt->create_at->format('H:i:s') }})
                        <a href="/receipt/1/create" style="float:right" class="btn btn-primary">我要訂購</a>
                    </div>
                    <div class="card-body">
                        <style type="text/css">
                            table{
                                border:3px solid;
                                border-color:#000;
                            }
                        </style>
                        <table style="width:100%;" cellpadding="10" border='1'>
                            <tr style="background: gray">
                                <th width="30%">訂單負責人</th>
                                <td colspan="3" style="text-align:right;">{{$receipt->od_users->name}}</td>
                            </tr>
                            @foreach($receipt->od_details as $key => $detail)
                                <tr>
                                    <th width="30%">{{ $detail->od_menus->food_name }} * {{ $detail->num }}</th>
                                    <td>{{ $detail->od_menus->cost }}元</td>
                                </tr>
                            @endforeach
                            <tr style="background: gray">
                                <th>目前總計</th>
                                <td colspan="3" style="text-align:right;">{{ $detail->od_menus->cost * $detail->num }}元</th>
                            </tr>
                        </table>
                    </div>
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
        

        @if(Auth::user()->authority == "9")
        @else
            <div>你還沒有自己的店嗎? 
                <button class="btn btn-primary">創立自己的店面</button>
            </div>
        @endif
        </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection