@extends('layouts.admin.main')
@section('title', 'Profile')
@section('content')
    <section>
        <!-- Header -->
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
        <!-- End Header -->

        <!-- Profile  -->
        <div class="row">
            <div class="col-12 col-s-12">
                <div class="card m-2">
                    <div class="card-body p-0" style="height: 380px">
                        <div class="background-image p-5 text-center shadow-1-strong rounded-5 mb-5 text-white"
                            style="height: 20vh;background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
                            <div class="profile">
                                <div class="row text-center text-lg-start text-md-start">
                                    <div class="col-12 col-s-12">
                                        <div
                                            class="profile justify-content-center justify-content-md-start justify-content-lg-start ">
                                            <div
                                                class="avatar-upload justify-content-center justify-content-md-start justify-content-lg-start my-3 ms-auto ms-md-0 ms-lg-0 ">
                                                <div class="avatar-preview ">
                                                    <img src="https://picsum.photos/150" class="rounded-circle shadow-2"
                                                        alt="picture" width="150" height="150" id="imagePreview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="profile text-md-start text-center">
                                        <h3>Farrel Rafiardi</h3>
                                        <h4>farrelrk4@gmail.com</h4>
                                        <h4>Admin</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile  -->

        <!-- Profile info  -->
        <div class="row g-0">
            <!-- Detail Profile  -->
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
                            <li><a class="dropdown-item" href="#">Profile Account</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-light list-group-small">
                            <li class="list-group-item px-4">
                                <div class="row">
                                    <h5 class="fw-bold text-secondary">General info</h5>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Full Name</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">Dadang Jebred Mustafa</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Born Date</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">20 April 2005</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Gender</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">Man</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 px-4">
                                <div class="row">
                                    <h5 class="fw-bold text-secondary">Contact info</h5>
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
                                        <p class="m-1 fw-bold">Province/City</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">Jawa Barat, Kabupaten Bandung</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Distinct/Village</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">Soreang, Pamekaran</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Zip Code</p>
                                    </div>
                                    <div class="col-9 col-s-7">
                                        <p class="m-1">40192</p>
                                    </div>
                                    <div class="col-3 col-s-5">
                                        <p class="m-1 fw-bold">Detail Address</p>
                                    </div>
                                    <div class="col-6 col-s-7">
                                        <p class="m-1">Jl. Soreang Cipatik Gang Mapawi RT-01 RW-06, Kab.Bandung,
                                            Kec.Soreang, Bandung,
                                            40192</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    088823774744
                                </div>
                                <div class="mb-3">
                                    Admin
                                </div>
                                <div class="mb-3">
                                    jakarta
                                </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Detail Profile  -->

        <!-- Store Information  -->
        <div class="col-6 col-s-6">
            <div class="card m-2">
                <div class="card-header hstack">Store Information <span
                        class="ms-auto material-symbols-rounded btn btn-link px-1 py-1 fs-3" href="#"
                        role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false"
                        style="line-height: 0.5;">
                        more_horiz
                    </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Edit Store</a></li>
                        <li><a class="dropdown-item" href="#">Detail Store</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-light list-group-small">

                        <li class="list-group-item px-4">
                            <div class="row">
                                <h5 class="fw-bold text-secondary">Store info</h5>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Store Name</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">Djebredstore</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Owner</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">Dadang Jebred Mustafa</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Created At</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">14 January 2020</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item py-3 px-4">
                            <div class="row">
                                <h5 class="fw-bold text-secondary">Contact info</h5>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Email</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">djebredstore@tohoku.com</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Phone Number</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">+62 7383762622</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Province/City</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">Jawa Barat, Kabupaten Bandung, Soreang, Pamekaran</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Distinct/Village</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">Soreang, Pamekaran</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Zip Code</p>
                                </div>
                                <div class="col-9 col-s-7">
                                    <p class="m-1">40192</p>
                                </div>
                                <div class="col-3 col-s-5">
                                    <p class="m-1 fw-bold">Detail Address</p>
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
        <!-- End Store Information  -->
        </div>
        <!-- End Profile info  -->
    </section>
@endsection
