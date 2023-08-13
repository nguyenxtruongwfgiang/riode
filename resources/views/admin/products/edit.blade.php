@extends('admin.layouts.app')

@section('title', 'Update Product ' . $product->name)
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item active">Update Product</li>
                            </ol>
                        </div>
                        <h4 class="page-title"><a href="{{ route('admin.products.index') }}">Back To Product List</a></h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Update Product</h4>
                            @if (session('message'))
                                <h6 class="headr-tile text-danger">{{ session('message') }}</h6>
                            @endif

                            <form class="form-group" action="{{ route('admin.products.update', $product) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-0">
                                    <label class="mb-2 pb-1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Product Name"
                                        value="{{ old('name') ?? $product->name }}" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Price</label>
                                    <div>
                                        <input type="text" name="price" id="" class="form-control"
                                            value="{{ old('price') ?? $product->price }}">
                                    </div>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Sale</label>
                                    <div>
                                        <input type="text" name="sale" id="" class="form-control"
                                            value="{{ old('sale') ?? $product->sale }}">
                                    </div>
                                    @error('sale')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Category</label>
                                    <div>
                                        <select name="category_id" id="" class="form-select form-control">
                                            <option>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Quantity</label>
                                    <div>
                                        <input type="text" class="form-control" name="quantity"
                                            value="{{ old('quantity') ?? $product->quantity }}">
                                    </div>
                                    @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Color</label>
                                    <div class="row">
                                        @foreach ($colors as $color)
                                            <div class="col-6">
                                                <div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="colors[]"
                                                            {{ $product->colors->contains('id', $color->id) ? 'checked' : '' }}
                                                            value="{{ $color->id }}">
                                                        <label for="custom-control-label">{{ $color->display_name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @error('color_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label class="my-2 py-1">Image</label>
                                    <div>
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                                    <img width="60px" src="{{ asset($product->image) }}" alt="">
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
