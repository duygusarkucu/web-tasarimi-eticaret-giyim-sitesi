@extends('dashboard.layouts.default')
@section('content')
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    Slider
                </h5>
                <a href="/admin/slider-add">
                    <span class="badge bg-primary">Yeni Ürün Ekle</span></a>
            </div>
            <table class="table table-hover my-0">
                <thead>

                    <tr>
                        <th>Görsel</th>
                        <th class="d-none d-xl-table-cell">
                            Başlık
                        </th>
                        <th class="d-none d-xl-table-cell">
                            Alt Başlık
                        </th>
                        <th class="d-none d-xl-table-cell">
                            Buton Yazısı
                        </th>
                    
                        <th class="d-none d-md-table-cell">
                            İşlemler
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($sliders)
                    @foreach ($sliders as $slider)
                            <tr>
                                <td>
                                    <img src="{{asset('images/'.$slider['image'])}}"
                                        width="200"  height="200" alt="">
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$slider['title']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$slider['subtitle']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{$slider['button_text']}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="{{ url('/admin/slider-edit/'.$slider['id'])}}" class="badge bg-success">Düzenle</a>
                                    <a href="{{ url('/api/v1/slider-del/'.$slider['id'])}}" class="badge bg-danger">Sil</a>
                            </tr>
                            @endforeach
                            @endisset
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
