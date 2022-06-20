@extends('layouts.store.main')

@section('content')
    <div class="container">

        <div class="row justify-content-center my-5">
            <div class="col-sm-12 " style="">
                <div id="carousel-top" class="carousel slide store-carousel-top" data-mdb-ride="carousel"
                    style="height: 300px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100"
                                alt="Wild Landscape" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100"
                                alt="Camera" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100"
                                alt="Exotic Fruits" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carousel-top"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carousel-top"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center my-5 g-3">
            <div class="col-sm-12">
                <div class="container-fluid border">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12 d-flex align-items-center">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col d-flex p-3 align-center justify-content-between">
                                        <span class="fw-bold fs-6">Popular Category</span>
                                        <a href="#">View Category</a>
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-3 text-center">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                            class="rounded-circle category-img">
                                        <div class="category-name">elektronik</div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                            class="rounded-circle category-img">
                                        <div class="category-name">elektronik</div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                            class="rounded-circle category-img">
                                        <div class="category-name">elektronik</div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                            class="rounded-circle category-img">
                                        <div class="category-name">elektronik</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 border align-items-center">
                            <div class="container-fluid p-0 m-0">
                                <div class="row justify-content-between">
                                    <div class="col ">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" alt=""
                                            class=" category-promo">
                                    </div>
                                    <div class="col ">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" alt=""
                                            class=" category-promo">
                                    </div>

                                    <div class="col ">
                                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" alt=""
                                            class=" category-promo">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5 justify-content-center">
            <div class="col-sm-12">
                <div class="d-flex justify-content-between align-center p-1">
                    <span class="fw-bold fs-4">Official Store</span>
                    <a href="#">View More</a>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center g-4">
                        <div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
                            <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                class="float-start rounded me-3 store-img">
                            <div class="">
                                <h5>Nama toko</h5>
                                <div>alamat</div>
                                <div>rating</div>
                                <div>kategori</div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
                            <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                class="float-start rounded me-3 store-img">
                            <div class="">
                                <h5>Nama toko</h5>
                                <div>alamat</div>
                                <div>rating</div>
                                <div>kategori</div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
                            <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                class="float-start rounded me-3 store-img">
                            <div class="">
                                <h5>Nama toko</h5>
                                <div>alamat</div>
                                <div>rating</div>
                                <div>kategori</div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
                            <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg"
                                class="float-start rounded me-3 store-img">
                            <div class="">
                                <h5>Nama toko</h5>
                                <div>alamat</div>
                                <div>rating</div>
                                <div>kategori</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center  my-5">
            <div class="col-md-10 col-sm-12">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="banner">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h3 class="p-2">Promo</h3>
            <div class="justify-content-between d-flex">

                <div class=" m-0 p-0">
                    <div class="card card-item">
                        <div class="card-item-img">
                            <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="card-img-top"
                                alt="..." style="">

                        </div>
                        <div class="card-body p-1">
                            <div class="card-item-text mb-1">VGA MSI - GEFORCE GTX 1660 SUPER VENTUS XS OC/ GTX1660...
                            </div>
                            <div class="d-flex">
                                <span class="badge badge-pill"
                                    style="background-color: #7629d585; color: d50000;">47%</span>
                                <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                            </div>
                            <h6 class="mt-1 card-item-price">Rp 40.000</h6>
                            <div class="d-flex align-items-center card-item-text">
                                bintang
                                4,5
                                | Sold 12
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" m-0 p-0">
                    <div class="card card-item">
                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body p-1">
                            <div class="card-item-text mb-1">VGA MSI - GEFORCE GTX 1660 SUPER VENTUS XS OC/ GTX1660...
                            </div>
                            <div class="d-flex">
                                <span class="badge badge-pill"
                                    style="background-color: #7629d585; color: d50000;">47%</span>
                                <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                            </div>
                            <h6 class="mt-1 card-item-price">Rp 40.000</h6>
                            <div class="d-flex align-items-center card-item-text">
                                bintang
                                4,5
                                | Sold 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" m-0 p-0">
                    <div class="card card-item">
                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body p-1">
                            <div class="card-item-text mb-1">VGA MSI - GEFORCE GTX 1660 SUPER VENTUS XS OC/ GTX1660...
                            </div>
                            <div class="d-flex">
                                <span class="badge badge-pill"
                                    style="background-color: #7629d585; color: d50000;">47%</span>
                                <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                            </div>
                            <h6 class="mt-1 card-item-price">Rp 40.000</h6>
                            <div class="d-flex align-items-center card-item-text">
                                bintang
                                4,5
                                | Sold 12
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" m-0 p-0">
                    <div class="card card-item">
                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body p-1">
                            <div class="card-item-text mb-1">VGA MSI - GEFORCE GTX 1660 SUPER VENTUS XS OC/ GTX1660...
                            </div>
                            <div class="d-flex">
                                <span class="badge badge-pill"
                                    style="background-color: #7629d585; color: d50000;">47%</span>
                                <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                            </div>
                            <h6 class="mt-1 card-item-price">Rp 40.000</h6>
                            <div class="d-flex align-items-center card-item-text">
                                bintang
                                4,5
                                | Sold 12
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" m-0 p-0">
                    <div class="card card-item">
                        <img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body p-1">
                            <div class="card-item-text mb-1">VGA MSI - GEFORCE GTX 1660 SUPER VENTUS XS OC/ GTX1660...
                            </div>
                            <div class="d-flex">
                                <span class="badge badge-pill"
                                    style="background-color: #7629d585; color: d50000;">47%</span>
                                <span class="badge-pill badge" style="color: #989898;"><del>Rp 75.000</del></span>
                            </div>
                            <h6 class="mt-1 card-item-price">Rp 40.000</h6>
                            <div class="d-flex align-items-center card-item-text">
                                bintang
                                4,5
                                | Sold 12
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row  my-5">
            <div class="d-flex">
                <div class="position-relative mr-3 box-affix bg-affix1"
                    style="background: linear-gradient(91.32deg, #0E8D46 48.67%, #0CB356 97.99%);
                border-radius: 10px;width: 195px; height: 78px;padding: 6px 8px;color: white">
                    <div class="line1"></div>
                    <h4>For Your</h4>
                </div>
                <div class="position-relative mr-3 box-affix bg-affix2">
                    <div class="line1"></div>
                    <h4>Spesial Diskon</h4>
                </div>
            </div>

        </div>

        <div class="row  my-5">

        </div>

    </div>
@endsection
