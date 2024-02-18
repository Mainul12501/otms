<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('/') }}front/assets/img/logo/logo.png" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link  active" href="{{ route('home') }}" >Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu fade-up">
                                @foreach($courseCategories as $courseCategory)
                                    <li><a class="dropdown-item" href="{{ route('course-category', ['category_id' => $courseCategory->id, 'name' => $courseCategory->name]) }}">{{ $courseCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu fade-up">
                                @foreach($blogCategories as $blogCategory)
                                    <li><a class="dropdown-item" href="{{ route('blog-category') }}">{{ $blogCategory->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact-page') }}">Contact</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-nav-search">
                            <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="{{ route('show-cart-items') }}"><i class="far fa-shopping-cart"></i> <span id="totalProducts">{{ count(Cart::getContent()) }}</span> </a>
                        </div>
                        <div class="header-btn-area">
                            @if(auth()->check())
                                <a href="{{ route('dashboard') }}"  class="header-btn bg-success">Dashboard</a>
                                <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" class="header-btn bg-danger">Logout</a>
                                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="header-btn bg-primary">Sign In</a>
                                <a href="{{ route('register') }}" class="header-btn">Register</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>


<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>
