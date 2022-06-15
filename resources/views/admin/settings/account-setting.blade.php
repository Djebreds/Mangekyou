@extends('layouts.admin.main')
@section('title', 'Setting')
@section('content')
    <section>
        <header>
            <h1>Profile Setting</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                    <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
                </ol>
            </nav>
        </header>
        <div class="container">
            <div class="row my-2">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-s-1">
                                    <div class="img-profile text-md-end text-center ">
                                        <img src="https://picsum.photos/200" class="rounded-circle img-thumbnail"
                                            alt="gambar" style="">
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

            <div class="row">
                <div class="col  col-12 col-s-8">
                    <div class="card my-2">
                        <div class="card-body">
                            <h3>Setting</h3>
                            <form>
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            person
                                        </span>
                                    </div>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <label for="exampleInputPassword1" class="form-label">Email address</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            mail
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            call
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <label for="role" class="form-label">Role</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            manage_accounts
                                        </span>
                                    </div>
                                    <input type="role" class="form-control form-control-sm" id="role" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <textarea type="password" class="form-control form-control-sm" id="exampleInputPassword1"></textarea>
                                </div>
                                <button type="submit" class="btn btn-green">Change</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-s-4 ">
                    <div class="card my-2">
                        <div class="card-body">
                            <h3>Change Password</h3>
                            <form>
                                <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            lock
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            enhanced_encryption
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <div class="mb-3 input-group">
                                    <div class="input-group-text">
                                        <span class="material-symbols-outlined">
                                            lock_reset
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-green ">Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
