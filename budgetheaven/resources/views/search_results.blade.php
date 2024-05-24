<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
 <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
                        .body{
    background-color:#fff;
}
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
               .get {
    color: #fff;
    background: linear-gradient(to right, #FF416C, #FF4B2B); /* Gradient background */
    border: 2px solid #fff; /* White border */
    border-radius: 25px; /* Rounded border */
    padding: 10px 20px; /* Padding */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Cursor style */
    transition: all 0.3s ease; /* Smooth transition */
    box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.1); /* Box shadow */
}
        </style>
</head>
<body class="body">
<x-nav/>


<div class="container"> 
<!-- Display Stores -->
<h3>Search Results</h3>
<div class="main_content">
            <div class="container">
                <div class="row mt-3">
          @if ($stores->isEmpty())
    <div class="col-12">
    <h1>No stores found.</h1>
    </div>
@else
    @foreach ($stores as $store)
        <div class="col-12 col-lg-3">
            @if ($store->name)
                <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-decoration-none">
            @else
                <a href="javascript:;" class="text-decoration-none">
            @endif
                <div class="card shadow">
                    <div class="card-body">
                        @if ($store->store_image)
                            <img src="{{ asset('uploads/store/' . $store->store_image) }}" width="100%" alt="">
                        @else
                            <img src="{{ asset('front/assets/images/no-image-found.jpg') }}" width="100%" alt="">
                        @endif
                        <h5 class="card-title mt-3 mx-2">{{ isset($store->name) ? $store->name : "Title not found" }}</h5>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endif

                </div>
            </div>
        </div>
</div>
        
<br><br><br><br><br><br><br>
 <x-footer/>

</body>
</html>