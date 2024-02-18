@extends('front.students.student-master')


@section('title')
    Course content
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{ $course->title }} contents</h2>
            <div class="row mt-3">
                @foreach($courseContents as $courseContent)
                    <div class="col-md-6 position-relative mt-3">
                        <a
                            @if($courseContent->type == 'file')
                            href="{{ asset($courseContent->file_url) }}" download=""
                            @else
                                href="{{ route('course-content-show', ['courseContentId' => $courseContent->id]) }}"
                            @endif
                            class="w-100">
                            <div class="card rounded-0">
                                <img src="{{ asset('front/assets/img/blog/02.jpg') }}" class="card-img-top rounded-0" alt="course-image" style="height: 200px" />
                                <div class="card-body">
                                    <h4>{{ $courseContent->title }}</h4>
                                </div>
                            </div>
                        </a>
                        @if($courseContent->type == 'file')
                            <p style="position: absolute; top: 5px; right: 15px" class="badge badge-sm bg-success rounded-0">download</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
