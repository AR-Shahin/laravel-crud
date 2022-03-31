@extends('layouts.backend_master')
@section('title', 'Admins')
@section('master_content')
    <div class="container">
        <div class="card">
            <h2 class="m-3">Admins Edit</h2> <a href="{{ route('admin.index') }}"> Back</a>
            <div class="card-body ">
                <form action="{{ route('admin.update', $admin->id) }}" method="post">

                    @csrf
                    <div class="input-group mb-3">
                        <label for="" class="mx-3">Name : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name"
                            value="{{ $admin->name }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-3">
                        <label for="" class="mx-3">City : </label>
                        <input type="text" class="form-control" placeholder="Enter Your City" name="city"
                            value="{{ $admin->city }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                        <label for="" class="mx-3">Country : </label>
                        <input type="text" class="form-control" placeholder="Enter Your Country" name="country"
                            value="{{ $admin->country }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="my-2">
                        <label for="" class="mx-3">Status : </label>
                        Active
                        <input type="radio" name="status" value="1" @if ($admin->status == 1) checked @endif>
                        Inactive
                        <input type="radio" name="status" value=" 0" @if ($admin->status == 0) checked @endif>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>
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
