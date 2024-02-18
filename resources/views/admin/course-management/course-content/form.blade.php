@extends('admin.master')

@section('title', isset($courseContent) ? 'Edit' : 'Create'.' Course Content')

@section('body')
    <div class="row py-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>{{ isset($courseContent) ? 'Edit' : 'Create' }} Course Content</h4>
                    <a href="{{ route('course-contents.index', ['course_id' => $_GET['course_id']]) }}" class="btn btn-success position-absolute me-4" style="right: 0">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($courseContent) ? route('course-contents.update', $courseContent->id) : route('course-contents.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($courseContent))
                            @method('put')
                        @endif
                        <input type="hidden" name="course_id" class="form-control" value="{{ $_GET['course_id'] }}" />
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" value="{{ isset($courseContent) ? $courseContent->title : '' }}" placeholder="Set Title" />
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Content Type</label>
                            <div class="col-md-8 form-group">
                                <select name="type" class="select2" id="">
                                    <option value="note" {{ isset($courseContent) && $courseContent->type == 'note' ? 'selected' : '' }}>Note</option>
                                    <option value="file" {{ isset($courseContent) && $courseContent->type == 'file' ? 'selected' : '' }}>File</option>
                                    <option value="video" {{ isset($courseContent) && $courseContent->type == 'video' ? 'selected' : '' }}>Video</option>
                                </select>
                                @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">File</label>
                            <div class="col-md-8">
                                <div class="">
                                    <input type="file" name="file" class="form-control" />
                                    @if(isset($courseContent))
                                        <div class="mt-2">
                                            <a href="{{ asset($courseContent->file_url) }}" class="btn btn-sm btn-secondary" download="">Download Now</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Note</label>
                            <div class="col-md-8">
                                <div>
                                    <textarea name="note" id="summernote" class="form-control" cols="30" rows="10">{!! isset($courseContent) ? $courseContent->note : '' !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Youtube Video Id</label>
                            <div class="col-md-8">
                                <input type="text" name="youtube_link" class="form-control" value="{{ isset($courseContent) ? $courseContent->youtube_link : '' }}" placeholder="Youtube Video Id" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <div class="material-switch">
                                    <input id="someSwitchOptionSuccess" name="status" type="checkbox" {{ isset($courseContent) && $courseContent->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="{{ isset($courseContent) ? 'Update' : 'Create' }} Course Content" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
