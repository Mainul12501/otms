@extends('front.master')

@section('title', 'Course Details')

@section('body')

    <div class="site-breadcrumb justify-content-start text-start">
        <div class="hero-shape-area">
            <img class="hero-shape-1" src="{{ asset('/') }}front/assets/img/shape/shape-1.png" alt>
            <img class="hero-shape-2" src="{{ asset('/') }}front/assets/img/shape/shape-3.png" alt>
            <img class="hero-shape-3" src="{{ asset('/') }}front/assets/img/shape/shape-6.png" alt>
            <img class="hero-shape-4" src="{{ asset('/') }}front/assets/img/shape/shape-4.png" alt>
        </div>
        <div class="container">
            <div class="col-lg-6">
                <div class="course-single-header">
                    <span class="course-category course-category-1">{{ $course->courseCategory->name }}</span>
                    <h4 class="course-single-title">{{ $course->title }}</h4>
                    <p>{{ $course->short_description }}</p>
{{--                    <div class="course-single-rating">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                        <span class="course-single-rating-avg">4.5</span>--}}
{{--                        <span>(1.5k Reviews)</span>--}}
{{--                    </div>--}}
                    <div class="course-single-meta">
                        <div class="course-single-instructor">
                            <img src="{{ asset($course->user->profile_photo_path ?? 'admin/user.png') }}" alt="" style="height: 50px" />
                            <h6>{{ $course->user->name }}</h6>
                        </div>
                        <div class="course-single-update-date">
                            <h6>Last Updated: <span>{{ $course->updated_at->format('M d, Y') }}</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="course-single pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="course-single-wrapper">

                        <div class="video-area" style="background-image: url({{asset('front/assets/img/course/video.jpg')}});">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if(!empty($course->image))
                                        <div class="" >
                                            <img src="{{ asset($course->image) }}" alt="" style="height: 450px" class="img-fluid w-100" />
                                        </div>
                                    @else
                                        <div class="video-wrapper">
                                            <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="course-single-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="course-single-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Description</button>
                                </li>
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="course-single-tab2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="true">Curriculum</button>--}}
{{--                                </li>--}}
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="course-single-tab3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="true">Instructor</button>
                                </li>
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="course-single-tab4" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="true">Review</button>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="course-single-tab1">
                                    <div class="course-single-content">
                                        <div class="course-single-details">
                                            {!! $course->long_description !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="course-single-tab3">
                                    <div class="course-single-content">
                                        <div class="course-tab-instructor">
                                            <div class="course-tab-instructor-img">
                                                <img src="{{ asset($course->user->profile_photo_path ?? 'front/assets/img/instructor/02.jpg') }}" alt>
                                            </div>
                                            <div class="course-tab-instructor-content">
                                                <h5>{{ $course->user->name }}</h5>
{{--                                                <div class="course-tab-instructor-meta">--}}
{{--                                                    <div class="course-tab-instructor-rating">--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <i class="fas fa-star"></i>--}}
{{--                                                        <span>(4.5)</span>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="course-tab-instructor-course"><i class="fad fa-book-open"></i> 15 Courses</span>--}}
{{--                                                    <span class="course-tab-instructor-enrolled"><i class="fad fa-user-friends"></i> 1.5k Enrolled</span>--}}
{{--                                                </div>--}}
{{--                                                <p>--}}
{{--                                                    There are many variations of passages orem psum available but the majority have suffered alteration in some form, by injected humour.--}}
{{--                                                </p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="course-single-sidebar">
                        <div class="course-single-sidebar-wrapper">
                            <div class="course-single-price-wrapper">
                                <div class="course-single-price">
                                    <span>Tk. {{ $course->price }}</span>
                                </div>
{{--                                <span class="course-single-price-off">35% Off</span>--}}
                            </div>
                            @if($isCourseInCart == 'false')
{{--                            <form action="{{ route('add-to-cart', ['course_id' => $course->id]) }}" method="post">--}}
{{--                                @csrf--}}
                                <button type="button" class="theme-btn add-to-cart-btn change-text" data-id="{{ $course->id }}"> <span class="far fa-shopping-cart"></span> Add To
                                    Cart</button>
{{--                            </form>--}}
                            @else
                                <button type="button" class="theme-btn change-text" > <span class="far fa-shopping-cart"></span> Already In Cart</button>
                            @endif
                            <div class="course-single-more-info">
                                <ul>
                                    <li><i class="fad fa-user"></i> Instructor: <span>{{ $course->user->name }}</span></li>
{{--                                    <li><i class="fad fa-layer-group"></i> Level : <span>Expert</span></li>--}}
                                    <li><i class="fad fa-book"></i> Lectures : <span>{{ $course->total_class }} Lectures</span></li>
                                    <li><i class="fad fa-clock"></i> Duration: <span>{{ $course->total_duration }} Months</span></li>
                                    <li><i class="fad fa-user-friends"></i> Hours: <span>{{ $course->total_hours }} Hours</span></li>
                                    <li><i class="fad fa-globe"></i> Language: <span>English</span></li>
                                </ul>
                            </div>
                            <div class="course-single-include">
                                <h5>Course Includes</h5>
                                <p style="text-align: justify">{{ $course->short_description }}</p>
                            </div>
{{--                            <div class="course-single-share">--}}
{{--                                <h5>Social Share</h5>--}}
{{--                                <div class="course-single-share-link">--}}
{{--                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="course-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title mb-2">Related <span>Courses</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relatedCourses as $relatedCourse)
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="course-item">
                        <span class="course-tag course-tag-1">Beginer</span>
                        <div class="course-img">
                            <a href="#"><img src="{{ asset($relatedCourse->image ?? 'front/assets/img/course/01.jpg') }}" alt="" class="w-100" style="height: 246px" /></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-category course-category-1">{{ $relatedCourse->courseCategory->name }}</span>
{{--                                <div class="course-rate">--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <i class="fas fa-star"></i>--}}
{{--                                    <span>(40)</span>--}}
{{--                                </div>--}}
                            </div>
                            <a href="{{ route('course-details', ['course_id' => $relatedCourse->id, 'title' => str_replace(' ', '-', $relatedCourse->title)]) }}"><h4 class="course-title">{{ $relatedCourse->title }}</h4></a>
                            <div class="course-info">
                                <ul>
                                    <li class="course-lecture"><i class="fad fa-book-open"></i>{{ $relatedCourse->total_class }} Lectures</li>
                                    <li class="course-enrolled"><i class="fad fa-user-friends"></i>{{ $relatedCourse->total_duration }} Months</li>
                                    <li class="course-duration"><i class="fad fa-clock"></i>{{ $relatedCourse->total_hours }} Hours</li>
                                </ul>
                            </div>
                            <div class="course-bottom">
                                <a href="#">
                                    <div class="course-instructor">
                                        <img src="{{ asset($relatedCourse->user->profile_photo_path ?? 'front/assets/img/course/ins-1.jpg') }}" alt="" />
                                        <h6>{{ $relatedCourse->user->name }}</h6>
                                    </div>
                                </a>
                                <div class="course-price">
                                    <span>TK. {{ $relatedCourse->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).on('click', '.add-to-cart-btn', function () {
            var courseId = $(this).attr('data-id');
            $.ajax({
                url: "/add-to-cart/"+courseId,
                method: 'POST',
                success: function (response) {
                    alert(response.message);
                    $('#totalProducts').text(response.totalProducts);
                    $('.change-text').html('<span class="far fa-shopping-cart"></span> Already In Cart').removeClass('add-to-cart-btn');
                },

            });
        })
    </script>
@endpush
