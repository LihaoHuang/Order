@extends('layouts.master')
@section('title', '首頁')
@section('content')
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
            <li class="breadcrumb-item">店家</li>
            <li class="breadcrumb-item active"><a href="#">訂單</a></li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">菜單</div>
                    <div class="card-body">
                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">飯食</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>米糕</th>
                                <td>100元</td> 
                                <th>滷肉飯(大)</th>
                                <td>30元</td>
                            </tr>
                            <tr>
                                <th>竹筍飯</th>
                                <td>50元</td> 
                                <th>滷肉飯(小)</th>
                                <td>25元</td>
                            </tr>
                            <tr>
                                <th>控肉飯</th>
                                <td>70元</td> 
                                <th>豬腳飯</th>
                                <td>80元</td>
                            </tr>
                            <tr>
                                <th>雞腿飯</th>
                                <td>80元</td> 
                                <th>排骨飯(小)</th>
                                <td>70元</td>
                            </tr>
                        </table>

                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">小菜</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>竹筍</th>
                                <td>20元</td> 
                                <th>時蔬</th>
                                <td>3元</td>
                            </tr>
                            <tr>
                                <th>滷蛋</th>
                                <td>10元</td> 
                                <th>豆腐</th>
                                <td>15元</td>
                            </tr>
                            <tr>
                                <th>涼拌鴨腳</th>
                                <td>30元</td> 
                                <th>涼拌小黃瓜</th>
                                <td>20元</td>
                            </tr>
                        </table>

                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">飲料</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>紅茶(大)</th>
                                <td>20元</td> 
                                <th>紅茶(小)</th>
                                <td>15元</td>
                            </tr>
                            <tr>
                                <th>奶茶(大)</th>
                                <td>20元</td> 
                                <th>奶茶(小)</th>
                                <td>15元</td>
                            </tr>
                            <tr>
                                <th>豆漿(大)</th>
                                <td>20元</td> 
                                <th>豆漿(小)</th>
                                <td>15元</td>
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

        {{--@if(Auth::user()->authority == "9")--}}

        {{--@else--}}
            {{--<div>你還沒有自己的店嗎? --}}
                {{--<button class="btn btn-primary">創立自己的店面</button>--}}
            {{--</div>--}}
        {{--@endif--}}
        </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection