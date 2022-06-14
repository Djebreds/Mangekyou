@extends('layouts.admin.main')
@section('title', 'User')
@section('content')
    <section>
        <header>
            <h1>Users</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </header>

        <div class="card">
            <<<<<<< HEAD <div class="card-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($a = 0; $a < 50; $a++)
                            <tr>
                                <td>Dadang Jebred</td>
                                <td>dadang@jebred.com</td>
                                <td>08{{ rand(8000000, 99999999) }}</td>
                                <td>active | suspended | inactive</td>
                                <td class="text-center">
                                    <div class="action">
                                        <a href="">
                                            <span class="i-detail"></span>
                                        </a>
                                        <a href="">
                                            <span class="i-edit"></span>
                                        </a>
                                        <a href="">
                                            <span class="i-delete"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>

        </div>
        =======
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($a = 0; $a < 50; $a++)
                    <tr>
                        <td>Dadang Jebred</td>
                        <td>Customer</td>
                        <td>dadang@jebred.com</td>
                        <td>08{{ rand(8000000, 99999999) }}</td>
                        <td><span class="badge rounded-pill text-bg-success">Active</span>
                            | <span class="badge rounded-pill text-bg-danger">Suspended</span>
                            | <span class="badge rounded-pill text-bg-secondary">Inactive</span>

                        </td>
                        <td>
                            <div class="action">
                                <a href="">
                                    <span class="i-detail"></span>
                                </a>
                                <a href="">
                                    <span class="i-edit"></span>
                                </a>
                                <a href="">
                                    <span class="i-delete"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        >>>>>>> 4f3919f (bug fixing)
        </div>
    </section>
@endsection
