@extends('layout')
@section('content')
<div class="custom-product">
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  	@foreach($products as $product)
    <div class="carousel-item {{$product['id']==1?'active':''}}">
      <a href="detail/{{$product['id']}}">
      	<img class="img-slider" src="{{$product['gallery']}}">
      <div class="carousel-caption">
					<h3>{{$product['name']}}</h3>
					<p>{{$product['description']}}</p>
				</div>
      </a>
    </div>
    @endforeach
   
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="trending-wrapper">
<h2>Trending Products</h2>
<div class="trending-section">
  	@foreach($products as $product)
    <div class="trending-item">
    <a href="detail/{{$product['id']}}">
      <img class="trending-img" src="{{$product['gallery']}}">
      <div class="">
					<h3>{{$product['name']}}</h3>
				</div>
			</a>
    </div>
    @endforeach
	
</div>


</div>
</div>


@endsection