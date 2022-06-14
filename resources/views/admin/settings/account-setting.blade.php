@extends('layouts.admin.main')
@section('title', 'Setting')
@section('content')
    <section>
        <header>

        </header>
        <div class="container">
            <div class="row my-2">
                <div class="col">
                    <div class="card">
                        <center>
                            <h1>MEMEK</h1>
                        </center>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col  col-12 col-s-8">
                    <div class="card my-2">
                        <div class="card-body">
                            <h3>Setting</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email address</label>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="role" class="form-control form-control-sm" id="role">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <textarea type="password" class="form-control form-control-sm" id="exampleInputPassword1"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-s-4 ">
                    <div class="card my-2">
                        <div class="card-body">
                            <h3>Change Password</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
