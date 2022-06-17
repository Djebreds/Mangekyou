@extends('layouts.store.main')

@section('content')
<div class="container">
		<div class="row justify-content-center my-3">
			<div class="col-lg-8 col-md-10 col-sm-12 " style="">
				<div id="carousel-top" class="carousel slide store-carousel-top" data-mdb-ride="carousel" style="height: 300px;">
				  <div class="carousel-inner">
					<div class="carousel-item active">
				      <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100" alt="Wild Landscape"/>
				    </div>
				    <div class="carousel-item">
				      <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Camera"/>
				    </div>
				    <div class="carousel-item">
				      <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits"/>
				    </div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-mdb-target="#carousel-top" data-mdb-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-mdb-target="#carousel-top" data-mdb-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>			
			</div>
			
		</div>
	<div class="row justify-content-center my-3 g-3">
		<div class="col-lg-8 col-md-10 col-sm-12">
			<div class="container-fluid border">
				<div class="row justify-content-center">
					<div class="col d-flex p-3 align-center justify-content-between">
						<span class="fw-bold fs-6">Popular Category</span>
						<a href="#">View Category</a>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6 col-sm-12">
							<div class="container-fluid p-0">
								<div class="row justify-content-between ">
									<div class="col-md-3 text-center">
										<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="rounded-circle category-img">
										<div class="category-name">elektronik</div>
									</div>
									<div class="col-md-3 text-center">
										<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="rounded-circle category-img">
										<div class="category-name">elektronik</div>
									</div>
									<div class="col-md-3 text-center">
										<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="rounded-circle category-img">
										<div class="category-name">elektronik</div>
									</div>
									<div class="col-md-3 text-center">
										<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" class="rounded-circle category-img">
										<div class="category-name">elektronik</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 border">
							Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Iure ex nemo quaerat.
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="row my-4 justify-content-center">
		<div class="col-md-10 col-lg-8 col-sm-12">
			<div class="d-flex justify-content-between align-center p-1">
				<span class="fw-bold fs-4">Official Store</span>
				<a href="#">View More</a>
			</div>
			<div class="container-fluid">
				<div class="row justify-content-center g-4">
					<div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
						<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" style="width: 100px" class="float-start rounded me-3">
						<div class="">
							<h5>Nama toko</h5>
							<div>alamat</div>
							<div>rating</div>
							<div>kategori</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
						<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" style="width: 100px" class="float-start rounded me-3">
						<div class="">
							<h5>Nama toko</h5>
							<div>alamat</div>
							<div>rating</div>
							<div>kategori</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
						<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" style="width: 100px" class="float-start rounded me-3">
						<div class="">
							<h5>Nama toko</h5>
							<div>alamat</div>
							<div>rating</div>
							<div>kategori</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-4 border p-3 mx-2 justify-content-center rounded">
						<img src="https://mdbootstrap.com/img/new/textures/small/52.jpg" style="width: 100px" class="float-start rounded me-3">
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

	<div class="row justify-content-center">
		<div class="col-lg-8 col-md-10 col-sm-12">
			<div class="card bg-primary">
				<img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="banner">
			</div>
		</div>
	</div>

	<div class="row">
		
	</div>

</div>		
@endsection