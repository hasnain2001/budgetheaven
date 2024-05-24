<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <title>Contact - Best Deals and Discounts |BudgetHeaven</title>
     <meta name="description" content="Find the best deals, discounts, and coupons on BudgetHeaven. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">
    <link rel="icon" href="{{ asset('images/icons.png') }}" type="image/x-icon">
<link rel="canonical" href="https://budgetheaven.com/about">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
</style>
</head>
<body>
<x-nav/>
<section class="contact-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="images/contactus.jpg" alt="Company Image" class="img-fluid rounded shadow-sm" style="height:400px; width:100%;">
      </div>
      <div class="col-md-6">
        <h1 class="display-4 text-center mb-4">Contact Us</h1>
        <form action="#" method="POST" class="row justify-content-center">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="website" class="form-label">Website Name</label>
              <input type="text" class="form-control" id="website" name="website" required>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="form-group">
              <label for="message" class="form-label">Write your message</label>
              <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-5 mt-4">  <div class="embed-responsive embed-responsive-16by9">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14469.293474212946!2d67.0583741!3d24.9551104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1715587043123!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<br>
   <br>
<x-footer/>



</body>
</html>