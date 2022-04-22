@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Ürün Ekleme</h4>
                </div>
                <div class="card-body">
                    <form action="/api/v1/products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="product_name" class="form-label">İsim</label>
                            <input type="text" placeholder="...." name="name" class="form-control mb-3" >
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="kategori">

                                <option value="women"> Women </option>
                                <option value="men"> men </option>
                                <option value="bag"> Bag </option>
                                <option value="shoes"> Shoes </option>
                                <option value="watches"> Watches </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Açıklama, Detay</label>
                            <textarea placeholder="...." name="content" class="form-control mb-3" rows="4"></textarea>
                        </div>

                     
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label class="form-label">Fiyat</label>
                                    <div class="row gx-2">
                                        <input placeholder="₺" name="regular_price" type="text" class="form-control mb-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label class="form-label">İndirimli Fiyat</label>
                                    <input placeholder="₺" name="promotion_price" type="text" class="form-control mb-3">
                                </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <label class="form-label">Birim</label>
                                <select class="form-select" name="currency">

                                    <option value="$"> $ </option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <label class="form-label">Toplam Stok</label>
                                    <div class="row gx-2">
                                        <input placeholder="₺" name="stok" type="text" class="form-control mb-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Görsel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                        <button type="submit" class="btn btn-primary">Ekle</button>

                    </form>
                </div>
            </div> <!-- card end// -->
        </div>
       
    </div>
</section> <!-- content-main end// -->
@endsection