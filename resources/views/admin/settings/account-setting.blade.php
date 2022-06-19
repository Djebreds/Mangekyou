@extends('layouts.admin.main')
@section('title', 'Setting')
@section('content')
    <section>
        <!-- Header -->
        <header class="m-2">
            <h2>✍️ Setting up your profile</h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-6 my-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.profile') }}">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.profile') }}">Account Settings</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </header>
        <!-- end Header -->

        <!-- Profile -->
        <div class="row">
            <div class="col-12 col-s-12">
                <div class="card m-2">
                    <figure class="0">
                        <div class="card-body p-0" style="height: 380px">
                            <div class="background-image p-5 text-center shadow-1-strong rounded-5 mb-5 text-white"
                                style="height: 20vh;background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
                                <div class="profile">
                                    <div class="row text-center text-lg-start text-md-start">
                                        <figure class="m-0">
                                            <div class="col-12 col-s-12">
                                                <div
                                                    class="profile justify-content-center justify-content-md-start justify-content-lg-start ">
                                                    <div
                                                        class="avatar-upload justify-content-center justify-content-md-start justify-content-lg-start my-3 ms-auto ms-md-0 ms-lg-0 ">
                                                        <div class="avatar-edit">
                                                            <input type="file" id="imageUpload"
                                                                accept=".png, .jpg, .jpeg">
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview ">
                                                            <img src="https://picsum.photos/150"
                                                                class="rounded-circle shadow-2" alt="picture"
                                                                width="150" height="150" id="imagePreview">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

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
                    </figure>
                </div>
            </div>
        </div>
        <!-- End Profile -->

        <!-- Profile Configuration -->
        <div class="row g-0">
            <!-- Profile Settings -->
            <div class="col-6 col-s-6">
                <div class="card m-2">
                    <form action="" method="">
                        <div class="card-header hstack">Detail Profile <span
                                class="ms-auto material-symbols-rounded btn btn-link px-1 py-1 fs-3 text-secondary"
                                href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                aria-expanded="false" style="line-height: 0.5;">
                                more_horiz
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Privacy policy</a></li>
                                <li><a class="dropdown-item" href="#">Term of service</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-light list-group-small">
                                <li class="list-group-item px-4">
                                    <h5 class="fw-bold text-secondary">Profile</h5>
                                    <div class="row g-0">
                                        <p class="note note-warning shadow-2">
                                            <strong>Note :</strong> Leave it blank if you don't want to change
                                        </p>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="name" class="m-1 fw-bold">Full Name</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        value="Dadang Jebred Mustafa" data-mdb-showcounter="true"
                                                        maxlength="50" />
                                                    <label class="form-label" for="name">Full Name</label>
                                                    <div class="form-helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="bornDate" class="m-1 fw-bold">Born Date</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-outline mb-4">
                                                    <input type="date" id="bornDate" name="born_date"
                                                        class="form-control" value="2022-09-19" />
                                                    <label class="form-label" for="bornDate">born date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="male" class="m-1 fw-bold">Gender</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gender" type="radio"
                                                        name="inlineRadioOptions" id="male" checked
                                                        value="option1" />
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gender" type="radio"
                                                        name="inlineRadioOptions" id="female" value="option2" />
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item py-3 px-4">
                                    <div class="row g-0">
                                        <h5 class="fw-bold text-secondary">Contact info</h5>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="email" class="m-1 fw-bold">Email</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-outline mb-4">
                                                    <input type="email" name="email" id="email"
                                                        class="form-control" value="dadangjebred@tohoku.com"
                                                        data-mdb-showcounter="true" maxlength="50"
                                                        autocomplete="user email" />
                                                    <label class="form-label" for="email">email</label>
                                                    <div class="form-helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="phone" class="m-1 fw-bold">Phone Number</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-outline mb-4">
                                                    <input type="tel" minlength="10" maxlength="13" name="phone"
                                                        id="phone" class="form-control" value="+62 82121491054" />
                                                    <label class="form-label" for="phone">phone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-5 col-s-5">
                                                <label for="address" class="m-1 fw-bold">Full Address</label>
                                            </div>
                                            <div class="col-7 col-s-7">
                                                <div class="form-outline mb-4">
                                                    <textarea class="form-control" name="address" id="address" data-mdb-showcounter="true" maxlength="200"
                                                        rows="5">Jl. Soreang Cipatik Gang Mapawi RT-01 RW-06, Kab.Bandung,Kec.Soreang, Bandung,40192</textarea>
                                                    <label class="form-label" for="phone">address</label>
                                                    <div class="form-helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="hstack gap-1 justify-content-evenly justify-content-md-end justify-content-lg-end">
                                <button class="btn btn-danger btn-sm rounded-5 me-md-2 fw-bold hstack gap-1 text-nowrap"
                                    type="button"><i class="fas fa-undo mx-2" style="font-size: 15px"></i>Reset
                                </button>
                                <button class="btn btn-secondary rounded-5 fw-bold hstack gap-1 text-nowrap btn-sm"
                                    type="button">Save
                                    Changes <i class="fas fa-check mx-2" style="font-size: 15px"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Profile Settings -->

            <!-- Password Settings -->
            <div class="col-6 col-s-6">
                <div class="card m-2">
                    <form action="" method="">
                        <div class="card-header hstack">Password Settings <span
                                class="ms-auto material-symbols-rounded btn btn-link px-1 py-1 fs-3 text-secondary"
                                href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                                aria-expanded="false" style="line-height: 0.5;">
                                more_horiz
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Privacy policy</a></li>
                                <li><a class="dropdown-item" href="#">Term of service</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-light list-group-small">
                                <li class="list-group-item px-4">
                                    <h5 class="fw-bold text-secondary">Reset Password</h5>
                                    <div class="row g-0">
                                        <p class="note note-warning shadow-2">
                                            <strong>Note :</strong> Leave it blank if you don't want to change
                                        </p>
                                        <div class="col-5 col-s-5">
                                            <label class="m-1 fw-bold" for="password">Current Password</label>
                                        </div>
                                        <div class="col-7 col-s-7">
                                            <div class="inner-addon">
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="password" id="current-password"
                                                        class="form-control with-icon" autocomplete="current-password" />
                                                    <label class="form-label" for="current-password">Enter current
                                                        password</label>
                                                    <i class="far fa-eye" id="tooglePassword"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-5 col-s-5">
                                            <label class="m-1 fw-bold" for="new-passwoprd">New Password</label>
                                        </div>
                                        <div class="col-7 col-s-7">
                                            <div class="inner-addon">
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="new-password" id="new-password"
                                                        class="form-control with-icon" autocomplete="new-password" />
                                                    <label class="form-label" for="new-password">Password
                                                        confirmation</label>
                                                    <i class="far fa-eye" id="tooglePassword-new"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="inner-addon">
                                        <input type="password" class="form-control with-icon" name="password"
                                            id="current-password" autocomplete="new-password">
                                        <i class="far fa-eye" id="tooglePassword"></i>
                                    </div> --}}
                                    <div class="row g-0">
                                        <div class="col-5 col-s-5">
                                            <label class="m-1 fw-bold" for="new-passwoprd">Confirm New Password</label>
                                        </div>
                                        <div class="col-7 col-s-7">
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" class="form-control"
                                                    autocomplete="new-password" />
                                                <label class="form-label" for="password_confirmation">Confirm new
                                                    password</label>
                                            </div>
                                            <h6 class="fw-bold">Password requirements:</h6>
                                            <p class="lh-1">Ensure that these requirements are met:</p>
                                            <ul>
                                                <li>Minimum 8 characters long - the more, the better</li>
                                                <li>At least one lowercase character</li>
                                                <li>At least one uppercase character</li>
                                                <li>At least one number, symbol, or whitespace character</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div
                                class="hstack gap-1 justify-content-evenly justify-content-md-end justify-content-lg-end ">
                                <button class="btn btn-danger btn-sm rounded-5 me-md-2 fw-bold hstack gap-1 text-nowrap"
                                    type="button"><i class="fas fa-undo mx-2" style="font-size: 15px"></i> Reset
                                </button>
                                <button class="btn btn-secondary rounded-5 fw-bold hstack gap-1 text-nowrap btn-sm"
                                    type="button"> Save
                                    Changes <i class="fas fa-check mx-2" style="font-size: 15px"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Deactive Account -->
                <div class="card mx-2 my-3">
                    <div class="card-header">Account</div>
                    <div class="card-body">
                        <h5 class="fw-bold text-secondary">Deactive Account</h5>
                        <div class="row g-0">
                            <p class="note note-danger shadow-2">
                                <strong>Note :</strong> Once you delete a account, there is no going back. Please be
                                certain.
                            </p>
                            <div class="col-12 col-s-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="deactive" />
                                    <label class="form-check-label" for="deactive">Confirm that I want to delete
                                        my account.</label>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" id="deactivated" class="btn btn-danger d-flex rounded-5 my-2"
                                        data-mdb-toggle="modal" data-mdb-target="#verificate" disabled='disabled'><i
                                            class="fas fa-exclamation-triangle me-2 mb-1"
                                            style="font-size: 15px"></i>Deactive
                                        Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Deactive Account -->

                <!-- Modal Deactive Account -->
                <div class="modal fade" id="verificate" tabindex="-1" aria-labelledby="verificate" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="verificate">Modal title</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="fw-bold">Enter your account password</h5>
                                <div class="row g-0">
                                    <p class="note note-danger shadow-2">
                                        <strong>Note :</strong> Put your password to make sure it is your account
                                    </p>
                                    <div class="col-12 col-s-12">
                                        <label class="fw-bold" for="verify-password">Password</label>
                                    </div>
                                    <div class="col-12 col-s-12">
                                        <div class="inner-addon">
                                            <div class="form-outline mb-3">
                                                <input type="password" name="verify-password" id="verify-password"
                                                    class="form-control with-icon" autocomplete="current-password" />
                                                <label class="form-label" for="password">Enter password</label>
                                                <i class="far fa-eye" id="tooglePasswordVerification"></i>
                                                <div class="form-helper">Use your current password</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-5 fw-bold"
                                    data-mdb-dismiss="modal"><i class="fas fa-times me-2 mb-1"
                                        style="font-size: 14px"></i>cancel</button>
                                <button type="button" class="btn btn-danger rounded-5 fw-bold"><i
                                        class="fas fa-exclamation-triangle me-2 mb-1" style="font-size: 14px"></i>
                                    Deactive Account</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Deactive Account -->
            </div>
            <!-- Password Settings & Deactive Account-->
        </div>
        <!-- End Profile Configuration -->
    </section>
@endsection
