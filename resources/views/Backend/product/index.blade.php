@extends('layouts.backend_master')
@section('title', 'products')
@section('master_content')
    <div class="container">
        <div class="card">
            <h2 class="m-3 d-inline">Products</h2>
            <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-success">Create</a>
            <div class="card-body ">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->name }}</td>

                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                        class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('admin.product.delete', $product->id) }}" class="d-inline"
                                        method="POST">

                                        @csrf
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
@endpush
@push('script')
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#table_id').DataTable();
    </script>
@endpush
