@extends('admin.layouts.layout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Categories</h4>

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
            <a href="{{ route('category.create') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add
                category</a>
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
                    <th class="all">Name</th>
                    <th style="width: 85px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                            </div>
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>

                        <td class="table-action">
                            <form action="{{ route('category.destroy', $category->id) }}" method="post" class="d-flex">
                                <a href="{{ route('category.edit', $category->id) }}" class="action-icon"> <i
                                        class="mdi mdi-square-edit-outline"></i></a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-icon btn">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
