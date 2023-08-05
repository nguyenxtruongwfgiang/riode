@extends('admin.layouts.app')

@section('title', 'Product')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><a href="{{ route('products.create') }}">Create New Product</a></h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Product</h4>

                        @if (session('message'))
                            <h6 class="headr-tile text-success">{{ session('message') }}</h6>
                        @endif

                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Price </th>
                                    <th> Image </th>
                                    <th> Sale </th>
                                    <th> Category </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td><img width="80px" src="{{ asset($product->image) }}" alt=""></td>
                                        <td>{{ $product->sale }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a class="btn btn-primary"
                                                    href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->
@endsection
