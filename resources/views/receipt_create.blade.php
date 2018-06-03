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
            <li class="breadcrumb-item"><a href="{{ route('store.show') }}/1">店家</a></li>
            <li class="breadcrumb-item active">我要訂購</li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    {{ Form::open(['id'=>'receipt_crate','method' => 'POST','route'=> ['receipt.store',$store->id], 'files'=>true]) }}
                    {{ Form::hidden('user_id',Auth::user()->id) }}
                    <div class="card-header">訂單資訊</div>
                    <div class="card-body">
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>暱稱(必填)</th>
                                <td>{{ Form::input('text', 'nick-name', null, ['class' => 'form-control', 'placeholder' => '請輸入暱稱(必填)','required']) }}</td>
                                <th>統一編號(可選)</th>
                                <td>{{ Form::input('text', 'uni_number', null, ['class' => 'form-control', 'placeholder' => '請輸入統一編號(可選)']) }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-header">菜單</div>
                    <div class="card-body">
                        {{--                        {{ $ReceiptPresenter->menu_classify($data) }}--}}
                        {{--                        {{ dd($data) }}--}}
                        <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">飯食</div>
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            @foreach($store->od_menus as $menu)
                                @if($menu->classify === "飯食")
                                <tr>
                                    <th>{{ $menu->food_name }}</th>
                                    <td>{{ $menu->cost }}元 {{ Form::selectRange($menu->id.'_num', 0, 20) }}</td>
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
                                        <td>{{ $menu->cost }}元 {{ Form::selectRange($menu->id.'_num', 0, 20) }}</td>
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
                                        <td>{{ $menu->cost }}元 {{ Form::selectRange($menu->id.'_num', 0, 20) }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <div class="bd-example offset-md-5" >
                        {{ Form::submit('送出', ['type'=>'button', 'class'=>'btn btn-primary']) }}
                        <a href="{{ route('store.show') }}/1" class="btn btn-primary">取消</a>
                    </div>
                    {{ Form::close() }}
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
        </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection