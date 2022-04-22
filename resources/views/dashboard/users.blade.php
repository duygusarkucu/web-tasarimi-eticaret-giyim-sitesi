@extends('dashboard.layouts.default')
@section('content')

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        KULLANICILAR
                    </h5>
                    <a href="/admin/user-add1">
                    <span class="badge bg-primary">Yeni Kullanıcı Ekle</span></a>
                </div>
                <table class="table table-hover my-0">
                    <thead>

                        <tr>
                            <th>Görsel</th>
                            <th class="d-none d-xl-table-cell">
                                Ad Soyad
                            </th>
                            <th class="d-none d-xl-table-cell">
                                Email
                            </th>
                            <th>Kullanıcı Durumu</th>
                            <th class="d-none d-md-table-cell">
                                İşlemler
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($users)
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <img src="{{ asset($user['image'] ? 'images/' . $user['image'] : 'evara-backend/assets/imgs/people/avatar1.jpg') }}"
                                            width="200" alt="">
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        {{ $user['first_name'] . ' ' . $user['last_name'] }}
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        {{ $user['email'] }}
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        {{ $user['phone'] }}
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="/admin/user/{{ $user->id }}"
                                            class="badge {{ $user['status'] ? 'bg-success' : 'bg-danger' }}">{{ $user['status'] ? 'Aktif' : 'Pasif' }}</a>
                                        <a href="/admin/user-edit/{{ $user->id }}" class="badge bg-success">Düzenle</a>
                                        <a href="/admin/user-delete/{{ $user->id }}" class="badge bg-danger">Sil</a>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection