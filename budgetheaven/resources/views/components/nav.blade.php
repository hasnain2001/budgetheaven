<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('cssfile/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery and bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
            #myBtn,
.loader {
    position: fixed;
}

::-webkit-scrollbar {
    width: 20px;
}
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    background: #f00505;
    border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
    background: #f03535;
}
.loader {
    width: 120px;
    height: 20px;
    background: linear-gradient(#f00505 0 0) 0/0 no-repeat #ddd;
    animation: 2s linear infinite l1;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}
@keyframes l1 {
    100% {
        background-size: 100%;
    }
}
#myBtn {
    display: none;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    border: none;
    outline: 0;
    background-color: #f00505;
    color: #fff;
    cursor: pointer;
    padding: 15px;
    border-radius: 10px;
    font-size: 18px;
}
#myBtn:hover {
    background-color: #645d5d;
}

  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{asset ("/images/budgetheaven.png") }}" style="width: 150px; height: auto;">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn" aria-current="page" href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="btn" aria-current="page" href="{{ route('stores') }}"><i class="fas fa-store"></i> Stores</a>
                </li>
                <li class="nav-item">
                    <a class="btn" aria-current="page" href="{{ route('categories') }}"><i class="fas fa-list"></i> Categories</a>
                </li>
                <li class="nav-item">
                    <a class="btn" aria-current="page" href="{{ route('blog') }}"><i class="fas fa-blog"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="btn" aria-current="page" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact Us</a>
                </li>
            </ul>
          <!-- Move the search bar outside of the collapsible area -->
          <form action="{{ route('search') }}" method="GET" class="d-flex col-md-6 order-lg-last" role="search" style="max-width: 600px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput" name="query">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
          </div>
        </div>
      </nav>

         <!-- Loader -->
   <button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
  </svg>

   </button>
   <div id="loader" class="loader"></div>
<script>     // Hide the loader once the page is fully loaded
    window.addEventListener('load', function() {
      var loader = document.getElementById('loader');
      loader.style.display = 'none';
    });

   let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
   mybutton.style.display = "block";
 } else {
   mybutton.style.display = "none";
 }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 document.body.scrollTop = 0; // For Safari
 document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>
</body>
</html>
