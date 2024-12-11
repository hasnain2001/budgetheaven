<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('cssfile/footer.css') }}">

</head>
<body>

<footer class="footer text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="/">
          <img src="/images/budget heaven footer.png" class="footerimg">
        </a>
        <div class="mt-2">
          <h5>Welcome to Budget Heaven</h5>
          <p class="text-white">
            <i class="bi bi-bag-fill"></i> Unlock the Secrets to Savvy Shopping
          </p>
          <p class="text-white">
            We are your trusted companion in the world of discounts, deals, promo codes, bundle offers, comparisons, and invaluable money-saving tips. Indulge in your favorite shopping sprees while saving money!
          </p>
        </div>
      </div>
      <div class="col-md-5 offset-md-1">
        <br><br><br>
        <h5 class="mt-6">Quick Links</h5>
        <ul class="">
          <li><a class="text-white text-decoration-none" href="/"><i class="bi bi-house-door-fill"></i> Home</a></li>
          <li><a class="text-white text-decoration-none" href="{{ route('stores') }}"><i class="bi bi-house-door-fill"></i> Stores</a></li>
          <li><a class="text-white text-decoration-none" href="{{ route('contact') }}"><i class="bi bi-envelope-fill"></i> Contact us</a></li>
          <li><a class="text-white text-decoration-none" href="{{ route('about') }}"><i class="bi bi-info-circle-fill"></i> About us</a></li>
          <li><a class="text-white text-decoration-none" href="{{ route('terms_and_condition') }}"><i class="bi bi-file-earmark-text-fill"></i> Terms and Condition</a></li>
          <li><a class="text-white text-decoration-none" href="{{ route('privacy') }}"><i class="bi bi-shield-lock-fill"></i> Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 d-md-flex flex-column align-items-center">
        <br><br>
        <h5 class="mt-md-4">Follow Us</h5>
        <div class="social-icons d-flex justify-content-left">
          <a href="https://www.facebook.com/budgetheaven/" target="blank" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/budgetsheaven/" target="blank" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
          <a href="https://www.pinterest.com/thebudgetheaven/" target="blank" class="text-white mx-2"><i class="fab fa-pinterest"></i></a>
        </div>
        <br><br>
        <div class="mt-md-3 ">
          <a href="contact" class="text-white text-decoration-none">
            <h6><i class="bi bi-telephone-fill"></i> Contact Us</h6>
          </a>
          <p class="text-white"><i class="bi bi-envelope-fill"></i> thebudgetheaven@gmail.com</p>
          <p class="text-white"><i class="bi bi-envelope-fill"></i> admin@budgetheaven.com</p>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12 text-center">
        <hr>
        <span class=""><a href="https://alphaisoft.com/" target="_blank" class="text-white">Developed By Alpha Ai Solutions</a></span>
      </div>
    </div>
  </div>
</footer>
<script>
    $(document).ready(function() {
        $('#searchInput').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: '{{ route("search") }}',
                    dataType: 'json',
                    data: {
                        query: request.term
                    },
                    success: function(data) {
                        response(data.stores);
                    }
                });
            },
            minLength:1 // Minimum characters before autocomplete starts
        });
    });
    </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>

</body>
</html>
