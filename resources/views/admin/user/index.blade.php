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
            <div class="card-body">
                <table class="table table-bordered table-admin-border" id="myTable">
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
                            <tr class="table-admin-row">
                                <td>Dadang Jebred</td>
                                <td>
                                    <span class="badge rounded-pill role-customer">Customer</span>
                                    <span class="badge rounded-pill role-admin">Admin</span>
                                    <span class="badge rounded-pill role-official">Official</span>
                                </td>
                                <td>dadang@jebred.com</td>
                                <td>08{{ rand(8000000, 99999999) }}</td>
                                <td>
                                    <span class="badge rounded-pill status-active">Active</span>
                                    <span class="badge rounded-pill status-suspended">Suspended</span>
                                    <span class="badge rounded-pill status-inactive">Inactive</span>
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
                <<<<<<< HEAD=======>>>>>>> ac8695e77f2b3b20a924655ee3d149c79ba72a09
            </div>
        </div>
    </section>
@endsection
