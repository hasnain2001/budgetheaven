<?php
header("X-Robots-Tag:index, follow");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categories  - Best Deals and Discounts |BudgetHeaven</title>
     <meta name="description" content="Find the best deals, discounts, and coupons on BudgetHeaven. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://budgetheaven.com/categories">
<!-- Fonts -->
     <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
                <link rel="stylesheet" href="{{asset('cssfile/categories.css')}}">
       
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
<div class="main_content">
  <div class="container">
    <div class="row mt-3">
      <h1 class="text-center display-4">Our Categories</h1>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach ($categories as $category)
          <div class="col">
            <div class="card shadow-sm h-100 overflow-hidden">
              <a href="{{ url('related_category/'. Str::slug($category->title)) }}" >
                @if ($category->category_image)
                  <img src="{{ asset('uploads/categories/' . $category->category_image) }}" class="card-img-top" alt="{{ $category->title }} Image">
                @else
                  <div class="d-flex align-items-center justify-content-center vh-100 bg-light text-muted">
                    <i class="fas fa-image fa-3x"></i>
                    <p class="ms-2">No image available</p>
                  </div>
                @endif
              </a>
              <div class="card-body d-flex flex-column justify-content-between">
                <a href="{{ url('related_category/'. Str::slug($category->title)) }}" class="text-dark text-decoration-none stretched-link">
                  <h5 class="card-title">{{ $category->title }}</h5>
                </a>
                <!--<a href="{{ url('related_category/'. Str::slug($category->title)) }}" class="btn btn-primary mt-auto">Explore Now</a>-->
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br>
<x-footer/>
</body>
</html>