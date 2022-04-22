@extends('client.layouts.default')
@section('content')

<div class="p-t-100 container">
    <h5 class="mtext-113 cl2 p-b-12">
        Kaydol Ekranı
    </h5>


    <form  method="post" action="/api/v1/users" style="display: flex; flex-wrap: wrap">
        @isset($errors)
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endisset
        @csrf
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" required="" name="first_name" placeholder="İsim">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" required="" name="last_name" placeholder="Soyisim">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" required="" name="email" placeholder="Email">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" required="" type="password" name="password" placeholder="Şifre">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" required="" type="password" name="password" placeholder="Şifre Tekrar">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" required="" type="text" name="state" placeholder="Adres">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" required="" type="text" name="country" placeholder="Ülke">
        </div>
        <div class="bor19  m-b-20" style="width: 500px !important">
            <input class="stext-111 cl2 plh3 size-116 p-lr-18" required="" type="text" name="phone" placeholder="Telefon">
        </div>
        <br><br>
        <div class="col-md-12">
            <button type="submit" class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04"
                name="login">Kaydol</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>
</div>

@endsection
