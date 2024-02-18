@extends('front.students.student-master')


@section('title')
    My coruses
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">My Courses</h2>
            <div class="row mt-3">
                @foreach($orders as $order)
                    @foreach($order->orderDetails as $orderDetail)
                        <div class="col-md-4">
                            <a href="{{ route('show-course-contents', ['courseId' => $orderDetail->course->id ]) }}" class="w-100">
                                <div class="card rounded-0">
                                    <img src="{{ asset($orderDetail->course->image ?? 'front/assets/img/blog/02.jpg') }}" class="card-img-top rounded-0" alt="course-image" style="height: 200px" />
                                    <div class="card-body">
                                        <h4>{{ $orderDetail->course->title }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
