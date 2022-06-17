<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!----------------- External styling -------------->

    <!-- Library DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- Google Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,1,0" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

    <!----------------- Custom Styling ---------------->
    <link rel="stylesheet" href="{{ asset('css/admin-style/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-style/icon.css') }}">

    <!-- library echarts js -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.3/dist/echarts.min.js"
        integrity="sha256-oZEaXgWqxLmr12VzCK9eGOuHIi3XPZ/KsJXXFjtyvZA=" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>

<body id="body-pd" class="body-pd">
    <!-- header nav -->
    <header class="header shadow body-pd" id="header">
        <div class="header__toggle">
            <i class='i-menu' id="header-toggle"></i>
        </div>
        <div class="profile">
            <div class="group-button">
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
                    <div class="dropdown">
                        <img src="https://picsum.photos/50" class="rounded-circle" alt="poto" id="dropdownMenu"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenu">
                            <li>
                                <div class="profile-detail hstack gap-3 p-2">
                                    <div class="header__img">
                                        <img src="https://picsum.photos/50" alt="photo">
                                    </div>
                                    <div class="header__name">
                                        <h5 class="m-0">Dadang Jebred</h5>
                                        <p class="m-0">dadang@jebred.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('admin.profile') }}"><span
                                        class="material-symbols-rounded">
                                        person
                                    </span>Profile</a></li>
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('admin.setting') }}"><span
                                        class="material-symbols-rounded">
                                        manage_accounts
                                    </span>Account Setting</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item hstack gap-2" href="#"><span
                                        class="material-symbols-rounded">
                                        question_mark
                                    </span>Help</a></li>
                            <li><a class="dropdown-item hstack gap-2" href="#"><span
                                        class="material-symbols-rounded">
                                        logout
                                    </span>Sign out</a></li>
                        </ul>
                    </div>
                </figure>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    @include('layouts.admin.partials.sidebar')

    <!-- content main -->
    <main class="main">
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="text-center">
        <div class="copyright py-3">
            Copyright © Tohoku 2022
        </div>
    </footer>

    <!--------------- external javascript --------------->
    <!-- Jquery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Jquery for dataTables -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- echart library javascript -->
    <script
        src="https://cdn.jsdelivr.net/combine/npm/echarts@5.3.2/renderers.min.js,npm/echarts@5.3.2/features.min.js,npm/echarts@5.3.2/core.min.js">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

    <!--------------- custome javascript --------------->
    <script src="{{ asset('js/admin-script/app.js') }}"></script>

    {{-- <script>
        $(document).ready(function() {
            $('#myTable').DataTable({});
        });
    </script> --}}
    <script src="{{ asset('js/admin-script/chart/dashboard.js') }}"></script>

    {{-- <script src="{!! mix('js/app.js') !!}"></script> --}}
    {{-- <script src="{{ asset('js/admin-script/echart.js') }}"></script> --}}
    {{-- <script>
        var myChart = echarts.init(document.getElementById('order'), null);
        var option = {
            xAxis: {
                type: 'category',
                boundaryGap: false,
            },
            label: {
                show: true,
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [20, 40, 120, 80, 100],
                type: 'line',
                smooth: true,
            }]
        };
        window.addEventListener('resize', function () {
            myChart.resize();
        })
        myChart.setOption(option);
    </script> --}}
</body>

</html>
