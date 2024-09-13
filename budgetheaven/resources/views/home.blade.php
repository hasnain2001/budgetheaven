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

    <!-- Preload CSS files -->
<link rel="preload" href="{{ asset('cssfile/slider.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('cssfile/slider.css') }}"></noscript>

<link rel="preload" href="{{ asset('cssfile/home.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('cssfile/home.css') }}"></noscript>



    <!---  verification for website!--->

    <meta name="verify-admitad" content="1f910f4f6f" />

    <meta name="google-site-verification" content="oLMFpeH6luNynlp25Fb-K98OtDWAziqmt0ugNcfDY64" />
  </head>
  <body>
      <x-nav/>

@yield('main-content')


    <br>

    <x-footer/>




<script src="{{ asset('js/home.js') }}"></script>

  </body>
</html>
