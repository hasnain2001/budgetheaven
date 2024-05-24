<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LXHf2gANaqvdloS5zVwu5Kvi8463wsRoL3CZMQnYu9tJvs5a5Cw6S5hJmW3v2P66" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-7sjkKBDvxOnZ7xX8+3gpTzP64wqS5/2+FfDkWQtxdU5beTKs6eh2ziBYj79nRso1" crossorigin="anonymous"></script>

    <style>
        .footer{
              background-color:red;
        }
        .footer {
    padding: 30px 0;
}

.footer a {
    color: white;
}

.social-icons a {
    margin-right: 10px;
    color: white;
    font-size: 1.5rem;
}

.social-icons a:hover {
    color: #f8f9fa;
}
.text{
    color:rgb(247,189,1);
}
.footerimg{
    width:230px;
}

    </style>
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
        <h5 class="mt-4">Quick Links</h5>  
        <ul class="list-unstyled">
          <li><a class="text-white" href="/"><i class="bi bi-house-door-fill"></i> Home</a></li>
          <li><a class="text-white" href="{{ route('contact') }}"><i class="bi bi-envelope-fill"></i> Contact us</a></li>
          <li><a class="text-white" href="{{ route('about') }}"><i class="bi bi-info-circle-fill"></i> About us</a></li>
          <li><a class="text-white" href="{{ route('terms_and_condition') }}"><i class="bi bi-file-earmark-text-fill"></i> Terms and Condition</a></li>
          <li><a class="text-white" href="{{ route('privacy') }}"><i class="bi bi-shield-lock-fill"></i> Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 d-md-flex flex-column align-items-center">
        <br><br>
        <h5 class="mt-md-4">Follow Us</h5>  
        <div class="social-icons d-flex justify-content-center">
          <a href="https://www.facebook.com/budgetheaven/" target="blank" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/budgetsheaven/" target="blank" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
          <a href="https://www.pinterest.com/thebudgetheaven/" target="blank" class="text-white mx-2"><i class="fab fa-pinterest"></i></a>
        </div>
        <br><br>
        <div class="mt-md-3 text-center">
          <a href="contact" class="text-white">
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
        <span><a href="https://alphaisoft.com/" target="_blank" class="text-white">Developed By Alpha Ai Solutions</a></span>
      </div>
    </div>
  </div>
</footer>



    <!-- Bootstrap and other scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
