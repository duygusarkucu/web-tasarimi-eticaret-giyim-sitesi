@extends('client.layouts.default')
@section('content')
    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">

                @isset($sliders)
                    @foreach ($sliders as $slider)
                        <div class="item-slick1" style="background-image: url({{ asset('images/' . $slider['image']) }});">
                            <div class="container h-full">
                                <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                    <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                        <span class="ltext-101 cl2 respon2">
                                            {{ $slider['title'] }}
                                        </span>
                                    </div>

                                    <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                        <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                            {{ $slider['subtitle'] }}
                                        </h2>
                                    </div>

                                    <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                        <a href="/products"
                                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                            {{ $slider['button_text'] }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
    <!-- Banner -->

	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('frontend/images/banner-01.jpg')}}" alt="IMG-BANNER">

						<a href="/products" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('frontend/images/banner-02.jpg')}}" alt="IMG-BANNER">

						<a href="/products" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('frontend/images/banner-03.jpg')}}" alt="IMG-BANNER">

						<a href="/products" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Our Products
                </h3>
            </div>
            <div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Women
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Men
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Bag
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Shoes
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Watches
					</button>
				</div>
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>


			</div>
            <div class="row isotope-grid">

                @isset($products)
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product['kategori']}}">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ asset('images/' . $product['image']) }}" alt="IMG-PRODUCT">

                                    <a href="/product-details/{{ $product['id'] }}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Show Product
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="/product-details/{{ $product['id'] }}"
                                            class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $product['name'] }}
                                        </a>

                                        <span class="stext-105 cl3">
                                            {{ $product['promotion_price'] }} $
                                        </span>
                                    </div>
                                    @auth
                                        <div class="block2-txt-child2 flex-r p-t-3">
                                            <a href="{{ url('/api/v1/sepet/' . $product['id'] . '/' . auth()->user()->id) }}"
                                                class="btn-addwish-b2 dis-block pos-relative">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </a>
                                        </div>
                                    @endauth

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="/products" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Go To All Products
                </a>
            </div>
        </div>
    </section>

@endsection
