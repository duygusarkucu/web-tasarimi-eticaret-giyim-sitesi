@extends('dashboard.layouts.default')
@section('content')
<section class="content-main container-fluid">
<br>
<br>
<br>
    <div class="card">
        <div class="card-header">
            <h5>Hesap Detayları</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="/user-update/"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group col-md-6">
                        <label>Mevcut Görsel <span class="required">*</span></label>
                        <img src="{{asset('images/'.$user->image)}}"  class="img-fluid" style="width: 200px; height:200px; border-radius: 50%" alt="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Yeni Görsel <span class="required">*</span></label>
                        <input class="form-control mb-3"  type="file" name="image" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ad <span class="required">*</span></label>
                        <input class="form-control mb-3"  value="{{$user->first_name}}" type="text"  name="first_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Soyad <span class="required">*</span></label>
                        <input class="form-control mb-3" value="{{$user->last_name}}" name="last_name" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Eposta <span class="required">*</span></label>
                        <input class="form-control mb-3" name="email" value="{{$user->email}}" type="email" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Adres  <span class="required">*</span></label>
                        <input class="form-control mb-3" value="{{$user->state}}" name="state" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ülke <span class="required">*</span></label>
                        <input class="form-control mb-3" value="{{$user->country}}" name="country" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telefon <span class="required">*</span></label>
                        <input class="form-control mb-3" type="number" value="{{$user->phone}}" name="phone" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Şifre <span class="required">*</span></label>
                        <input class="form-control mb-3" name="password" value="{{bcrypt($user->password)}}" type="password">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-fill-out submit bg-primary text-light" name="submit" value="Submit" >Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> <!-- content-main end// -->
@endsection