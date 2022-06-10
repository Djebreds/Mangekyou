<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/admin-style/app.css') }}">

    <title>@yield('title')</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="profile d-flex">
            <div class="header__img">
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="{{ URL::asset('img/Balloon.svg') }}" />
                    </div>
                    <div class="menu">
                        <h3>Someone Famous<br /><span>Website Designer</span></h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class='ip-info'></i>
                                    Info
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='ip-logout'></i>
                                    Logout
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='ip-setting'></i>
                                    Setting
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='ip-user'></i>
                                    User
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <aside class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="logo">
                    <a href="#" class="nav__logo">
                        <i class='logo nav__icon '></i>
                        <span class="nav__logo-name">Tohoku Admin</span>
                    </a>
                </div>

                <div class="nav__list mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="nav__link">
                        <i class='i-dashboard nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="{{ route('admin.email') }}" class="nav__link">
                        <i class='i-email nav__icon'></i>
                        <span class="nav__name">Email</span>
                    </a>

                    <div class="accordion">
                        <a href="#" class="hstack gap-4 m-4 dropdown">
                            <i class='i-arrow rotate nav__icon'></i>
                            <span class="accordion-name">Customers</span>
                        </a>
                    </div>
                    <div class="panel">
                        <a href="{{ route('admin.user') }}" class="nav__link">
                            <i class='i-m-user nav__icon'></i>
                            <span class="nav__name">User</span>
                        </a>

                        <a href="{{ route('admin.e-commerse') }}" class="nav__link">
                            <i class='i-e-commerse nav__icon'></i>
                            <span class="nav__name">E-Commerse</span>
                        </a>

                        <a href="{{ route('admin.official') }}" class="nav__link">
                            <i class='i-official nav__icon'></i>
                            <span class="nav__name">Official Store</span>
                        </a>
                    </div>


                    <div class="accordion">
                        <a href="#" class="hstack gap-4 m-4 dropdown">
                            <i class='i-arrow rotate nav__icon'></i>
                            <span class="accordion-name">Shopping</span>
                        </a>
                    </div>
                    <div class="panel">
                        <a href="{{ route('admin.product') }}" class="nav__link">
                            <i class='i-product nav__icon'></i>
                            <span class="nav__name">Products</span>
                        </a>

                        <a href="{{ route('admin.category') }}" class="nav__link">
                            <i class='i-category nav__icon'></i>
                            <span class="nav__name">Category</span>
                        </a>

                        <a href="{{ route('admin.promo') }}" class="nav__link">
                            <i class='i-promo nav__icon'></i>
                            <span class="nav__name">Promo</span>
                        </a>

                        <a href="{{ route('admin.order') }}" class="nav__link">
                            <i class='i-order nav__icon'></i>
                            <span class="nav__name">Order</span>
                        </a>

                        <a href="{{ route('admin.payment') }}" class="nav__link">
                            <i class='i-payment nav__icon'></i>
                            <span class="nav__name">Payment Method</span>
                        </a>

                        <a href="{{ route('admin.invoice') }}" class="nav__link">
                            <i class='i-invoice nav__icon'></i>
                            <span class="nav__name">Invoice</span>
                        </a>
                    </div>

                    <div class="accordion">
                        <a href="#" class="hstack gap-4 m-4 dropdown">
                            <i class='i-arrow rotate nav__icon'></i>
                            <span class="accordion-name">Pages</span>
                        </a>
                    </div>
                    <div class="panel">
                        <a href="{{ route('admin.landing-page') }}" class="nav__link">
                            <i class='i-landing-page nav__icon'></i>
                            <span class="nav__name">Landing Page</span>
                        </a>

                        <a href="{{ route('admin.home') }}" class="nav__link">
                            <i class='i-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </div>

                    <a href="{{ route('admin.chat') }}" class="nav__link">
                        <i class='i-chat nav__icon'></i>
                        <span class="nav__name">Chatting Service</span>
                    </a>

                    <a href="{{ route('admin.help') }}" class="nav__link">
                        <i class='i-help nav__icon'></i>
                        <span class="nav__name">Help</span>
                    </a>
                </div>
            </div>
        </nav>
    </aside>

    <main class="main">
        @yield('content')
    </main>

    <footer class="text-center">
        <div class="copyright py-3">
            Copyright © Tohoku 2022
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/admin-script/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
