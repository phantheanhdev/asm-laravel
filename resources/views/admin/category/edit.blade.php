@extends('admin.layouts.layout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="col-sm-5">
                    <a href="{{ route('category.index') }}" class="btn btn-danger mb-2">
                        List categories</a>
                </div>

                <h4 class="page-title">Edit category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data" id="form">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            <div id="er_name" class="form-text" style="color: red"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        // Khai báo regex cho từng trường
        const nameRegex = /^.{5,255}$/;

        const form = document.getElementById('form');
        const nameInput = document.getElementById('name');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Reset previous error messages
            const errorElements = document.querySelectorAll('.form-text');
            errorElements.forEach((element) => {
                element.textContent = '';
            });

            // Validate each input field
            if (!nameInput.value) {
                document.getElementById('er_name').textContent = 'Không được để trống';
                return;
            }
            if (!nameRegex.test(nameInput.value)) {
                document.getElementById('er_name').textContent = 'Nhập 5-255 kí tự';
                return;
            }

            // Submit the form if everything is valid
            form.submit();
        });
    </script>

@endsection
