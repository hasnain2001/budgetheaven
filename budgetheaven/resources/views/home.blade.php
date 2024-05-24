<?php
header("X-Robots-Tag:index, follow");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="{{asset('cssfile/slider.css')}}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <title>BudgetHeaven - Best Deals and Discounts | BudgetHeaven</title>
    <meta name="description" content="Find the best deals, discounts, and coupons on BudgetHeaven. Save money on your favorite products from top brands.">
    <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">
    <meta name="author" content="John Doe">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://budgetheaven.com">
    <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
    
        <link rel="stylesheet" href="{{asset('cssfile/slider.css')}}">
                <link rel="stylesheet" href="{{asset('cssfile/home.css')}}">
        
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
  </head>
  <body>
      <x-nav/>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
   <div class="carousel-inner">
    <div class="carousel-item active">
   <img src="images/caraosel.png" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      
    <img src="images/caraosel-1.png" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/caraosel-2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- start caraosels! -->


<!-- end caraosels! -->
    </divs>
  <a href="#" class="scroll-to-top text-white">
  <i class="fas fa-chevron-up"></i>
</a>

<!-- Exclusive Offer Section -->

<!-- Exclusive Offer Section -->
<!--<div class="container">-->
<!--  <h1 class="text-center title display-4 mb-5">Exclusive Offer</h1>-->
<!--  <div class="row justify-content-center">-->
<!--    <div class="col-lg-6">-->
<!--      <div class="offer bg-white shadow rounded overflow-hidden p-4 d-flex align-items-center">-->
<!--        <img src="images/logo-3.jpg" class="offer-img img-fluid rounded-circle me-4" alt="Store Logo" style="width: 100px; height: 100px;" />-->
<!--        <div class="offer-content">-->
<!--          <p class="text-muted mb-2"><i class="fas fa-star text-warning me-1"></i> Exclusively Available On BudgetHeaven</p>-->
<!--          <h5 class="card-title mb-3">Amazon</h5>-->
<!--          <p class="text-secondary mb-4">The Mi Smart Band 4 features a 39.9% larger display (than Mi Band 3).</p>-->
<!--          <a href="#" class="btn btn-danger">Redeem Now <i class="fas fa-arrow-right ms-2"></i></a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
</div>


<br>
<!-- End Exclusive Offer Section -->
<h2 class="title text-center">Latest Discount Codes & Promo Codes From Popular Stores</h2>
<div class="logos">
      <div class="logos-slide">
             @foreach ($stores as $storeItem)
  <a href="{{ route('store_details', ['name' => Str::slug($storeItem->name)]) }}" class="text-dark text-decoration-none">
<img class="rounded-circle" src="{{ asset('uploads/store/' . $storeItem->store_image) }}" alt="{{ $storeItem->name }}" style="width: 300px; height: 250px;" />
                 </a>
               
                            @endforeach
      </div>
    </div>




<!--<div class="logos">-->
<!--    <div class="logos-slide">-->
<!--        <ul class="image-list" id="slider">-->
<!--            @foreach ($stores as $storeItem)-->
<!--            <li class="image-item">-->
<!--                <a href="{{ route('store_details', ['name' => Str::slug($storeItem->name)]) }}" class="text-dark text-decoration-none">-->
<!--<img class="img-fluid rounded-circle" src="{{ asset('uploads/store/' . $storeItem->store_image) }}" alt="{{ $storeItem->name }}" style="width: 300px; height: 250px;" />-->
<!--                    <span class="fw-bold d-block text-center">{{ $storeItem->name }}</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            @endforeach-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

    

    <br><br>

<!-- Coupon Cards Section -->
<div class="container">
  <div class="row mb-4">
    <div class="col-12 text-center">
      <h2 class="display-4 fw-bold">Today's Top Trending Coupons & Voucher Codes</h2>
    </div>
  </div>
  <div class="row coupon-grid g-4">
    @foreach ($Coupons as $coupon)
      <div class="col-md-4 col-sm-6">
        <div class="coupon-card border rounded shadow">
          @php
            // Retrieve associated store and handle unavailable images
            $store = App\Models\Stores::where('name', $coupon->store)->first();
          @endphp

          @if ($store && $store->store_image)
          <br>
          <center>
            <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }} Image" class="img-1 coupon rounded-border" style="width: 250px; height: 250px;"></center>
          @else
            <div class="no-image-placeholder bg-light text-center py-4">
              <i class="fas fa-store-alt fa-3x text-primary"></i>
            </div>
          @endif

          <div class="coupon-body p-4">
            <h4 class="coupon-store mb-3 text-dark">{{ $coupon->store }}</h4>
            <p class="coupon-description text-gray-700 mb-3">{{ $coupon->description }}</p>
           
               @if ($coupon->code)
                                    <button type="button" class="btn btn-primary btn-block rounded-pill font-weight-bold text-white" data-bs-toggle="modal" data-bs-target="#codeModal{{ $coupon->id }}" onclick="openCouponInNewTab('{{ $coupon->destination_url }}', '{{ $coupon->id }}')">
                                        Get Code
                                    </button>
                                    @else
                                    <a href="{{ $coupon->destination_url }}" class="btn btn-primary btn-block rounded-pill font-weight-bold text-white" target="_blank">Get Deal</a>
                                    @endif
          </div>
        </div>
      </div>
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
                <a href="{{ url('related_category/'. Str::slug($category->title)) }}" class="text-decoration-none">
                    <div class="container">
                    <div class="card shadow-sm shadow " style="border-radius: 15px;"> <!-- Adjust the border-radius value to decrease the roundedness -->
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
        <h2  class="fw-bold home_ts_h2">Populor  Stores</h2></div>
        <hr> 
          <div class="container bg-light">
        <div class="col-12 text-end">
            <button id="toggleStoresButton" class="btn get" onclick="toggleStoreContainer()">
                        <i class="fas fa-angle-down"></i>
                        </button>
        </div>
        <div id="storeContainer" style="display: none;">
            <div class="row">
                @foreach ($stores as $storeItem)
                <div class="col-12 col-lg-2 col-md-4 col-sm-12 mb-3">
                    <a href="{{ route('store_details', ['name' => Str::slug($storeItem->name)]) }}" class="text-dark text-decoration-none">
                        <div class="stores home_top_stores shadow p-3">
                            
                        
                      
                            <span class="fw-bold">{{ $storeItem->name }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
        <!-- Popular stores content -->
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

    <br><br><br>

    <x-footer/>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

         
<script>

      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);

    document.addEventListener('DOMContentLoaded', function() {
        const toggleCategoriesButton = document.getElementById('toggleCategoriesButton');
        const categoryContainer = document.getElementById('categoryContainer');

        toggleCategoriesButton.addEventListener('click', function() {
            if (categoryContainer.style.display === 'none' || categoryContainer.style.display === '') {
                categoryContainer.style.display = 'block';
                toggleCategoriesButton.innerText = '-';
            } else {
                categoryContainer.style.display = 'none';
                toggleCategoriesButton.innerText = '+';
            }
        });
    });
</script>
<script>
    function copyCoupon(code) {
        navigator.clipboard.writeText(code)
            .then(() => {
                alert("Coupon code copied!");
            })
            .catch((error) => {
                console.error("Failed to copy: ", error);
            });
    }
    
    function openCouponInNewTab(url, couponId) {
        window.open(url, '_blank');
        var modal = new bootstrap.Modal(document.getElementById('codeModal' + couponId));
        modal.show();
        
        // Automatically close the modal after 5 seconds when hovered over
        setTimeout(function() {
            modal.hide();
        }, 5000); // 5000 milliseconds = 5 seconds
    }
</script>

<script>
    function toggleStoreContainer() {
        var storeContainer = document.getElementById('storeContainer');
        if (storeContainer.style.display === 'none') {
            storeContainer.style.display = 'block';
            document.getElementById('toggleStoresButton').innerText = '-';
        } else {
            storeContainer.style.display = 'none';
            document.getElementById('toggleStoresButton').innerText = '+';
        }
    }
</script>

  </body>
</html>