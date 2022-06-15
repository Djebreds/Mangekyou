@extends('layouts.admin.main')
@section('title', 'Profile')
@section('content')
    <section>
        <div class="container">
            <div class="row my-2">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-s-2">
                                    <div class="img-profile text-md-end text-center ">
                                        <img src="https://picsum.photos/200" class="rounded-circle img-thumbnail"
                                            alt="gambar">
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
                <div class="col col-12 col-s-8">
                    <div class="card my-2">
                        <div class="card-body">
                            <h3>Profile</h3>
                            <form>
                                <div class="mb-3">
                                    <h2>Farrel Rafiardi</h2>
                                </div>
                                <div class="mb-3">
                                    farrelrk4@gmail.com
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
    </section>
@endsection
