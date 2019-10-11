

@extends('master')
@section('content')

    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">dich vu{{$service->name_service}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('home')}}">trang chu</a> / <span>thong tin chi tiet</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="source/image/service/{{$service->image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{$service->name_service}}</p>
                                <p class="single-item-price">

                                        <span class="flash-sale">{{$service->price}}</span>

                                </p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>{{$service->description}}</p>
                            </div>
                            <div class="space20">&nbsp;</div>

                            <p>so luong:</p>
                            <div class="single-item-options">

                                <select class="wc-select" name="color">
                                    <option>so luong</option>
                                    <option value="1">1</option>

                                </select>
                                <button type="submit" class="btn btn-primary">dat phong</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">mo ta</a></li>

                        </ul>

                        <div class="panel" id="tab-description">
                            <p>{{$service->description}}</p>

            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
