@extends('layout')
@section('content')
<div class="custom-product">

<div class="col-sm-10 m-auto">
   <div class="trending-wrapper">
    <h2>Cart List</h2>
     @foreach($cartlist as $list)
     <div class="row searched-item cart-list-divider">
      <div class="col-sm-4">
          <a href="detail/{{$list->id}}">
        <img class="trending-img" src="{{$list->gallery}}">
     </a>
      </div>
         <div class="col-sm-4">
          
        <div class="">
        <h2>{{$list->name}}</h2>
        <h5>{{$list->description}}</h5>

       </div>
      </div>
         <div class="col-sm-4">
          <a href="removecart/{{$list->cart_id}}" class="btn btn-warning">Remove From Cart List</a>
      </div>
   </div>
   @endforeach
 
</div>
</div>
</div>

@endsection