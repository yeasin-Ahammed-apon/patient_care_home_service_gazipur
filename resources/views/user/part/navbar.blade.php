<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://nochinta.xyz/static/media/no-chinta-logo.449037c5526d120cbd3959625cf9e7a9.svg"
                width="200" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('our_services') }}">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
                </li>
                {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}

            </ul>
        </div>
    </div>
</nav>
