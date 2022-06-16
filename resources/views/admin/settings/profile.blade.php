@extends('layouts.admin.main')
@section('title', 'Profile')
@section('content')
    <section>
        <header class="m-2">
            <h2>✨ Here your profile</h2>
            <p class="note note-primary shadow-2">
                <strong>Note :</strong> We won't share or sell your data see at our <a href="">privacy and
                    policies</a>
            </p>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-6 my-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.profile') }}">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.profile') }}">Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </header>

        <div class="row">
            <div class="col-12 col-s-12">
                <div class="card m-2">
                    <div class="card-body p-0" style="height: 350px">
                        <div class="background-image p-5 text-center shadow-1-strong rounded-5 mb-5 text-white"
                            style="height: 20vh;background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
                            <div class="profile">
                                <div class="row text-center text-lg-start text-md-start">
                                    <div class="col-12 col-s-12">
                                        <img src="https://picsum.photos/150" alt="picture"
                                            class="rounded-circle border border-5 shadow-2 my-3 ">
                                    </div>
                                    <div class="col-12 col-s-12">
                                        <div class="title text-center text-md-start text-lg-start">
                                            <h3 class="fw-bold text-secondary">
                                                Dadang
                                                Jebred </h3>
                                            <h5
                                                class="text-body small text-center text-md-start text-lg-start text-uppercase ">
                                                Admin at
                                                Tohoku</h5>
                                            <div
                                                class="row justify-content-end justify-content-lg-between justify-content-md-between">
                                                <div class="col-6 col-s-6">
                                                    <h5
                                                        class="text-muted small text-uppercase text-center text-md-start text-lg-start">
                                                        Jawa Barat,
                                                        Bandung</h5>
                                                </div>
                                                <div class="col-6 col-s-6">
                                                    <h5 class="text-muted small text-center text-md-end text-lg-end">
                                                        Joined at 04 April 2022</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-6 col-s-6">
                <div class="card m-2">
                    <div class="card-header hstack">Detail Profile <span
                            class="ms-auto material-symbols-rounded btn btn-link px-1 py-1 fs-3" href="#"
                            role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false"
                            style="line-height: 0.5;">
                            more_horiz
                        </span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Store Information</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-light list-group-small">

                            <li class="list-group-item px-4">
                                <div class="row">
                                    <h5 class="fw-bold">General info</h5>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Full Name</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">Dadang Jebred Mustafa</p>
                                    </div>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Born Date</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">20 April 2005</p>
                                    </div>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Gender</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">Man</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 px-4">
                                <div class="row">
                                    <h5 class="fw-bold">Contact info</h5>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Email</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">dadangjebred@tohoku.com</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Phone Number</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">+62 82121491054</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Full Address</p>
                                    </div>
                                    <div class="col-6 col-s-7">
                                        <p class="m-1">Jl. Soreang Cipatik Gang Mapawi RT-01 RW-06, Kab.Bandung,
                                            Kec.Soreang, Bandung,
                                            40192</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-s-6">
                <div class="card m-2">
                    <div class="card-header hstack">Store Information <span
                            class="ms-auto material-symbols-rounded btn btn-link px-1 py-1 fs-3" href="#"
                            role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false"
                            style="line-height: 0.5;">
                            more_horiz
                        </span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Store Information</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-light list-group-small">

                            <li class="list-group-item px-4">
                                <div class="row">
                                    <h5 class="fw-bold">General info</h5>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Full Name</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">Dadang Jebred Mustafa</p>
                                    </div>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Born Date</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">20 April 2005</p>
                                    </div>
                                    <div class="col-2 col-s-5">
                                        <p class="m-1 fw-bold">Gender</p>
                                    </div>
                                    <div class="col-10 col-s-7">
                                        <p class="m-1">Man</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 px-4">
                                <div class="row">
                                    <h5 class="fw-bold">Contact info</h5>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Email</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">dadangjebred@tohoku.com</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Phone Number</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">+62 82121491054</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Full Address</p>
                                    </div>
                                    <div class="col-6 col-s-7">
                                        <p class="m-1">Jl. Soreang Cipatik Gang Mapawi RT-01 RW-06, Kab.Bandung,
                                            Kec.Soreang, Bandung,
                                            40192</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
