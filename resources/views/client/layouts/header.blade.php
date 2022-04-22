
<!DOCTYPE html>
<html lang="en">
<head>
	<title> E Ticaret</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('frontend/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition" >
	<div id="app">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
                        @auth
						<a href="/account/{{auth()->user()->id}}" class="flex-c-m trans-04 p-lr-25">
							{{auth()->user()->first_name. ' ' .auth()->user()->last_name . ' '}} My Account
						</a>
                       
                        <a href="/logout" class="flex-c-m trans-04 p-lr-25">
							Log Out
						</a>
                        <a href="/" class="flex-c-m trans-04 p-lr-25">
							@{{api1.name}} 
							{{-- - @{{api1.weather[0].description}} --}}
						</a>
                        @else
                        <a href="/admin/login" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
						<a href="/login" class="flex-c-m trans-04 p-lr-25">
							Register
						</a>
                        @endauth
					
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="/" class="logo">
						<img src="{{ asset('frontend/images/icons/logo-01.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/">Home</a>
							</li>

							<li>
								<a href="/products">Shop</a>
							</li>
							<li>
								<a href="/about">About</a>
							</li>
							<li>
								<a href="/contact">Contact</a>
							</li>
						
							@auth
							<li>
								<a href="/account/{{auth()->user()->id}}">My Account</a>
							</li>
							@endauth
						</ul>
					</div>	
                    @auth
                        
                    <div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" >
							<i class="zmdi zmdi-shopping-cart"> @{{shoping.length}}</i>
						</div>
					</div>

                    @endauth
					<!-- Icon header -->
					
				</nav>
			</div>	
		</div>		<!-- Menu Mobile -->
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Sepetiniz
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12" v-for="(item,index) in shoping" :key="item.id" :index="index">
						<div class="header-cart-item-img">
							<img :src="'/images/'+item.get_products[0].image" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								@{{item.get_products[0].name}}
							</a>

							<span class="header-cart-item-info" style="display: flex; flex-wrap: nowrap; width: 250px">
								@{{item.piece}} × </span>@{{item.get_products[0].promotion_price}} ₺
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
                        Toplam Sepet Tutarı : @{{price}} ₺
					</div>
                    @auth
                    <div class="header-cart-buttons flex-w w-full">
						<a href="{{url('/sepet/'.auth()->user()->id)}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Sepet
						</a>

						<a href="{{url('/sepet/'.auth()->user()->id)}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Sepet'i Onayla
						</a>
					</div>
                    @endauth
					
				</div>
			</div>
		</div>
	</div>
</div>
   