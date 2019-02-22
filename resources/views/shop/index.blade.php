@extends('layouts.master')

@section('title')
	CrayShop Shopping Cartasdfasdf
@endsection


@section('content')

	@if(count($products))
		<div class="row">
			@foreach($products as $product)
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top img-responsive" src="{{ $product->imagePath }}">
					  <div class="card-body">
					  	<h3>{{ $product->title }}</h3>
					    <p class="card-description">{{ $product->description }}.</p>
					  
					  <div class="clearfix">
					  	<div class="pull-left price">RM{{ $product->price }}</div>
					  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
					  </div>
					  </div>
					</div>
				</div>
			@endforeach
				
				<!-- <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top img-responsive" src="/img/macbook-pro.png" alt="Card image cap">
					  <div class="card-body">
					  	<h3>Product Description</h3>
					    <p class="card-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  
					  <div class="clearfix">
					  	<div class="pull-left price">RM12</div>
					  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
					  </div>
					  </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top img-responsive" src="/img/macbook-pro.png" alt="Card image cap">
					  <div class="card-body">
					  	<h3>Product Description</h3>
					    <p class="card-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  
					  <div class="clearfix">
					  	<div class="pull-left price">RM12</div>
					  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
					  </div>
					  </div>
					</div>
				</div>
			</div> -->
	@endif

	

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top img-responsive" src="/img/macbook-pro.png" alt="Card image cap">
			  <div class="card-body">
			  	<h3>Product Description</h3>
			    <p class="card-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  
			  <div class="clearfix">
			  	<div class="pull-left price">RM12</div>
			  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
			  </div>
			  </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top img-responsive" src="/img/macbook-pro.png" alt="Card image cap">
			  <div class="card-body">
			  	<h3>Product Description</h3>
			    <p class="card-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  
			  <div class="clearfix">
			  	<div class="pull-left price">RM12</div>
			  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
			  </div>
			  </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top img-responsive" src="/img/macbook-pro.png" alt="Card image cap">
			  <div class="card-body">
			  	<h3>Product Description</h3>
			    <p class="card-description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  
			  <div class="clearfix">
			  	<div class="pull-left price">RM12</div>
			  	<a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
			  </div>
			  </div>
			</div>
		</div>
	</div>

@endsection
