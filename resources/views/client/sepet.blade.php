@extends('client.layouts.default')
@section('content')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('frontend/images/bg-01.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			Shoping Cart
		</h2>
	</section>	
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" style="height: 90vh !important">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Ürün</th>
									<th class="column-2"></th>
									<th class="column-3">Fyat</th>
									<th class="column-4">Adet</th>
									<th class="column-5">Toplam</th>
									<th class="column-5">Sil</th>
								</tr>                        
                            @isset($sepet)
                                    @foreach ($sepet as $sep)

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{asset('images/'.$sep->get_products[0]->image)}}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{$sep->get_products[0]->name}}</td>
									<td class="column-3">₺ {{$sep->get_products[0]->promotion_price}}</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">

											<input type="text"  value="{{$sep->piece}}" disabled>
										</div>
									</td>
									<td class="column-5">{{$sep->get_products[0]->promotion_price * $sep->piece}} ₺</td>
                                    <td class="action"><a href="{{url('/api/v1/sepet-del/'.$sep->id)}}" class="text-muted"><i class="fs-16 zmdi zmdi-minus"></i></a></td>

                                </tr>
                                @endforeach
                            @endisset
                               
							</table>
                            <tr>
                                <div class="cart-action text-end">
                                    <a href="/products" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Alışverişe Devam Et</a>
                                    <a href="{{url('/api/v1/orders/'.auth()->user()->id)}}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Şiparişi Ver</a>
                                </div>
                            </tr>
						</div>

					</div>
				</div>

			</div>
		</div>
        
	</form>
@endsection
		