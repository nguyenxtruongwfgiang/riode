@extends('admin.layouts.app')

@section('title', 'Updated Color' . $color->display_name)
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Color</a></li>
                                <li class="breadcrumb-item active">Update Color</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('admin.users.index') }}">Back To Color List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Update Color</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="form-group" action="{{ route('admin.colors.update', $color) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-0">
                                    <label class="mb-2 pb-1">Display Name</label>
                                    <input type="text" name="display_name" class="form-control"
                                        placeholder="Type something" value="{{ $color->display_name }}" />
                                    @error('display_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Value</label>
                                    <div>
                                        <input type="color" name="value" id="" value="{{ $color->value }}">
                                    </div>
                                    @error('value')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Update
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
