@extends('layouts.master')
@section('title', '首頁')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- 明顯的選項 -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">首頁</a>
                </li>
                <li class="breadcrumb-item active">餐廳列表</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-6">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">我要下訂單</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#dataTable">
                            <span class="float-left"></span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-6">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">輸入代碼訂餐</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('receipt.invite') }}">
                            <span class="float-left"></span>
                            <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 餐點-->
                <div class="mb-0 mt-4">
                    <i class="fa fa-newspaper-o"></i> 餐點種類
                </div>
                <hr class="mt-4">
                <div class="row" id="type">
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=610" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('飲料')">飲料</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=180" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('中餐')">中餐</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=190" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('早午餐')">早午餐</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=200" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('西餐')">西餐</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=210" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('冰品')">冰品</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=220" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('隱藏美食')">隱藏美食</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=230" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('甜點')">甜點</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                            <a href="#">
                                <img style="height: 5rem;" class="card-img-top img-fluid w-100"
                                     src="https://unsplash.it/500/250?image=240" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"><a href="#dataTable" @click="select('小吃')">小吃</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Card row-->

            <div class="row" id="result">
                <home-table ref="result" :rows="{{ $stores->toJson(JSON_UNESCAPED_UNICODE)  }}"></home-table>

                <div class="col-xl-3 col-sm-12">
                    <!-- Example Notifications Card-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bell-o"></i> 網友私心推薦
                        </div>
                        <div class="list-group list-group-flush small">
                            @for($i=0; $i<10;$i++)
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media">
                                        <img class="d-flex mr-3 rounded-circle"
                                             src="https://picsum.photos/45/45?image={{240+$i*10}}" alt="">
                                        <div class="media-body">
                                            雲林縣虎尾鎮 <strong>虎尾米糕</strong>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        @endsection
        @section('bundle')
            <script src="{{ asset('js/bundle/index.bundle.js') }}"></script>
@endsection