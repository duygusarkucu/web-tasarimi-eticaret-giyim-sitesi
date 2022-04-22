@extends('client.layouts.default')
@section('content')
<style>
    .col-md-6 input{
        border: solid 1px#efefef;
         padding-left: 7px !important
    }

</style>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('frontend/images/bg-01.jpg')}}');">
		<h2 class="ltext-105 cl0 txt-center">
			Account
		</h2>
	</section>	
<div class="container  col-md-8">
    <br>
    <br>
    <br>
    <br>
    <form method="POST" action="/user-update/"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{auth()->user()->id}}">
            <div class=" col-md-6">
                <label>Mevcut Görsel <span class="required">*</span></label>
                <img src="{{asset('images/'.$user->image)}}"  class="img-fluid" style="width: 200px; height:200px; border-radius: 50%" alt="">
            </div>
            <div class=" col-md-6">
                <label>Yeni Görsel <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62"  type="file" name="image" >
            </div>
            <div class=" col-md-6">
                <label>First Name <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62"  value="{{$user->first_name}}" type="text"  name="first_name">
            </div>
            <div class=" col-md-6">
                <label>Last Name <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" value="{{$user->last_name}}" name="last_name" >
            </div>
            <div class=" col-md-12">
                <label>Email Address <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" name="email" value="{{$user->email}}" type="email" >
            </div>
            <div class=" col-md-6">
                <label>Adres1 <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" value="{{$user->state}}" name="state" >
            </div>
            <div class=" col-md-6">
                <label>Ülke <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" value="{{$user->country}}" name="country" >
            </div>
            <div class=" col-md-6">
                <label>Telefon <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" value="{{$user->phone}}" name="phone" >
            </div>
            <div class=" col-md-6">
                <label>Password <span class="required">*</span></label>
                <input class="stext-111 cl2 plh3 size-116 p-l-62" name="password" value="{{bcrypt($user->password)}}" type="password">
            </div>
            <div class="col-md-12">
                <br>
                <br>
                <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit" style="background: #515525 ; color: #efefef">Güncelle</button>
                <a href="/admin/user/{{$user->id}}" class="btn btn-fill-out submit" name="submit" value="Submit" style="background: red ; color: #efefef">Hesabı Dondur</a>
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Siparişleriniz</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Şipariş No</th>
                            <th>Tarih</th>
                            <th>Durumu</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($orders)
                        @if (count($orders) == 0)
                            Henüz Siparişiniz Bulunmamaktadır
                        @else
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{rand(10000,200000).'-'.$order->id}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->status ? 'Onaylandı' : 'Beklemede'}}</td>
                            <td>{{$order->piece * $order->get_products[0]->promotion_price}} ₺</td>
                        </tr> 
                        @endforeach
                       
                        @endif
                       
                        @endisset
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection