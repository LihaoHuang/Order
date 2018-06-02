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
                <a href="#">首頁</a>
                </li>
            <li class="breadcrumb-item active">店家</li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">店家資訊</div>
                    {{ Form::open(['id'=>'store_edit','method' => 'POST','route'=> ['store.update','1'], 'files'=>true]) }}
                    <div class="card-body">
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th>店名</th>
                                <td>{{ Form::text('name', '虎尾米糕', ['class'=>'form-control']) }}</td>
                                <th>類型</th>
                                <td>{{ Form::select('classify', array('小吃'=>'小吃','中餐'=>'中餐','西餐'=>'西餐','早午餐'=>'早午餐','冰品'=>'冰品','甜點'=>'甜點','隱藏美食'=>'隱藏美食'), ['class'=>'form-control']) }}</td>
                            </tr>
                            <tr>
                                <th>連絡電話</th>
                                <td>{{ Form::text('phone','0922113223', ['class'=>'form-control']) }}</td>
                                <th>負責人</th>
                                <td>{{ Form::text('username','威傑尬阿黑', ['class'=>'form-control']) }}</td>
                            </tr>
                            <tr>
                                <th>住址</th>
                                <td colspan="3">{{ Form::text('address','雲林縣虎尾鎮公安路97號', ['class'=>'form-control']) }}</td>
                            </tr>
                        </table>

                        <br>
                        <div class="bd-example offset-md-5" >
                            {{ Form::submit('送出', ['type'=>'button', 'class'=>'btn btn-primary']) }}
                            <a href="{{ route('store.mystore') }}/1" class="btn btn-primary">取消</a>
                        </div>
                        {{ Form::close() }}
                    </div>

                </div>

            </div>

            <div class="col-sm-3">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">我的店面</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="/store/mystore/1" class="list-group-item list-group-item-action">虎尾香腸</a>
                            <a href="/store/mystore/2" class="list-group-item list-group-item-action active">虎尾米糕</a>
                            <a href="/store/mystore/3" class="list-group-item list-group-item-action">虎尾蔥抓餅</a>
                            <a href="#" class="list-group-item list-group-item-action"></a>
                            <a href="/store/create" class="btn btn-success"><i class="fa fa-fw fa-plus"></i>增加店面 </a>
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