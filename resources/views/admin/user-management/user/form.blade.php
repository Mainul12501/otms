@extends('admin.master')

@section('title', isset($user) ? 'Edit' : 'Create'.' User')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>{{ isset($user) ? 'Edit' : 'Create' }} User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($user))
                            @method('put')
                        @endif
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ isset($user) ? $user->name : '' }}" placeholder="User Name" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" value="{{ isset($user) ? $user->email : '' }}" placeholder="User email" />
                            </div>
                        </div>
{{--                        @if(!isset($user))--}}
                            <div class="row mt-4">
                                <label for="" class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-control" value="" placeholder="User Password" />
                                </div>
                            </div>
{{--                        @endif--}}
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Role</label>
                            <div class="col-md-8 form-group">
                                <select name="role" class="form-control select2" data-placeholder="Select Role" id="">
                                    <option value="0" {{ isset($user) && $user->role == 0 ? 'selected' : '' }}>Student</option>
                                    <option value="1" {{ isset($user) && $user->role == 1 ? 'selected' : '' }}>Trainer</option>
                                    <option value="2" {{ isset($user) && $user->role == 2 ? 'selected' : '' }}>Stuff</option>
                                    <option value="3" {{ isset($user) && $user->role == 3 ? 'selected' : '' }}>Admin</option>
{{--                                    <option value="4">Super Admin</option>--}}
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4">Profile Image</label>
                            <div class="col-md-8">
                                <input type="file" name="profile_photo_path" class="form-control" accept="image/*" />
                                @if(isset($user))
                                    <div class="mt-2">
                                        <img src="{{ asset($user->profile_photo_path) }}" alt="" style="height: 80px">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="{{ isset($user) ? 'Update' : 'Create' }} User" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
