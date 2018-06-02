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
            <li class="breadcrumb-item active">即時訂單</li>
        </ol>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">訂單 - 001 (05:31:22)</div>
                    <div class="card-body">
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th width="30%">奶茶(大) * 5</th>
                                <td>100元</td> 
                                <th width="30%">滷肉飯 * 6</th>
                                <td>180元</td>
                            </tr>
                            <tr>
                                <th width="30%">清蒸鮭魚 * 1</th>
                                <td>120元</td> 
                                <th width="30%">滷蛋 * 3</th>
                                <td>30元</td>
                            </tr>
                            <tr>
                                <th width="30%">雞腿飯 * 3</th>
                                <td>240元</td> 
                                <th width="30%">豬腳飯 * 1</th>
                                <td>80元</td>
                            </tr>
                            <tr>
                                <th>總共</th>
                                <td colspan="3" style="text-align:right; ">750元</th>
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
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">我的店面</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="/store/1/show" class="list-group-item list-group-item-action">虎尾香腸</a>
                            <a href="/store/2/show" class="list-group-item list-group-item-action active">虎尾米糕</a>
                            <a href="/store/3/show" class="list-group-item list-group-item-action">虎尾蔥抓餅</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection