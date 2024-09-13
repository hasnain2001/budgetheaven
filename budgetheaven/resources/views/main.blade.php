@extends('home')
@section('title')
    Home
@endsection
@section('main-content')
<style>
/* Customizing carousel control buttons */
.custom-carousel-btn {
    width: 50px;
    height: 50px;
    background-color: rgba(255, 0, 0, 0.5); /* Red with opacity */
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s ease;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.custom-carousel-btn:hover {
    background-color: rgba(255, 0, 0, 0.8); /* Darker red on hover */
}



.carousel-control-prev.custom-carousel-btn {
    left: 20px;
}

.carousel-control-next.custom-carousel-btn {
    right: 20px;
}

/* Customizing carousel indicators */
.custom-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 40%;
    background-color: #ccc;
    border: none;
    transition: background-color 0.3s ease;
}

.custom-indicators button.active {
    background-color: red; /* Active indicator in red */
}

.custom-indicators button:hover {
    background-color: darkred; /* Dark red on hover */
}

/* Align indicators below the carousel */
.carousel-indicators {
    bottom: -20px;
}


</style>
<!-- start carousels! -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators custom-indicators">
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/slidercompress.png') }}" class="d-block w-100" alt="Slide 1" loading="lazy">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/caraosel-1.png') }}" class="d-block w-100" alt="Slide 2" loading="lazy">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/caraosel-2.png') }}" class="d-block w-100" alt="Slide 3" loading="lazy">
      </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousels! -->




<br>
<!-- End Exclusive Offer Section -->
<div class="container">
<!-- Start Store Section -->
<h1 class="title">Latest Discount Codes & Promo Codes From Popular Stores</h1>
<div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($stores->chunk(6) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="row">
                    @foreach ($chunk as $storeItem)
                        <div class="col-md-2 col-sm-6 col-6">
                            @php
                            $storeUrl = $storeItem->slug
                                ? route('store_details', ['slug' => Str::slug($storeItem->slug)])
                                : '#';
                        @endphp
                            <a href="{{ $storeUrl }}" class="text-dark text-decoration-none d-flex flex-column align-items-center">


                                <img class="rounded-circle img-fluid" src="{{ asset('uploads/store/' . $storeItem->store_image) }}" alt="{{ $storeItem->name }}" style="width: 150px; height: 150px;" loading="lazy">
                                <span class="mt-2">{{ $storeItem->name }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Store Section -->


<br><br>

<!-- Coupon Cards Section -->

<div class="row mb-4">
<div class="col-12 ">
  <h2 class="title">Today's Top Trending Coupons & Voucher Codes</h2>
</div>
</div>
<div class="row coupon-grid g-4">
@foreach ($Coupons as $coupon)
  <div class="col-md-4 col-sm-6">
    <div class="coupon-card  h-100 card rounded shadow">
      @php
        // Retrieve associated store and handle unavailable images
        $store = App\Models\Stores::where('slug', $coupon->store)->first();
      @endphp

      <div class="coupon-header">
        @if ($store && $store->store_image)
          <img src="{{ asset('uploads/store/' . $store->store_image) }}"
               alt="{{ $store->name }} Image" class="coupon-image"
               loading="lazy">
        @else
          <div class="no-image-placeholder bg-light text-center py-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
              </svg>
             <p>no image </p>
          </div>
        @endif
      </div>

      <div class="coupon-body p-4">
        <h4 class="coupon-store mb-3 text-dark font-italic">{{ $coupon->store }}</h4>
        <h6 class="coupon-description ">{{ $coupon->description }}</h6>

        @if ($coupon->code)
          <button type="button" class="getcode"
                  data-bs-toggle="modal" data-bs-target="#codeModal{{ $coupon->id }}"
                  onclick="openCouponInNewTab('{{ $coupon->destination_url }}', '{{ $coupon->id }}')">
            Get Code
          </button>
        @else
          <a href="{{ $coupon->destination_url }}" class="get"
             target="_blank">Get Deal</a>
        @endif
@if ($coupon->store)
<a href="{{ route('store_details', ['slug' => Str::slug($coupon->store)]) }}"
class="get ">Visit Store</a>
@else
<a href="#"
class="get ">no store name</a>
@endif

</div>

    </div>
  </div>

  <!-- Modal for Coupon Code -->
  <div class="modal fade" id="codeModal{{ $coupon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $coupon->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel{{ $coupon->id }}">{{ $coupon->name }}</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3>{{ $coupon->code ? $coupon->code : "Code not found" }}</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark" onclick="copyCoupon('{{ $coupon->code }}')">Copy</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
</div>




<div class="row mt-5">
<div class="col-12">
<div class="container d-flex justify-content-between align-items-center border-bottom pb-3">
  <h2 class="text-dark fw-bold">Popular Categories</h2>
  <button id="toggleCategoriesButton" class="btn get">
    <i class="fas fa-angle-down"></i>
  </button>
</div>
<div id="categoryContainer" style="display: none;">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
    @foreach ($categories as $category)
        <div class="col mb-3">
            <a href="{{ route('related_category', ['title' => Str::slug($category->title)]) }}" class="text-decoration-none">
                <div class="container">
                <div class="card shadow-sm shadow " style="border-radius: 15px;">
<div class="card-body text-center">
    <h5 class="card-title mb-0 category-title text-dark">{{ $category->title }}</h5>
    </div>
</div>
</div>

            </a>
        </div>
    @endforeach
</div>
</div>

</div>
</div>





<!-- Popular Stores Section -->

<!-- Place this code inside your home.blade.php file -->
<div class="row mt-5">
<div class="col-12">
    <div class="container">
    <h2  class="fw-bold home_ts_h2">Populor  Stores</h2>
    <hr>

    <div class="col-12 text-end">
        <button id="toggleStoresButton" class="btn get" onclick="toggleStoreContainer()">
                    <i class="fas fa-angle-down"></i>
                    </button>
    </div>
    <div id="storeContainer" style="display: none;">
        <div class="row">
            @foreach ($topstores as $storeItem)
            <div class="col-12 col-lg-2 col-md-4 col-sm-12 mb-3">
                @if ($storeItem->slug)
                <a href="{{ route('store_details', ['slug' => Str::slug($storeItem->slug)]) }}" class="text-dark text-decoration-none">
                @else
<p>no slug</p>
                @endif

                    <div class="stores home_top_stores shadow p-3">



                        <span class="fw-bold">{{ $storeItem->name }}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>



   <!---faq section-->
    <br><br>
<div class="accordion accordion-flush" id="accordionFlushExample">
<h3>Frequently Asked Questions (FAQ)</h3>
<hr>
<br>
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            How do I use coupons on BudgetHeaven?
        </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">To use coupons on BudgetHeaven, simply browse through our available coupons and click on the "Get Deal" button. This will reveal the coupon code, which you can then apply at checkout on the store's website.</div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Are the coupons on BudgetHeaven verified?
        </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Yes, we strive to provide our users with verified and up-to-date coupons. However, please note that coupons are subject to change by the stores, so we recommend checking the validity of the coupon before use.</div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Can I submit a coupon to BudgetHeaven?
        </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Yes, we welcome coupon submissions from our users. If you have a coupon that you would like to share with others, you can submit it through our website. Our team will review the coupon before adding it to our database.</div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            How often are new coupons added to BudgetHeaven?
        </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">We regularly update our database with new coupons and deals from various stores. New coupons are added daily, so be sure to check back often for the latest savings opportunities.</div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Is BudgetHeaven free to use?
        </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Yes, BudgetHeaven is completely free for users. You can browse and use coupons without any subscription fees or hidden charges. We are committed to helping you save money on your online purchases.</div>
    </div>

</div>
</div>

</div>


  <script src="{{ asset('front/assets/js/java.js') }}"></script>
@endsection
