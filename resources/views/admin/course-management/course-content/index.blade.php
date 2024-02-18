@extends('admin.master')

@section('title', 'Manage Course Contents')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>Manage Course Contents</h4>
                    <a href="{{ route('course-contents.create', ['course_id' => $_GET['course_id']]) }}" class="btn btn-success position-absolute me-4" style="right: 0">Create</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Course Name</td>
                                <td>title</td>
                                <td>type</td>
                                <td>File Info</td>
                                <td>Note</td>
                                <td>YT Link</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courseContents as $courseContent)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $courseContent->course->title}}</td>
                                    <td>{{ $courseContent->title}}</td>
                                    <td>{{ $courseContent->type}}</td>
                                    <td>
                                        @if(isset($courseContent->file_url))
                                            File Type: {{ $courseContent->file_type }} <br/>
                                            <a href="{{ asset($courseContent->file_url) }}" download="" class="mt-2 btn btn-sm btn-warning">Download File</a>
                                        @endif
                                    </td>
                                    <td>{!! str()->words($courseContent->note, 20, '...') !!}</td>
                                    <td>
                                        @if(!empty($courseContent->youtube_link))
                                            <iframe width="250" height="150" src="https://www.youtube.com/embed/{{ $courseContent->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        @endif
                                    </td>
                                    <td>{{ $courseContent->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('course-contents.edit', $courseContent->id) }}" class="btn btn-sm btn-secondary ms-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('course-contents.destroy', $courseContent->id) }}" id="deleteItem" method="post" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger ms-2 delete-item"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
