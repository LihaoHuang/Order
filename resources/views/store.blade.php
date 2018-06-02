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
            <li class="breadcrumb-item active">店家</li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header"><h2 style="display:inline;">{{ $store->name }}</h2>{{ link_to_route('receipt.create','我要訂購',[$store->id],['style' => 'float:right;', 'class' => 'btn btn-primary']) }}</div>
                    <div class="card-body">
                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">飯食</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            @foreach($store->od_menus as $menu)
                                @if($menu->classify === "飯食")
                                <tr>
                                    <th>{{ $menu->food_name }}</th>
                                    <td>{{ $menu->cost }}元</td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">小菜</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            @foreach($store->od_menus as $menu)
                                @if($menu->classify === "小菜")
                                    <tr>
                                        <th>{{ $menu->food_name }}</th>
                                        <td>{{ $menu->cost }}元</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>

                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">飲料</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            @foreach($store->od_menus as $menu)
                                @if($menu->classify === "飲料")
                                    <tr>
                                        <th>{{ $menu->food_name }}</th>
                                        <td>{{ $menu->cost }}元</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">店家資訊</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <div class="list-group-item list-group-item-action list-group-item-primary">店名:{{ $store->name }}</div>
                            <div class="list-group-item list-group-item-action list-group-item-primary">負責人:{{ $store->od_users->name }}</div>
                            <div class="list-group-item list-group-item-action list-group-item-primary"><a href="https://www.google.com.tw/maps?q={{ $store->address }}" target="_blank">地址:{{ $store->address }}</a></div>
                            <div class="list-group-item list-group-item-action list-group-item-primary">電話:{{ $store->phone }}</div>
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
    <style>
        /* Go Top 按鈕 */
        #goTop {
            position: fixed;
            bottom: 10rem; /* 與下方的距離, 也可改為百分比, 即為距離螢幕下方的百分比 */
            right: 1rem; /* 與右方的距離 */
            width: 50px; /* 按鈕原始寬度 */
            height: 50px; /* 按鈕原始高度 */
            opacity: 1; /* 按鈕原始透明度 */
            z-index: 10;
            cursor: pointer;
        }
    </style>
    <!-- Go Top 按鈕 -->
    <a href="/receipt/1/create" id="goTop" class="btn btn-primary" title="Back to Top">買</a>

@endsection