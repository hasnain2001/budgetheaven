<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@foreach($categories as $category)
    <title>{!! $category->title !!}</title>
    <link rel="canonical" href="https://budgetheaven.com/related_category/{{ Str::slug($category->title) }}">

    <!-- Your custom meta tags go here -->
    <meta name="description" content="{!! $category->meta_description !!}">
    <meta name="keywords" content="{!! $category->meta_keyword !!}">
@endforeach
      <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
                <link rel="stylesheet" href="{{asset('cssfile/categories.css')}}">
       
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
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
                    .body{
    background-color:#fff;
}
    .container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .bg-light {
        background-color: #f8f9fa;
    }

    .card-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }

    .card-list a {
        text-decoration: none;
        color: inherit;
        width: 100%;
        max-width: 200px;
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 5px;
        /*box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);*/
        transition: all 0.3s ease;
    }

    .card-list a:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

 /*.store {*/
 /*       max-width: 100%;*/
 /*       height:200px;*/
 /*         border-radius: 60%;*/
 /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
 /* transition: transform 0.3s ease;*/
    }
.stores:hover {
  transform: scale(1.05);
}
    .card-title {
        text-align: center;
        margin-top: 10px;
        font-size: 1.2rem;
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .card-list {
            justify-content: flex-start;
        }

        .card-list a {
            width: calc(25% - 20px);
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .card-list a:nth-child(4n) {
            margin-right: 0;
        }
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
  <body>
   
    <!-- navbar ! -->
 
<x-nav/>

  <a href="#" class="scroll-to-top text-white">
  <i class="fas fa-chevron-up"></i>
</a>

<!-- End navbar! -->
<h1>{{$name}}</h1>
<div class="container">
    <div class="card-list ">
        @forelse ($stores as $store)
        <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-decoration-none">
           <img class="store rounded-circle" src="{{ $store->store_image ? asset('uploads/store/' . $store->store_image) : asset('front/assets/images/no-image-found.jpg') }}" alt="Card Image">

            <div class="container">
                <h5 class="card-title mt-3 mx-2">{{ $store->name ?: "Title not found" }}</h5>
            </div>
        </a>
        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center" role="alert">
                No Related Stores Found!
            </div>
        </div>
        @endforelse
    </div>
</div>
<x-footer/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>