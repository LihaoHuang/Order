@extends('layouts.master')
@section('title', '首頁')
@section('content')
    <style type="text/css">
        .work{
            background-image: url("{{ asset('img/work.gif') }}");
            background-size:40px 40px;
            opacity: 0.5;
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
        <div class="work" style="width: 100%; height: 2rem;">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action='{{ route('store.store') }}' class="form-signin" method="post">
                    {{ csrf_field() }}
                    <div class="card bg-light mb-3" style="margin-top: 1rem">
                        <div class="card-header">店家資訊</div>
                        <div class="card-body">
                            <table style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                                <tr>
                                    <th width="10%"><label for="store_name">店名</label></th>
                                    <td width="40%"><input type="text" class="form-control" name="store_name" id="store_name" placeholder="請輸入店名" required></td> 
                                    <th width="10%"><label for="store_name">類型</label></th>
                                    <td width="40%">
                                        <div class="form-group">
                                            <select class="form-control" name="type" id="type">
                                                <option  value="飲料">飲料</option>
                                                <option  value="中餐">中餐</option>
                                                <option  value="早午餐">早午餐</option>
                                                <option  value="西餐">西餐</option>
                                                <option  value="甜點">甜點</option>
                                                <option  value="小吃">小吃</option>
                                                <option  value="隱藏美食">隱藏美食</option>
                                                <option  value="冰品">冰品</option>
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
                                    <td colspan="3"><input type="text" class="form-control" name="address" id="address" placeholder="請輸入店名" required></td> 
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card bg-light mb-3" style="margin-top: 1rem">
                        <div class="card-header">菜單 (請先建立分類後，再建立菜單)
                        <button style="float:right" onclick="add_type()" class="btn btn-primary">增加分類</button>
                        </div>
                        <div id="menu" class="card-body">
                            <div id="menu_0">
                                <div class="alert alert-primary" style="margin-bottom:0;margin-top:1rem;" role="alert">
                                    <label for="menu_type_0"  style="display:inline">分類名稱</label>
                                    <input type="text" class="form-control col-6" name="menu_type_0" id="menu_type_0" placeholder="請輸入分類名稱" required>                                
                                </div>
                                <table id="menu_table_0" style="width:100%" style="border:3px solid;" cellpadding="10" border='1'>
                                    <tr>
                                        <th><label for="menu_item_0_1">項目</label></th>
                                        <td><input type="text" class="form-control" name="menu_item_0[]" placeholder="請輸入餐點名稱" required></td> 
                                        <th><label for="menu_money_0_1">價錢</label></th>
                                        <td><input type="number" class="form-control" name="menu_money_0[]" placeholder="請輸入餐點價錢" required></td>
                                    </tr>
                                </table>
                                <button style="float:right" onclick="add_item(0)" class="btn btn-primary">增加項目</button>
                            </div>

                            <!-- Go Top 按鈕 -->
                            <button type="button" id="goAdd" onclick="add_type()" class="btn btn-primary" title="Back to Top">點我增加分類</button>
                            <button type="submit" id="goStore" class="btn btn-success" title="Back to Top">儲存(填寫完成)</button>
                            <button type="button" id="goCancle" onclick="if(confirm('確定放棄建立嗎？')){location.href = '/store/mystore';}" class="btn btn-secondary" title="Back to Top">取消(返回前頁)</button>
                        </div>
                    </div>

                    <script type="text/javascript">
                        var type_num = 1;
                        function add_type() {

                            var div = $("#menu");
                            div.append(""
                                +"<div class='alert alert-primary' style='margin-bottom:0;margin-top:3rem;' role='alert'>"
                                +    "<label for='menu_type_"+type_num+"'  style='display:inline'>分類名稱</label>"
                                +    "<input type='text' class='form-control col-6' name='menu_type_"+type_num+"' id='menu_type_"+type_num+"' placeholder='請輸入分類名稱' required>"
                                +"</div>"
                                +"<table id='menu_table_"+type_num+"' style='width:100%' style='border:3px solid;' cellpadding='10' border='1'>"
                                +    "<tr>"
                                +        "<th><label for='menu_item_"+type_num+"_1'>項目</label></th>"
                                +        "<td><input type='text' class='form-control' name='menu_item_"+type_num+"[]' placeholder='請輸入餐點名稱' required></td> "
                                +        "<th><label for='menu_money_"+type_num+"_1'>價錢</label></th>"
                                +        "<td><input type='number' class='form-control' name='menu_money_"+type_num+"[]' placeholder='請輸入餐點價錢' required></td>"
                                +    "</tr>"
                                +"</table>"
                                +"<button style='float:right' onclick='add_item("+type_num+")' class='btn btn-primary'>增加項目</button>"
                                );
                            type_num++;
                            console.log(type_num);
                        }

                        function add_item(num) {
                            var div = $("#menu_table_"+num);
                            div.append(""
                                +    "<tr id='menu_table_0'>"
                                +        "<th><label for='menu_item_"+num+"_1'>項目</label></th>"
                                +        "<td><input type='text' class='form-control' name='menu_item_"+num+"[]' placeholder='請輸入餐點名稱' required></td> "
                                +        "<th><label for='menu_money_"+num+"_1'>價錢</label></th>"
                                +        "<td><input type='number' class='form-control' name='menu_money_"+num+"[]' placeholder='請輸入餐點價錢' required></td>"
                                +    "</tr>"
                                )

                            console.log(num);
                        }
                    </script>
                </form>
            </div>
            
        </div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <style>
        /* Go 按鈕 */
        #goAdd {
            position: fixed;
            top: 7rem; /* 與下方的距離, 也可改為百分比, 即為距離螢幕下方的百分比 */
            right: 1rem; /* 與右方的距離 */
            width: 10rem; /* 按鈕原始寬度 */
            opacity: 0.8; /* 按鈕原始透明度 */
            z-index: 10;
            cursor: pointer;
        }
        #goStore {
            position: fixed;
            top: 10rem; /* 與下方的距離, 也可改為百分比, 即為距離螢幕下方的百分比 */
            right: 1rem; /* 與右方的距離 */
            width: 10rem; /* 按鈕原始寬度 */
            opacity: 0.8; /* 按鈕原始透明度 */
            z-index: 10;
            cursor: pointer;
        }
        #goCancle {
            position: fixed;
            top: 13rem; /* 與下方的距離, 也可改為百分比, 即為距離螢幕下方的百分比 */
            right: 1rem; /* 與右方的距離 */
            width: 10rem; /* 按鈕原始寬度 */
            opacity: 0.8; /* 按鈕原始透明度 */
            z-index: 10;
            cursor: pointer;
        }
    </style>
@endsection