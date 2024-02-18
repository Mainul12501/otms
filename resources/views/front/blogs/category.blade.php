@extends('front.master')

@section('title' , 'Blogs')

@section('body')
    <div class="site-breadcrumb">
        <div class="hero-shape-area">
            <img class="hero-shape-1" src="{{ asset('/') }}front/assets/img/shape/shape-1.png" alt>
            <img class="hero-shape-2" src="{{ asset('/') }}front/assets/img/shape/shape-3.png" alt>
            <img class="hero-shape-3" src="{{ asset('/') }}front/assets/img/shape/shape-6.png" alt>
            <img class="hero-shape-4" src="{{ asset('/') }}front/assets/img/shape/shape-4.png" alt>
        </div>
        <div class="container">
            <h2 class="breadcrumb-title">Our Blog</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>


    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="{{ asset('/') }}front/assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> May 11, 2023</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{ route('blog-details') }}">There are many variations of passages orem psum available</a>
                            </h4>
                            <a class="blog-btn" href="#">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-area">
                <div aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
