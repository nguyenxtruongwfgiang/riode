@extends('admin.layouts.app')

@section('title', 'Create Role')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Role</a></li>
                                <li class="breadcrumb-item active">Create New Role</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('roles.index') }}">Back To Role List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Add New Role</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="" action="{{ route('roles.store') }}" method="POST">
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
                                    <label class="my-2 py-1">Display Name</label>
                                    <div>
                                        <input name="display_name" type="text" id="pass2" class="form-control"
                                            placeholder="Display Name" />
                                    </div>
                                    @error('display_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Group</label>
                                    <select name="group" id="" class="form-select form-control">
                                        <option value="">Select Group</option>
                                        <option value="system">System</option>
                                        <option value="user">User</option>
                                    </select>
                                    @error('group')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Permission</label>
                                    <div class="row">
                                        @foreach ($permissions as $groupName => $permission)
                                            <div class="col-6">
                                                <label class="my-2 py-1">{{ $groupName }}</label>
                                                <div>
                                                    @foreach ($permission as $item)
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                name="permission_ids[]" value="{{ $item->id }}">
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
