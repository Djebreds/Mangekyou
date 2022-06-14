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
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Name</th>
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
                            <td>dadang@jebred.com</td>
                            <td>08{{ rand(8000000, 99999999) }}</td>
                            <td>active | suspended | inactive</td>
                            <td>
                                <div class="action">
                                    <a href="">
                                        view |
                                    </a>
                                    <a href="">
                                        edit |
                                    </a>
                                    <a href="">
                                        delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>
@endsection
