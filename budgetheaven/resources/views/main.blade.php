@extends('home')
@section('title')
    Home
@endsection
@section('main')

        <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .image-list {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 20px;
        }
        .image-list li {
            list-style: none;
        }
        .image-item-fluid {
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }
        .image-item-fluid:hover {
            transform: scale(1.1);
        }
        .fw-bold {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
   .carousel-control-prev, 
    .carousel-control-next {
        font-size: 1rem !important;
        width: 40px !important;
        height: 30px !important;
        line-height: 30px !important;
        background-color:transparent;
    }
    </style>

<x-slider/>


<br>
 

<h2 class="fw-bold home_ts_h2">Latest Discount Codes & Promo Codes From Popular Stores</h2>
<div class="container">
    <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($store->chunk(5) as $key => $chunk)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $storeItem)
                            <div class="col-md-2">
                                <a href="{{ route('store_details', ['name' => Str::slug($storeItem->name)]) }}" class="text-dark text-decoration-none">
                                    <img class="img-fluid mb-2" src="{{ asset('uploads/store/' . $storeItem->store_image) }}" alt="{{ $storeItem->name }}" />
                                    <span class="fw-bold d-block text-center">{{ $storeItem->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>





<br><br>
    <h2 class="fw-bold home_ts_h2"> Today's Top Trending Coupons & Voucher Codes </h2>
<div class="container">
    
    <div class="row">
        @foreach ($topCoupons as $coupon)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                     <h3  class="card-title">{{ $coupon->store }}</h3>
                     <br>
                    <h5 class="card-title">{{ $coupon->title }}</h5>
                    <p class="card-text">{{ $coupon->description }}</p>
                    <p class="card-text">Discount: {{ $coupon->discount }}</p>
               
                    <!-- Add more coupon details as needed -->
                 
                    <a  href="{{ $coupon->destination_url }}" target="blank" class="btn btn-primary">View Details</a> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    <div class="row mt-5">
        <h2 class="fw-bold home_ts_h2">Top Categories</h2>
        @foreach ($categories as $category)
            <div class="col-12 col-lg-2 col-md-4 col-sm-12 ">
                <a href="{{ route('related_stores', ['title' => Str::slug($category->title)]) }}" class="text-dark text-decoration-none">
                  <div class="stores home_top_stores shadow p-3">
                     @if ($category->category_image)
                        <img  src="{{ asset('uploads/' . $category->category_image) }}" alt="{{ $category->title }} Image"  width="100%" height="150">
                    @else
                        <p>No image available</p>
                    @endif
                      <span class="fw-bold">{{ $category->title }}</span>
                  </div>
                </a>
            </div>
        @endforeach
    </div>


<br><br><br>

<h2 class="fw-bold home_ts_h2">Shopping Hacks & Savings Tips & Tricks</h2>
<div class="container bg-light">
 
 <br><br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner bg-light">
        @foreach ($blogs->chunk(3) as $chunk)
            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                <div class="container bg-light">
                    <div class="row">
                        @foreach ($chunk as $blog)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset($blog->category_image) }}" alt="Blog Post Image">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">{{ $blog->excerpt }}</p>
                                        <a href="{{ route('blog-details', ['title' => urlencode($blog->title)]) }}" class="btn btn-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>


  
  
  <script src="{{ asset('front/assets/js/java.js') }}"></script>
@endsection