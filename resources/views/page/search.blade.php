@extends('master')
@section('content')
<<div class="container">
 		<div id="content" class="space-top-none">
 			<div class="main-content">
 				<div class="space60">&nbsp;</div>
 				<div class="row">
 					<div class="col-sm-12">
 						<div class="beta-products-list">
 							<h4>tim kiem</h4>
 							<div class="beta-products-details">
 								<p class="pull-left">Tìm thấy {{count($service)}} sản phẩm</p>
 								<div class="clearfix"></div>
 							</div>

 							<div class="row">
 							 @foreach( $service as $new)
                                                                                                <div class="col-sm-3">
                                                                                                    <div class="single-item">

                                                                                                        <div class="single-item-header">
                                                                                                            <a href="#"><img src="source/image/service/{{$new->image}}" alt=""height="250px"></a>
                                                                                                        </div>
                                                                                                        <div class="single-item-body">
                                                                                                            <p class="single-item-title">{{$new->name}}</p>
                                                                                                            <p class="single-item-price" style="font_size:18px">

                                                                                                                    <span class="flash-sale">{{$new->price}}</span>

                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div class="single-item-caption">
                                                                                                         <a  href="{{route('adatphong',$new->id)}}">
                                                                                                    <button type="submit" class="btn btn-primary">dat phong</button></a>

                                                                                                            <a class="beta-btn primary" href="{{route('details_service',$new->id)}}">chi tiet <i class="fa fa-chevron-right"></i></a>
                                                                                                            <div class="clearfix"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endforeach
 							</div>
 						</div> <!-- .beta-products-list -->
 						<div class="space50">&nbsp;</div>
 				</div> <!-- end section with sidebar and main content -->
 			</div> <!-- .main-content -->
 		</div> <!-- #content -->



@endsection
