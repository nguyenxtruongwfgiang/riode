@extends('admin.layouts.app')

@section('title', 'Role')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Role</a></li>
                            <li class="breadcrumb-item active">Role List</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><a href="{{ route('admin.roles.create') }}">Create New Role</a></h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Role</h4>

                        @if (session('message'))
                            <h6 class="headr-tile text-success">{{ session('message') }}</h6>
                        @endif

                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Display Name </th>
                                    <th> Group </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->display_name }}</td>
                                        <td>{{ $role->group }}</td>
                                        <td>
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
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

@push('styles')
    @push('styles')
        <!-- DataTables -->
        <link href="{{ asset('be/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('be/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet') }}" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('be/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
    @endpush
@endpush

@push('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('be/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('be/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('be/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('be/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('be/assets/pages/datatables.init.js') }}"></script>

    <script>
        $().DataTable();
    </script>
@endpush
