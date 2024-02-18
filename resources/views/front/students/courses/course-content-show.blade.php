@extends('front.students.student-master')


@section('title')
    Course content show
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            @if($courseContent->type == 'note')

                <div>
                    {!! $courseContent->note !!}
                </div>

            @elseif($courseContent->type == 'video')
                @if(!empty($courseContent->youtube_link))
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/{{ $courseContent->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endif
            @endif
        </div>
    </div>
@endsection
