<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
            name="description"
            content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
        />
        <meta name="author" content="AdminKit" />
        <meta
            name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
        />

        <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

        <title>ADMİN</title>

        <link href="{{asset('static/css/app.css')}}" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="/">
                        <span class="align-middle">ADMİN</span>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="sidebar-header"></li>

                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="/admin">
                                <i
                                    class="align-middle"
                                    data-feather="sliders"
                                ></i>
                                <span class="align-middle">ANASAYFA</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/users">
                                <i class="align-middle" data-feather="user"></i>
                                <span class="align-middle">KULLANICILAR</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/orders">
                                <i
                                    class="align-middle"
                                    data-feather="settings"
                                ></i>
                                <span class="align-middle">SİPARİŞLER</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/products">
                                <i
                                    class="align-middle"
                                    data-feather="credit-card"
                                ></i>
                                <span class="align-middle">ÜRÜNLER</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin/slider">
                                <i class="align-middle" data-feather="book"></i>
                                <span class="align-middle">SLİDER</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main">
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle d-flex">
                        <i class="hamburger align-self-center"></i>
                    </a>


                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                                    href="#"
                                    data-toggle="dropdown"
                                >
                                    <i
                                        class="align-middle"
                                        data-feather="settings"
                                    ></i>
                                </a>

                                <a
                                    class="nav-link dropdown-toggle d-none d-sm-inline-block"
                                    href="#"
                                    data-toggle="dropdown"
                                >
                                    <img
                                        src="img/avatars/avatar.jpg"
                                        class="avatar img-fluid rounded mr-1"
                                        alt="Charles Hall"
                                    />
                                    <span class="text-dark">Charles Hall</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a
                                        class="dropdown-item"
                                        href="pages-profile.html"
                                        ><i
                                            class="align-middle mr-1"
                                            data-feather="user"
                                        ></i>
                                        Profile</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i
                                            class="align-middle mr-1"
                                            data-feather="pie-chart"
                                        ></i>
                                        Analytics</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a
                                        class="dropdown-item"
                                        href="pages-settings.html"
                                        ><i
                                            class="align-middle mr-1"
                                            data-feather="settings"
                                        ></i>
                                        Settings & Privacy</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i
                                            class="align-middle mr-1"
                                            data-feather="help-circle"
                                        ></i>
                                        Help Center</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"
                                        >Log out</a
                                    >
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
