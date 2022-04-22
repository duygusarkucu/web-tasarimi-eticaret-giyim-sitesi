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
                    <h4>Ürün Resim Ekleme</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/add-photo1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <input type="hidden" placeholder="...." name="id" value="{{$value}}" class="form-control mb-3" >
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Görseller</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-upload">
                                        <input  type="file"  class="form-control" name="images[]" multiple>
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