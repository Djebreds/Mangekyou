@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('content')
    <section>
        <header class="">
            <h2>👋 Welcome, Dadang!</h2>
            <div class="row justify-content-between">
                <div class="col-6 col-s-6">
                    <p class="text-start">Here data today for you</p>
                </div>
                <div class="col-6 col-s-6">
                    <p class="text-end">Saturday, 30 July 2022</p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-6 my-3">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </header>
        <div class="row g-0">
            <div class="col-3 col-s-6">
                <div class="card m-2 overflow-hidden" style="height: 150px">
                    <div class="card-body">
                        <div class="hstack justify-content-around">
                            <div class="status">
                                <h6 class="m-0 fw-bold hstack gap-2"><span class="material-symbols-rounded">
                                        group_add
                                    </span>Users</h6>
                                <h2 class="text-secondary h2">120</h2>
                                <span class="badge rounded-pill badge-danger text-danger">-50 users</span>

                            </div>
                            <div class="chart">
                                <canvas id="users" height="100vh" width="150%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2 overflow-hidden" style="height: 150px">
                    <div class="card-body">
                        <div class="hstack justify-content-around">
                            <div class="status">
                                <h6 class="m-0 fw-bold hstack gap-2"><span class="material-symbols-rounded">
                                        local_shipping
                                    </span>Orders</h6>
                                <h2 class="text-secondary h2">40</h2>
                                <span class="badge rounded-pill badge-success text-success">+20 orders</span>

                            </div>
                            <div class="chart">
                                <canvas id="orders" height="100vh" width="150%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2 overflow-hidden" style="height: 150px">
                    <div class="card-body">
                        <div class="hstack justify-content-around">
                            <div class="status">
                                <h6 class="m-0 fw-bold hstack gap-2"><span class="material-symbols-rounded">
                                        shopping_bag
                                    </span>Products</h6>
                                <h2 class="text-secondary h2">233</h2>
                                <span class="badge rounded-pill badge-success text-success"><i
                                        class="fas fa-caret-up me-1 small"></i><span>54 products</span></span>
                            </div>
                            <div class="chart">
                                <canvas id="products" height="100vh" width="150%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2 overflow-hidden" style="height: 150px">
                    <div class="card-body">
                        <div class="hstack justify-content-around">
                            <div class="status">
                                <h6 class="m-0 fw-bold hstack gap-2"><span class="material-symbols-rounded">
                                        shopping_bag
                                    </span>Stores</h6>
                                <h2 class="text-secondary h2">30</h2>
                                <span class="badge rounded-pill badge-primary"><i
                                        class="fas fa-caret-up me-1 small"></i><span>10 store</span></span>
                            </div>
                            <div class="chart">
                                <canvas id="stores" height="100vh" width="150%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-6 col-s-6">
                <div class="card m-2" style="height: 400px">
                    <div class="card-body">
                        <p>Test 2</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-s-6">
                <div class="card m-2" style="height: 400px">
                    <div class="card-body">
                        <p>Test 2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-8 col-s-8">
                <div class="card m-2" style="height: 300px">
                    <div class="card-body">
                        <p>Test 3</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-s-4">
                <div class="card m-2" style="height: 300px">
                    <div class="card-body">
                        <p>Test 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
