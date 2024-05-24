<?php
header("X-Robots-Tag:index, follow");
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(isset($store) && is_object($store))
  <title>{!! $store->title !!}</title>
  <link rel="canonical" href="https://budgetheaven.com/store/{{ Str::slug($store->name) }}">
  <meta name="description" content="{!! $store->meta_description !!}">
  <meta name="keywords" content="{!! $store->meta_keyword !!}">
  <meta name="author" content="John Doe">
  <meta name="robots" content="index, follow">
  @else
  <link rel="canonical" href="https://www.honeycombdeals.com">
  @endif


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
   <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('cssfile/storedetail.css')}}">
  

</head>
<body>
  <!-- Navbar -->
  <x-nav/>
  <!-- End Navbar -->

  <a href="#" class="scroll-to-top text-white">
    <i class="fas fa-chevron-up"></i>
  </a>

  <div class="container mt-5">
    <div class="container d-flex h-100 align-items-end">
      @if ($store)
      <h1 class="text-left">{{ $store->name }}</h1>
      @else
      <h5 style="margin-top: 0;">Store name not available</h5>
      @endif
    </div>
    <div class="row">
      <div class="col-lg-3 mb-3">
        @if ($store)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4 col-md-12 mb-2 mb-md-0 text-center"> <!-- Adjusted column width for mobile view -->
                <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="img-fluid">
              </div>
              <div class="col-8 col-md-12"> <!-- Adjusted column width for mobile view -->
                <div class="col-md" style="padding-left: 0;">
                  @if ($store)
                  <h5 style="margin-top: 0;">{{ $store->name }}</h5>
                  @else
                  <h5 style="margin-top: 0;">Store name not available</h5>
                  @endif
                  <div class="rating-stars">
                    <i class="fas fa-star" data-rating="1"></i>
                    <i class="fas fa-star" data-rating="2"></i>
                    <i class="fas fa-star" data-rating="3"></i>
                    <i class="fas fa-star" data-rating="4"></i>
                    <i class="fas fa-star" data-rating="5"></i>
                  </div>
                  @if ($store->description)
                  <a href="{{ $store->url }}" target="_blank" class="get btn text-dark">Visit Store</a>
                  <!-- Hide description on screens smaller than medium (i.e., mobile and tablet) -->
                  <p class="mt-2 mx-2 store_detail_description d-none d-md-block">{!! $store->description !!}</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>

      <div class="col-lg-9">
        <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($coupons as $coupon)
<div class="col-lg-4 col-md-6 col-sm-12 mb-3">
  <div class="coupon-card h-100 shadow-sm rounded-lg border d-flex flex-column"> <!-- Added border class -->
    <div class="coupon-image-container d-flex ">
      @php
        $store = App\Models\Stores::where('name', $coupon->store)->first();
      @endphp
      @if ($store && $store->store_image)
        <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }} Image" class="store-image" style="max-width: 100px; height: 100px;">
      @else
        <span class="no-image-placeholder" style="display: flex; align-items: center; justify-content: center; width: 100px; height: 100px; background-color: #f0f0f0; color: #888; font-size: 14px;">No Image Available</span>
      @endif
    </div>

    <div class="coupon-content p-3 flex-grow-1 d-flex flex-column justify-content-between">
      <div class="coupon-details">
        <h5 class="card-title coupon-title">{{ $coupon->name }}</h5>
        <p class="card-text coupon-description">{{ $coupon->description }}</p>
      </div>
      <div class="coupon-action text-center">
        @if ($coupon->code)
          <button type="button" class="get btn btn-primary" data-bs-toggle="modal" data-bs-target="#codeModal{{ $coupon->id }}" onclick="openCouponInNewTab('{{ $coupon->destination_url }}', '{{ $coupon->id }}')">
            Get Code
          </button>
        @else
          <a href="{{ $coupon->destination_url }}" class="get btn btn-success" target="_blank">Get Deal</a>
        @endif
      </div>
    </div>
  </div>
</div>




                <!-- Modal -->
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
    </div>
</div>


    <br><br>
<x-footer/>
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>