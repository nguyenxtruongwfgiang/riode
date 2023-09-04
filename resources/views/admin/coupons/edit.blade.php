@extends('admin.layouts.app')

@section('title', 'Update Coupon' . $coupon->name)
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Coupon</a></li>
                                <li class="breadcrumb-item active">Update Coupon</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('admin.coupons.index') }}">Back To Coupon List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Update Coupon</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="form-group" action="{{ route('admin.coupons.update', $coupon) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-0">
                                    <label for="coupon_name" class="mb-2 pb-1">Name</label>
                                    <input id="coupon_name" type="text" name="name" class="form-control"
                                        placeholder="Please enter coupon name" value="{{ $coupon->name }}" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Type</label>
                                    <div>
                                        <select name="type" id="" class="form-control">
                                            <option value="">Select Type</option>
                                            <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                                            <option value="percent" {{ $coupon->type == 'percent' ? 'selected' : '' }}>Percent</option>
                                        </select>
                                    </div>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Value</label>
                                    <input type="text" name="value" id="" class="form-control"
                                        placeholder="Enter value" value="{{ $coupon->value }}">
                                    @error('value')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <h6 class="sub-title my-3">Expery Date</h6>
                                    <div>
                                        <div>
                                            <input class="form-control" name="expery_date" type="datetime-local"
                                                id="example-datetime-local-input" value="{{ $coupon->expery_date }}">
                                        </div>
                                    </div>
                                    @error('expery_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- input-group -->

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

@push('styles')
    <link href="{{ asset('be/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
@endpush

@push('scripts')

    <script src="{{ asset('be/assets/js/inputFormater.js') }}"></script>
@endpush
