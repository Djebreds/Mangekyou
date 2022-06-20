@extends('layouts.admin.main')
@section('title', 'User')
@section('content')
    <section>
        <!-- Header -->
        <header class="m-2">
            <h2>👨‍💻 All Data Users</h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-6 my-2">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('admin.profile') }}">Users</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
        </header>
        <!-- end Header -->
        <div class="row">
            <div class="col-12 col-s-12">
                <p class="note note-warning shadow-3 m-2">
                    <strong>Note for admin:</strong> Don't do anything stupid.
                </p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 col-s-12">
                <div class="card m-2">
                    <div class="card-body">
                        <div id="users"
                            data-list='{"valueNames":["name","role","email", "phone"],"page":5,"pagination":true}'>
                            <div class="navigation hstack gap-3 justify-content-between">
                                <button type="button" class="btn btn-success btn-sm fw-bold">
                                    <i class="fas fa-plus fs-6 mb-1 me-1"></i>
                                    new e-commerse
                                </button>
                                <div class="searching ms-auto">
                                    <div class="input-group rounded">
                                        <input type="search" class="search form-control rounded" placeholder="Search"
                                            aria-label="Search" aria-describedby="search-addon" />
                                        <span class="input-group-text border-0" id="search-addon">
                                            <i class="fas fa-search text-secondary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive my-3">
                                <table class="table table-striped table-hover align-right mb-0 bg-white">
                                    <thead class="bg-light ">
                                        <tr class="table-secondary">
                                            <th class="sort fw-bold" data-sort="name">Name</th>
                                            <th class="sort fw-bold" data-sort="category">Category</th>
                                            <th class="sort fw-bold" data-sort="emai">Email</th>
                                            <th class="sort fw-bold" data-sort="phone">Phone</th>
                                            <th class="sort fw-bold" data-sort="status">Status</th>
                                            <th class="fw-bold">Action</th>
                                        </tr>
                                    </thead>
                                    <!-- IMPORTANT, class="list" have to be at tbody -->
                                    <tbody class="list">
                                        @for ($i = 0; $i < 50; $i++)
                                            <tr>
                                                <td class="name">Dadang Jebred</td>
                                                <td class="category"><span class="badge badge-secondary">Electronic</span>
                                                </td>
                                                <td class="email">dadangjebred@gmail.com</td>
                                                <td class="phone">08{{ rand(8000000, 99999999) }}</td>
                                                <td class="status"><span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action hstack gap-2">
                                                        <a href="" type="button" class="btn btn-secondary btn-sm ">
                                                            <i class="fas fa-search-plus fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-warning btn-sm ">
                                                            <i class="fas fa-pencil-alt fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-danger btn-sm ">
                                                            <i class="fas fa-trash fs-6 mb-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="name">Test 1</td>
                                                <td class="category"><span class="badge badge-primary">Make up</span>
                                                </td>
                                                <td class="email">testing@gmail.com</td>
                                                <td class="phone">08{{ rand(8000000, 99999999) }}</td>
                                                <td class="status"><span class="badge badge-danger">Suspended</span>
                                                </td>
                                                <td>
                                                    <div class="action hstack gap-2">
                                                        <a href="" type="button" class="btn btn-secondary btn-sm ">
                                                            <i class="fas fa-search-plus fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-warning btn-sm ">
                                                            <i class="fas fa-pencil-alt fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-danger btn-sm ">
                                                            <i class="fas fa-trash fs-6 mb-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="name">Test 2</td>
                                                <td class="category"><span class="badge badge-warning">Fashion</span>
                                                </td>
                                                <td class="email">testing2@gmail.com</td>
                                                <td class="phone">08{{ rand(8000000, 99999999) }}</td>
                                                <td class="status"><span class="badge badge-light">Deactive</span>
                                                </td>
                                                <td>
                                                    <div class="action hstack gap-2">
                                                        <a href="" type="button" class="btn btn-secondary btn-sm ">
                                                            <i class="fas fa-search-plus fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-warning btn-sm ">
                                                            <i class="fas fa-pencil-alt fs-6 mb-1"></i>
                                                        </a>
                                                        <a href="" type="button" class="btn btn-danger btn-sm ">
                                                            <i class="fas fa-trash fs-6 mb-1"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            {{-- <nav aria-label="page navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item page"><a class="page-link" href="#"></a></li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav> --}}
                            <div class="d-flex justify-content-end mt-3"><button class="btn btn-sm btn-secondary me-1"
                                    type="button" title="Previous" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-secondary ms-1"
                                    type="button" title="Next" data-list-pagination="next"><span
                                        class="fas fa-chevron-right">
                                    </span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @for ($a = 0; $a < 50; $a++)
                                    <tr>
                                        <td class="name">Dadang Jebred</td>
                                        <td class="text-center role">
                                            <span class="badge rounded-pill role-customer">Customer</span>
                                            <span class="badge rounded-pill role-admin">Admin</span>
                                            <span class="badge rounded-pill role-official">Official</span>
                                        </td>
                                        <td class="email">dadang@jebred.com</td>
                                        <td class="phone">08{{ rand(8000000, 99999999) }}</td>
                                        <td class=" text-center status">
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
                                @endfor --}}
