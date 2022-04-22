@extends('client.layouts.default')
@section('content')
       <!-- Product -->
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('frontend/images/bg-01.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			Products
		</h2>
	</section>	       <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class=" cl5">
                    
                </h3>
            </div>


            <div class="row isotope-grid">

                @isset($products)
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ asset('images/' . $product['image']) }}" alt="IMG-PRODUCT">

                                    <a href="/product-details/{{ $product['id'] }}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Görüntüle
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="/product-details/{{ $product['id'] }}"
                                            class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $product['name'] }}
                                        </a>

                                        <span class="stext-105 cl3">
                                            {{ $product['promotion_price'] }} ₺
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
        </div>
    </section>
@endsection
