<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>E-comerce Project</title>
  </head>
  <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    .custom-login
    {
      height: 500px;
      padding-top: 100px;
    }
    .custom-product
    {
      height: auto;
      
    }
    .img-slider
    {
      height: 400px;
      padding: 50px;
    }
    .carousel-caption
    {
      background-color: #ff7f7f;
      opacity: 0.8;
    }
    .trending-wrapper
    {
      margin: 20px;
    }
    .trending-item
    {
      float: left;
      width: 20%;
    }
    .trending-img
    {
      height: 100px;
      
    }
    .custom-detail
    {
      height: 500px;
      margin: 20px;
    }
    .detail-img
    {
      height: 300px;
      margin-top: 50px;
      margin-left: 50px; 
    }
    .search-box
    {
      width: 500px;
    }
    .cart-list-divider
    {
      border-bottom: 1px solid green;
      margin-bottom: 20px;
      padding-bottom: 20px: 
    }
  </style>
  </body>
</html>