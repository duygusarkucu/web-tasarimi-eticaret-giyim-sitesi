@extends('client.layouts.default')

@section('content')
   	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('frontend/images/bg-01.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			Product Detail
		</h2>
	</section>	
    
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">

                                <div class="item-slick3" data-thumb="{{ asset('images/' . $product['image']) }}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ asset('images/' . $product['image']) }}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="{{ asset('images/' . $product['image']) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
								@isset($product->get_photos)
								@foreach ($product->get_photos as $photo)

                                <div class="item-slick3" data-thumb="{{ asset('images/' . $photo['image']) }}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ asset('images/' . $photo['image']) }}" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="{{ asset('images/' . $photo['image']) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
																	
								@endforeach
								@endisset
                                @isset($product->images)
                                    @foreach ($product->images as $img)
                                        <div class="item-slick3" data-thumb="{{ asset('images/' . $img['image']) }}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{ asset('images/' . $img['image']) }}" alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    href="{{ asset('images/' . $img['image']) }}">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 p-b-30">
					<form action="{{ url('/api/v1/sepet2/' . $product['id'] . '/' . auth()->user()->id) }}"method="GET">

					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{ $product['name'] }}
						</h4>

						<span class="mtext-106 cl2">
							${{ $product['promotion_price'] }} 
						</span>

					
						
						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="beden">
											<option>Choose an option</option>
											<option value="s">Size S</option>
											<option value="m">Size M</option>
											<option value="l">Size L</option>
											<option value="xl">Size XL</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="color">
											<option>Choose an option</option>
											<option value="red">Red</option>
											<option value="blue">Blue</option>
											<option value="white">White</option>
											<option value="grey">Grey</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="piece" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									
                                    <div class="flex-w flex-r-m p-b-10">
                                        <div class=" flex-w flex-m respon6-next">
                                            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
								</div>
							</div>	
						</div>

					</div>
				</form>
				</div>
                <div class="col-md-12 col-lg-5 p-b-30">
                  
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                       

                      
                        <!--  -->
                        <div class="p-t-33">
            
                            {{ $product['content'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
