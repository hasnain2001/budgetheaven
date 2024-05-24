<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 @if(isset($blog) && is_object($blog))
   <!-- Your custom meta tags go here -->
   <title>{!! $blog->meta_title !!}</title>
    <link rel="canonical" href="https://budgetheaven.com/blog-details/{{ Str::slug($blog->title) }}">
        <meta name="description" content="{!! $blog->meta_description !!}">

 <meta name="keywords" content="{!! $blog->meta_keyword !!}">
@else
    <!-- Handle the case where $store is not valid -->
    <!-- You can display a default canonical URL or handle it in another appropriate way -->
    <link rel="canonical" href="https://budgetheaven.com">
@endif
 <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  
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
    /* Custom styles */
  
            .body{
    background-color:#fff;
}
 
    
    .blog-post {
      background-color: #fff;
      margin-bottom: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .blog-post:hover {
      transform: translateY(-5px);
    }
    .blog-post img {
      max-width: 100%;
      height: auto;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }
    .blog-post .post-content {
      padding: 20px;
    }
    .blog-post .post-content h2 {
      color: #333;
      margin-bottom: 10px;
    }
    .blog-post .post-content p {
      color: #666;
      margin-bottom: 20px;
    }
    .btn-read-more {
      background-color: #343a40;
      color: #fff;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      text-transform: uppercase;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .btn-read-more:hover {
      background-color: #23272b;
    }
    .sidebar {
      background-color: #343a40;
      color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .sidebar h3 {
      color: #fff;
      margin-bottom: 20px;
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar li {
      margin-bottom: 10px;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
    }
    .sidebar a:hover {
      color: #ccc;
    }
    .img{
        width: 250px;
        height: 200;
        border-radius:5%;
    }
    .scroll-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  padding: 10px;
  background-color:red;  /* Adjust color as needed */
  border-radius: 50%;
  font-size: 1.5rem;
  opacity: 0.7;
  transition: all 0.3s ease-in-out;
  z-index: 99;  /* Ensure button stays on top */
}

.scroll-to-top:hover {
  opacity: 1;
}

  </style>
</head>
<body class="body">
<x-nav/>
<br>
<!-- Blog posts -->
<br>
<div class="container">
  <div class="row">
    <!-- Blog Post Column -->
 <div class="col-md-8">
      <div class="blog-post card shadow rounded-lg border border-light mb-4">
 <img class="" src="{{ asset($blog->category_image) }}" alt="Blog Image" style="max-width:700px; height:400px;">
        <div class="card-body">
          <h1 class="card-title text-3xl font-semibold text-gray-800 mb-4">{{ $blog->title }}</h1>
          <p class="card-text text-gray-700 text-lg leading-relaxed">{!! $blog->content !!}</p>
         
        </div>
      </div>
    </div>
    
    <!-- Sidebar Column -->
    <div class="col-md-4">
      <aside class="sidebar p-3 bg-light">
        <!-- Sidebar Title -->
        <h2 class="bold text-dark mb-3">Top Stores</h2>
        <!-- Store Listings -->
        <div class="row gx-2 gy-2">
          @foreach ($chunks as $store)
            <div class="col-md-6 col-sm-4 col-6">
              <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-dark text-decoration-none d-flex flex-column p-2">
                <!-- Store Image -->
                <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="mb-2 rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover;">
                <!-- Store Name -->
                <p class="text-capitalize">{{ $store->name }}</p>
              </a>
            </div>
          @endforeach
        </div>
      </aside>
    </div>
  </div>
</div>


  
<x-footer/>
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
