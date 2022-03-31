@extends('layouts.backend_master')
@section('title', 'Admins')
@section('master_content')
    <div class="container">
        <div class="card">
            <h2 class="m-3">Admins</h2>
            <div class="card-body ">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->city }}</td>
                                <td>
                                    {{ $admin->status ? 'Active' : 'Inactive' }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.view', $admin->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    @if (auth('admin')->id() != $admin->id)
                                        <form action="{{ route('admin.delete', $admin->id) }}" class="d-inline"
                                            method="POST">

                                            @csrf
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @endif
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
