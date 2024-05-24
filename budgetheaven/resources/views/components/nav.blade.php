

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/images/budgetheaven.png" style="width: 150px; height: auto;">
        </a>
        <!-- Move the search bar outside of the collapsible area -->
      
          <form action="{{ route('search') }}" method="GET"  class="d-flex col-md-6 order-lg-last" role="search" style="max-width: 600px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <!-- End of search bar -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn " aria-current="page" href="/"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="btn " aria-current="page" href="{{ route('stores') }}"><i class="fas fa-store"></i> Stores</a>
        </li>
        <li class="nav-item">
          <a class="btn" aria-current="page" href="{{ route('categories') }}"><i class="fas fa-list"></i> Categories</a>
        </li>
        <li class="nav-item">
          <a class="btn " aria-current="page" href="{{ route('blog') }}"><i class="fas fa-blog"></i> Blog</a>
        </li>
        <li class="nav-item">
          <a class="btn " aria-current="page" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact Us</a>
        </li>
      </ul>
        </div>
    </div>
</nav>

  

