@extends('dashboard.layouts.default')
@section('content')
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    ÜRÜNLER
                </h5>
                <a href="/admin/product-add">
                    <span class="badge bg-primary">Yeni Ürün Ekle</span></a>
            </div>
            <table class="table table-hover my-0">
                <thead>

                    <tr>
                        <th>Görsel</th>
                        <th class="d-none d-xl-table-cell">
                            Ürün Adı
                        </th>
                        <th class="d-none d-xl-table-cell">
                            Kategori
                        </th>
                        <th class="d-none d-xl-table-cell">
                            Fiyat
                        </th>
                        <th class="d-none d-xl-table-cell">
                            Stok
                        </th>
                    
                        <th class="d-none d-md-table-cell">
                            İşlemler
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($products)
                    @foreach ($products as $product)
                            <tr>
                                <td>
                                    <img src="{{asset('images/'.$product['image'])}}"
                                        width="200"  height="200" alt="">
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$product['name']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$product['kategori']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$product['promotion_price']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$product['stok']}}</
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="{{ url('/admin/product-edit/'.$product['id'])}}" class="badge bg-success">Düzenle</a>
                                    <a href="{{ url('/admin/add-photo/'.$product['id'])}}" class="badge bg-success">Fotoğraf Ekle</a>
                                    <a href="{{ url('/api/v1/product-del/'.$product['id'])}}" class="badge bg-danger">Sil</a>
                            </tr>
                            @endforeach
                            @endisset
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection