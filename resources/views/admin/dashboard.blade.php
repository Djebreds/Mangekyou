@extends('layouts.admin.main')
@section('title', 'Dashboard')
@section('content')
    <section>
        <header>
            <h2>Welcome, Dadang Jebred!</h2>
            <p>Here data today, for you</p>
        </header>
        <div class="row g-0">
            <div class="col-3 col-s-6">
                <div class="card m-2" style="height: 150px">
                    <div class="card-body">
                        {{--                    <h6>Total Orders</h6>--}}
                        {{--                    <h2>25</h2>--}}
                        <div id="order"></div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2" style="height: 150px">
                    <div class="card-body">
                        <p>Test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2" style="height: 150px">
                    <div class="card-body">
                        <p>Test 1</p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-s-6">
                <div class="card m-2" style="height: 150px">
                    <div class="card-body">
                        <p>Test 1</p>
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
