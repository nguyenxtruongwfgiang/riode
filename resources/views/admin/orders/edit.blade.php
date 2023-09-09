@extends('admin.layouts.app')

@section('title', 'Update Order Status')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Order</a></li>
                                <li class="breadcrumb-item active">Update Order Status</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('admin.orders.index') }}">Back To Order List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Order</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="form-group" action="{{ route('admin.orders.update', $order) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-0">
                                    <label class="mb-2 pb-1">Order Number</label>
                                    <span>{{ $order->id }}</span>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Customer</label>
                                    <span>{{ $order->user->name }}</span>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Order Item</label><br>
                                    @foreach ($order->orderItems as $orderItem)
                                        <a target="_blank"
                                            href="{{ route('products.detail', $orderItem->product) }}">{{ $orderItem->product->name }}<span>{{ $orderItem->color->display_name . ' ' . $orderItem->storage->name . ' x ' . $orderItem->quantity }}</span></a><br>
                                    @endforeach
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Total Amount</label>
                                    <span>{{ $order->total_amount }}</span>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Payment Method</label>
                                    <span>{{ $order->payment_method_name }}</span>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Payment Status</label>
                                    <span>{{ $order->payment_status }}</span>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Order Status</label>
                                    <select class="form-control" name="status" id="">
                                        <option value="order_placed"
                                            {{ $order->status == 'order_placed' ? 'selected' : '' }}>Order Placed</option>
                                        <option value="process" {{ $order->status == 'process' ? 'selected' : '' }}>Process
                                        </option>
                                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>
                                            Delivered</option>
                                        <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>
                                            Canceled</option>
                                    </select>

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
