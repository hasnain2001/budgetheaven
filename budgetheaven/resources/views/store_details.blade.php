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
  <link rel="canonical" href="https://budgetheaven.com/store/">
  @endif


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
   <link rel="stylesheet" href="{{asset('cssfile/storedetail.css')}}">
<style>
.cpn {
    border: 2px black dotted;
    padding: 15px;
}

hr {
    border: 1px dotted black;
    margin: 20px 0;
}
</style>


</head>
<body>
  <!-- Navbar -->
  <x-nav/>
  <!-- End Navbar -->

  <a href="#" class="scroll-to-top text-white">
    <i class="fas fa-chevron-up"></i>
  </a>
   @if(session('success'))
    <div class="alert alert-light alert-dismissable">


        <b>{{ session('success') }}</b>
    </div>
    @endif
  <div class="container mt-5">
    <div class="container d-flex h-100 align-items-end">
      @if ($store)
      <h1 class="text-left">{{ $store->name }}</h1>
      @else
      <h5 style="margin-top: 0;">Store name not available</h5>
      @endif

    </div>
    <hr>
    <div class="row">
      <div class="col-lg-3 mb-3">
        @if ($store)
        <div class="cpn">
          <div class="card-body">
            <div class="row">
              <div class="col-4 col-md-12 mb-2 mb-md-0 text-center">
                <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="img-fluid">
              </div>
              <div class="col-8 col-md-12">
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
                <div class="coupon-card h-100 cpn">
                    <div class="coupon-image-container d-flex">
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
                            <hr  class="my-3 border-top border-dotted">
                            <p class="card-text coupon-description">{{ $coupon->description }}</p>
                            <hr class="my-3 border-top border-dotted">
                        </div>
                        <div class="coupon-action text-center">
                            @if ($coupon->code)
                            <a href="{{ $coupon->destination_url }}" target="_blank" class="get" id="getCode{{ $coupon->id }}" onclick="countAndHandleClicks('{{ $coupon->id }}')">Coupon Code</a>

                            <div class="coupon-card d-flex flex-column flex-grow-1">
                                <span class="codeindex text-dark" style="display: none;" id="codeIndex{{ $coupon->id }}">{{ $coupon->code }}</span>
                                <button class="btn btn-danger copy-btn" style="display: none;" id="copyBtn{{ $coupon->id }}" onclick="copyToClipboard('{{ $coupon->id }}')">Copy Code</button>
                                <p class="text-success copy-confirmation" style="display: none;" id="copyConfirmation{{ $coupon->id }}">Code copied!</p>
                                <br>
                                <div class="mt-auto couponuse">
                                    <p class="used" id="output_{{ $coupon->id }}">Used By: {{ $coupon->clicks }}</p>
                                </div>
                                <form method="post" action="{{ route('update.clicks') }}" id="clickForm">
                                    @csrf
                                    <input type="hidden" name="coupon_id" id="coupon_id">
                                </form>
                            </div>
                            @else
                            <a href="{{ $coupon->destination_url }}" onclick="countClicks('{{ $coupon->id }}')" class="get btn btn-success" target="_blank">Get Deal</a>
                            <p class="used" id="output_{{ $coupon->id }}">Used By: {{ $coupon->clicks }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>


    <br><br>
</div>
<x-footer/>
<script>
  function countClicks(couponId) {
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();
}

function countAndHandleClicks(couponId) {
    // Count the click
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();

    // Handle coupon click to show coupon code
    var couponLink = $('#getCode' + couponId);
    var couponCode = $('#codeIndex' + couponId);
    var copyBtn = $('#copyBtn' + couponId);

    // Toggle visibility of link and coupon code span
    couponLink.hide();
    couponCode.show();
    copyBtn.show();

    // Store the clicked state in local storage
    localStorage.setItem('couponClicked_' + couponId, true);
}

function copyToClipboard(couponId) {
    var couponCode = $('#codeIndex' + couponId).text().trim();
    navigator.clipboard.writeText(couponCode);

    // Change button text to inform user code has been copied
    $('#copyBtn' + couponId).text('Copied');
    $('#copyConfirmation' + couponId).show();

    // Reset button text after 2 seconds
    setTimeout(function() {
        $('#copyBtn' + couponId).text('Copy Code');
        $('#copyConfirmation' + couponId).hide();
    }, 2000);
}

$(document).ready(function() {
    // Restore coupon click states from local storage
    @foreach($coupons as $coupon)
    var clicked = localStorage.getItem('couponClicked_{{ $coupon->id }}');
    if (clicked) {
        $('#getCode{{ $coupon->id }}').hide();
        $('#codeIndex{{ $coupon->id }}').show();
        $('#copyBtn{{ $coupon->id }}').show();
    }
    @endforeach
});
</script>
</body>
</html>
