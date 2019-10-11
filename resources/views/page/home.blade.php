
@extends('master')
@section('content')
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									 @foreach($slide as $sl)
                                                            <!-- THE FIRST SLIDE -->
                                                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                                                    <div class="slotholder" style="width:100%;height:100%;"
                                                                         data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined"
                                                                         data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined"
                                                                         data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined"
                                                                         data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                                                         data-oheight="undefined">
                                                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                                                             data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                                                             src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}"
                                                                             style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url("source/image/slide/{{$sl->image}}"); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                                                    </div>
                                                    </div>

                                                    </li>
                                                    @endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Service</h4>
							<div class="beta-products-details">
								<p class="pull-left">dich vu {{count( $new_service)}} tim thay</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								 @foreach( $new_service as $new)
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
                                                            <div class="row">{{ $new_service->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>


					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
