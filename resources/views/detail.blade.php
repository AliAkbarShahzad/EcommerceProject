@extends('layout')
@section('content')
<div class="container custom-detail">
	<div class="row">
   <div class="col-sm-6">
     <img class="detail-img" src="{{asset($product['gallery'])}}">
   </div>
      <div class="col-sm-6">
        <a href="{{url('product')}}">Go Back</a>
        <h4>Name:<small>{{$product['name']}}</small></h4>
        <h4>Price:<small>{{$product['price']}}</small></h4>
        <h4>Category:<small>{{$product['category']}}</small></h4>
        <h4>Description:<small>{{$product['description']}}</small></h4>
        <br><br>
        <form action="{{url('add_to_cart')}}" method="POST">
          <input type="hidden" name="product_id" value="{{$product['id']}}">
          @csrf
          <button class="btn btn-success">Add To Cart</button>
        </form>
        <br><br>
        <button class="btn btn-primary">Buy Now</button>

   </div> 
  </div>
</div>


@endsection