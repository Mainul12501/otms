@extends('admin.master')

@section('title', 'Manage Users')

@section('body')
    <div class="row py-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>Manage Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge badge-success-light">{{ $user->role == 0 ? 'Student' : '' }}</span>
                                        <span class="badge badge-success-light">{{ $user->role == 1 ? 'Trainer' : '' }}</span>
                                        <span class="badge badge-success-light">{{ $user->role == 2 ? 'Stuff' : '' }}</span>
                                        <span class="badge badge-success-light">{{ $user->role == 3 ? 'Admin' : '' }}</span>
                                        <span class="badge badge-success-light">{{ $user->role == 4 ? 'Super Admin' : '' }}</span>
                                    </td>
                                    <td><img src="{{ asset($user->profile_photo_path) }}" alt="" style="height: 70px"></td>
                                    <td class="d-flex">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-secondary ms-2"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" id="deleteItem" method="post" >
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
