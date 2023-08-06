@extends('admin.layouts.layout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Bills</h4>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row mb-2">
        <div class="col-sm-5">
            {{-- <a href="{{ route('bill.create') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add
                bill</a> --}}
        </div>
        <div class="col-sm-7">
            <div class="text-sm-end">
                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                <button type="button" class="btn btn-light mb-2">Export</button>
            </div>
        </div><!-- end col-->

    </div>

    <div class="table-responsive">
        <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
            <thead class="table-light">
                <tr>
                    <th class="all" style="width: 20px;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                        </div>
                    </th>
                    <th class="all">User id</th>
                    <th class="all">Full name</th>
                    <th class="all">Address</th>
                    <th class="all">Email</th>
                    <th class="all">Phone</th>
                    <th class="all">Name product</th>
                    <th class="all">Total</th>
                    <th class="all">Payment methods</th>
                    <th style="width: 85px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bills as $bill)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                            </div>
                        </td>
                        <td>
                            {{ $bill->user_id }}
                        </td>
                        <td>
                            {{ $bill->full_name }}
                        </td>
                        <td>
                            {{ $bill->address }}
                        </td>
                        <td>
                            {{ $bill->email }}
                        </td>
                        <td>
                            {{ $bill->phone }}
                        </td>
                        <td>
                            @php
                                $list_cart_array = json_decode($bill->list_cart, true);
                                foreach ($list_cart_array as $a) {
                                    $pro_in_cart = json_decode($a, true);
                                    echo $pro_in_cart['name'] . '<br>';
                                }
                            @endphp
                        </td>
                        <td>
                            {{ $bill->total }}
                        </td>
                        @if ($bill->pttt == 0)
                            <td>Thanh toán khi nhận hàng</td>
                        @endif

                        {{-- <td class="table-action">
                            <form action="{{ route('bill.destroy', $bill->id) }}" method="post" class="d-flex">
                                <a href="{{ route('bill.edit', $bill->id) }}" class="action-icon"> <i
                                        class="mdi mdi-square-edit-outline"></i></a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-icon btn">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
