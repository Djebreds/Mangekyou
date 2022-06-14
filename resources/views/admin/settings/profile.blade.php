@extends('layouts.admin.main')
@section('title', 'Profile')
@section('content')
    <section>
        <div class="container">
            <div class="row">
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
        </div>
    </section>
@endsection
