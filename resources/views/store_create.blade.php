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
            <li class="breadcrumb-item active">店家建立</li>
        </ol>
        <div class="work" style="width: 100%; height: 5rem;">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">店家資訊</div>
                    <div class="card-body">
                        <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                            <tr>
                                <th width="10%"><label for="store_name">店名</label></th>
                                <td width="40%"><input type="text" class="form-control" id="store_name" placeholder="請輸入店名" required></td> 
                                <th width="10%"><label for="store_name">類型</label></th>
                                <td width="40%">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>飲料</option>
                                            <option>中餐</option>
                                            <option>早午餐</option>
                                            <option>西餐</option>
                                            <option>甜點</option>
                                            <option>小吃</option>
                                            <option>隱藏美食</option>
                                            <option>冰品</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>連絡電話</th>
                                <td>{{Auth::user()->phone}}</td>
                                <th>負責人</th>
                                <td>{{Auth::user()->name}}</td> 
                            </tr>
                            <tr>
                                <th><label for="address">地址</label></th>
                                <td colspan="3"><input type="text" class="form-control" id="address" placeholder="請輸入店名" required></td> 
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card bg-light mb-3" style="margin-top: 1rem">
                    <div class="card-header">菜單 (請先建立分類後，再建立菜單)
                    <button style="float:right" onclick="add_type()" class="btn btn-primary">增加分類</button>
                    </div>
                    <div id="menu" class="card-body">
                        <div id="menu_1">
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
                            <button style="float:right" onclick="add_item(1)" class="btn btn-primary">增加項目</button>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                        var type_num = 0;
                        function add_type() {

                            var div = $("#menu");
                            div.after("<div>"+type_num+"</div>");
                            type_num++;
                            console.log(type_num);
                        }

                        function add_item(num) {
                            // body...
                        }
                 
                </script>
            </div>
        </div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
@endsection