<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    {{-- external css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


    <link rel="stylesheet" href="{{ asset('css/admin-style/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-style/icon.css') }}">

    <title>@yield('title')</title>
</head>

<body id="body-pd" class="body-pd">
    {{-- navbar --}}
    <header class="header shadow body-pd" id="header">
        <div class="header__toggle">
            <i class='i-menu' id="header-toggle"></i>
        </div>
        <div class="profile">
            <div class="btn-group">
                <div class="hstack gap-3 me-4">
                    <div class="action">
                        <a href="">
                            <i class='i-chatting'></i>
                        </a>
                    </div>
                    <div class="action">
                        <a href="">
                            <i class='i-notification'></i>
                        </a>
                    </div>
                </div>
                <figure class="m-0">
                    <img src="https://picsum.photos/200" class="header__img dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" alt="">
                    <figcaption class="m-0">
                        <ul class="dropdown-menu dropdown-menu-end border-0 p-3 shadow">
                            <li>
                                <div class="profile-detail hstack gap-3 p-2">
                                    <div class="header__img">
                                        <img src="https://picsum.photos/200" alt="">
                                    </div>
                                    <div class="header__name">
                                        <h5 class="m-0">Dadang Jebred</h5>
                                        <p class="m-0">dadang@jebred.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('admin.profile') }}"><i
                                        class='i-profile-user'></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('admin.setting') }}"><i
                                        class='i-profile-setting'></i>Account Setting</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('admin.help') }}"><i
                                        class='i-profile-info'></i>Help</a>
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="#"><i class='i-profile-logout'></i>Sign
                                    out</a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
        </div>
    </header>

    {{-- side bar --}}
    @include('admin.sidebar')

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
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('js/admin-script/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script
        src="https://cdn.jsdelivr.net/combine/npm/echarts@5.3.2/renderers.min.js,npm/echarts@5.3.2/features.min.js,npm/echarts@5.3.2/core.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
