@extends('admin.master')

@section('title', 'Manage Courses')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>Manage Courses</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Category Name</td>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Trainer</td>
                                <td>S.Description</td>
                                <td>L.Description</td>
                                <td>Info</td>
                                <td>Image</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->courseCategory->name }}</td>
                                    <td><a href="{{ route('course-contents.index', ['course_id' => $course->id]) }}" class="nav-link text-dark">{{ $course->title }}</a></td>
                                    <td>{{ $course->price }}</td>
                                    <td>{{ $course->user->name }}</td>
                                    <td>{{ $course->short_description }}</td>
                                    <td>{!! $course->long_description !!}</td>
                                    <td>
                                        <p>Starting Date: {{ $course->starting_date }}</p>
                                        <p>Total Duration: {{ $course->total_duration }}</p>
                                        <p>Total Class: {{ $course->total_class }}</p>
                                        <p>Total Hours: {{ $course->total_hours }}</p>
                                    </td>
                                    <td><img src="{{ asset($course->image) }}" alt="" style="height: 70px"></td>
                                    <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-secondary ms-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('courses.destroy', $course->id) }}" id="deleteItem" method="post" >
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
