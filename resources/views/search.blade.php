@extends('layout')
@section('content')
<div class="custom-product">
<div class="col-sm-4 mr-auto">
  <a href="#">Filter</a>
</div>
<div class="col-sm-4 m-auto">
   <div class="trending-wrapper">
    <h6>Results For Searched Products</h6>
     @foreach($searches as $search)
     <div class="searched-item">
      <a href="detail/{{$search['id']}}">
        <img class="trending-img" src="{{$search['gallery']}}">
        <div class="">
        <h2>{{$search['name']}}</h2>
        <h5>{{$search['description']}}</h5>

       </div>
     </a>
   </div>
   @endforeach
 
</div>
</div>
</div>

@endsection