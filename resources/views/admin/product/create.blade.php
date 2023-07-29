@extends('admin.layouts.layout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="col-sm-5">
                    <a href="{{ route('product.index') }}" class="btn btn-danger mb-2">
                        List Products</a>
                </div>

                <h4 class="page-title">Create product</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" id="form">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            <div id="er_name" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price">
            <div id="er_price" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" aria-label="With textarea" rows="5" name="desc" id="desc"></textarea>
            <div id="er_desc" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
            <div id="" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="img" id="img">
            <div id="er_img" class="form-text" style="color: red"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        // Khai báo regex cho từng trường
        const nameRegex = /^.{5,255}$/;
        const priceRegex = /^\d{4,12}$/;
        const descRegex = /^.{5,1000}$/;

        const form = document.getElementById('form');
        const nameInput = document.getElementById('name');
        const priceInput = document.getElementById('price');
        const descInput = document.getElementById('desc');
        const imgInput = document.getElementById('img');

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

            if (!priceInput.value) {
                document.getElementById('er_price').textContent = 'Không được để trống';
                return;
            }
            if (!priceRegex.test(priceInput.value)) {
                document.getElementById('er_price').textContent =
                    'Nhập 4-12 kí tự';
                return;
            }

            if (!descInput.value) {
                document.getElementById('er_desc').textContent = 'Không được để trống';
                return;
            }
            if (!descRegex.test(descInput.value)) {
                document.getElementById('er_desc').textContent =
                    'Nhập 5-1000 kí tự';
                return;
            }

            // Validate image file
            if (imgInput.files.length === 0) {
                document.getElementById('er_img').textContent = 'Hãy chọn ảnh';
                return;
            }

            // Submit the form if everything is valid
            form.submit();
        });
    </script>
@endsection
