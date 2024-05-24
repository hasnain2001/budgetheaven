<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <title>Blog- Best Deals and Discounts |BudgetHeaven</title>
     <meta name="description" content="Find the best deals, discounts, and coupons on BudgetHeaven. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://budgetheaven.com/blog">

 <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
                <link rel="stylesheet" href="{{asset('cssfile/blog.css')}}">
       
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
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
  <body>
<x-nav/>
<br><br><br>

<a href="#" class="scroll-to-top text-white">
  <i class="fas fa-chevron-up"></i>
</a>

<div class="container">

  <div class="row">
    <div class="col-md-8">
      <div class="row blog-posts">

        @foreach ($blogs as $blog)
          <div class="col-md-12 blog-post">

            <div class="blog-image-wrapper">
              <img src="{{ asset($blog->category_image) }}" alt="Blog Post Image">
             
            </div>

            <div class="post-content">
              <h2>{{ $blog->title }}</h2>
                <a href="{{ route('blog-details', ['title' => Str::slug($blog->title)]) }}" class="stretched-link">
              <p>{{ $blog->meta_description }}</p>
<a href="{{ route('blog-details', ['title' => Str::slug($blog->title)]) }}" class="btn btn-dark btn-black rounded-pill text-white">Read More</a>

              </a>
              </div>

          </div>
        @endforeach

      </div>
    </div>

  <div class="col-md-4 sidebar p-3 frugal-heaven-sidebar bg-light rounded shadow-sm">

  <h2 class="frugal-heaven-text text-center mb-4">Top Stores</h2>

  <ul class="list-group list-group-flush">

    @foreach ($chunks as $store)
      <li class="list-group-item d-flex align-items-center">

        <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-dark text-decoration-none d-flex align-items-center w-100">
          <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="mr-2 rounded-circle" style="width: 60px; height: 60px;">
          <div class="store-info ml-2 frugal-heaven-text">
            <span class="fw-bold">{{ $store->name }}</span>
          </div>
        </a>

      </li>
    @endforeach

  </ul>

</div>


  </div>

  </div>

</div>


  <div class="container bg-primary mt-3">
          <div class="row mt-3 justify-content-end bg-light">
            <div class="col-12 ">
              {{ $blogs->links('pagination::bootstrap-4') }} </div>
          </div>
        </div>

<x-footer/>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>