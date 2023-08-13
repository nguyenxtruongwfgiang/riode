@extends('admin.layouts.app')

@section('title', 'Create User')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                                <li class="breadcrumb-item active">Create New User</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('admin.users.index') }}">Back To User List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Add New User</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="form-group" action="{{ route('admin.users.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-0">
                                    <label class="mb-2 pb-1">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Type something" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Email</label>
                                    <div>
                                        <input name="email" type="text" id="pass2" class="form-control"
                                            placeholder="Email" />
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Password</label>
                                    <div>
                                        <input name="password" type="password" id="pass2" class="form-control"
                                            placeholder="Password" />
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Role</label>
                                    <div>
                                        @foreach ($roles as $groupName => $role)
                                            <div class="col-6">
                                                <label class="my-2 py-1">{{ $groupName }}</label>
                                                <div>
                                                    @foreach ($role as $item)
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                name="role_ids[]" value="{{ $item->id }}">
                                                            <label
                                                                for="custom-control-label">{{ $item->display_name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Add New
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->
@endsection
