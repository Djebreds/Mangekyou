@extends('layouts.admin.main')
@section('title', 'User')
@section('content')
    <section>
        <header class="">
            <h1>Users</h1>
            <div class="card my-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
                
            </div>
        </header>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-admin-border compact dt[-head|-body]-justify align-center"
                       data-page-length="15"
                       id="myTable">
                    <thead class="h6">
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($a = 0; $a < 50; $a++)
                            <tr class="table-admin-row">
                                <td>Dadang Jebred</td>
                                <td class="text-center">
                                    <span class="badge rounded-pill role-customer">Customer</span>
                                    <span class="badge rounded-pill role-admin">Admin</span>
                                    <span class="badge rounded-pill role-official">Official</span>
                                </td>
                                <td>dadang@jebred.com</td>
                                <td>08{{ rand(8000000, 99999999) }}</td>
                                <td class=" text-center">
                                    <span class="badge rounded-pill status-active">Active</span>
                                    <span class="badge rounded-pill status-suspended">Suspended</span>
                                    <span class="badge rounded-pill status-inactive">Inactive</span>
                                </td>
                                <td>
                                    <div class="action  text-center">
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
        </div>
    </section>
@endsection
