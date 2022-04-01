@extends('layouts.backend_master')
@section('title', 'Products')
@section('master_content')
    <div class="container">
        <div class="card">
            <h2 class="m-3 d-inline">Products</h2>
            <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-success">Back</a>
            <div class="card-body ">
                <form action="{{ route('admin.product.store') }}" method="POST">
                    @csrf
                    <div class="my-2">
                        <label for="">Name </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                    </div>
                    @php
                        $ed_counter = 0;
                        $ed_counter++;
                    @endphp
                    <div class="my-2">
                        <label for="">Add Varient </label>
                        <table class="table table-bordered" id="dynamic_degree">
                            <input type="hidden" id="counter" value="{{ $ed_counter }}">
                            <tr>
                                <td>
                                    <input type="text" class="form-control form-control-sm key_list" placeholder="Key"
                                        id="key" name="attribute[{{ $ed_counter }}][key]">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm value_list" placeholder="Value"
                                        id="value" name="attribute[{{ $ed_counter }}][value]">
                                </td>
                                <td>
                                    <button type="button" id="degree_add" class="btn btn-success"> <i
                                            class="fa fa-plus-circle"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="my-2">
                        <button class="btn btn-success btn-sm">Add New Product</button>
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

        //append dynamic degree
        let counter = $('#counter').val();
        $('#degree_add').click(function() {
            var key = $('#key').val();
            var value = $('#value').val();
            key = '';
            value = '';
            counter++;
            var html = '<tr class="dynamic-added" id="row' + counter + '">';
            html +=
                '<td><input type="text" class="form-control form-control-sm key_list" placeholder="Key" id="key" name="attribute[' +
                counter + '][key]" value="' + key + '"></td>';
            html +=
                '<td><input type="text" class="form-control form-control-sm value_list" placeholder="Value" id="value" name="attribute[' +
                counter + '][value]" value="' + value + '"></td>';
            html += '<td><button type="button" name="remove" id="' + counter +
                '" class="btn btn-danger fa fa-window-close btn_remove_degree"></button></td></tr>';

            $('#dynamic_degree').append(html);
        });

        //remove dynamic degree row
        $('body').on('click', '.btn_remove_degree', function() {
            var id = $(this).attr('id');
            $('#row' + id).remove();
        });
    </script>
@endpush
