<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BudgetHeaven - Best Deals and Discounts |BudgetHeaven</title>
     <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">
     
       <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">
     <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
    <!-- Styles -->
     <meta name="description" content="Find the best deals, discounts, and coupons on BudgetHeaven. Save money on your favorite products from top brands.">
<link rel="canonical" href="https://budgetheaven.com/stores">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link rel="stylesheet" href="{{asset('cssfile/store.css')}}">
        
           <style>
 .navbar-custom {
      background-color:rgb(240,5,5); /* Bootstrap's red color */
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link,
    .navbar-custom .btn {
      color: #fff;
    }
    .navbar-custom .btn-outline-danger {
      border-color: #fff;
      color: #fff;
    }
    .navbar-custom .btn-outline-danger:hover {
      background-color: #fff;
      color: #dc3545;
    }
</style>
</head>
<body class="body">

<x-nav/>
   <a href="#" class="scroll-to-top text-white">
  <i class="fas fa-chevron-up"></i>
</a>
<div class="container bg-light">
    <div class="row mt-3 justify-content-end">
        <div class="col-12">
            <ul class="pagination justify-content-center">
                @foreach(range('A', 'Z') as $letter)
                    <li class="page-item"><a class="page-link" href="{{ route('stores', ['letter' => $letter]) }}">{{ $letter }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="card-list">
        @forelse ($stores as $store)
        <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-decoration-none">
            <img class="stores shadow" src="{{ $store->store_image ? asset('uploads/store/' . $store->store_image) : asset('front/assets/images/no-image-found.jpg') }}" alt="Card Image">
            <h5 class="card-title mt-3 mx-2">{{ $store->name ?: "Title not found" }}</h5>
        </a>
        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center" role="alert">
                No Stores Found!!!
            </div>
        </div>
        @endforelse
    </div>
</div>





<br>
<x-footer/>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>