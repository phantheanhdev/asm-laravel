@extends('admin.layouts.layout')
@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="col-sm-5">
                    <a href="{{ route('user.index') }}" class="btn btn-danger mb-2">
                        List users</a>
                </div>

                <h4 class="page-title">Create user</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data" id="form">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" name="full_name" id="full_name">
            <div id="er_full_name" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Acc name</label>
            <input type="text" class="form-control" name="acc_name" id="acc_name">
            <div id="er_acc_name" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="pass">
            <div id="er_pass" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address">
            <div id="er_address" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <div id="er_email" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
            <div id="er_phone" class="form-text" style="color: red"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select" aria-label="Default select example" name="role">
                <option value="0">Admin</option>
                <option value="1" selected>Khách hàng</option>
            </select>
            <div id="" class="form-text" style="color: red"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    

    <script>
        const form = document.getElementById('form');
        const fullNameInput = document.getElementById('full_name');
        const accNameInput = document.getElementById('acc_name');
        const passInput = document.getElementById('pass');
        const addressInput = document.getElementById('address');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Reset previous error messages
            const errorElements = document.querySelectorAll('.form-text');
            errorElements.forEach((element) => {
                element.textContent = '';
            });

            // Validate Full Name
            const fullNameRegex = /^.{5,100}$/;
            if (!fullNameInput.value) {
                document.getElementById('er_full_name').textContent = 'Không được để trống';
            } else if (!fullNameRegex.test(fullNameInput.value)) {
                document.getElementById('er_full_name').textContent =
                    '5-100 ký tự.';
            }

            // Validate Acc Name
            const accNameRegex = /^[a-zA-Z0-9]{4,50}$/;
            if (!accNameInput.value) {
                document.getElementById('er_acc_name').textContent = 'Không được để trống';
            } else if (!accNameRegex.test(accNameInput.value)) {
                document.getElementById('er_acc_name').textContent =
                    'Viết liền không dấu, 4-50 kí tự';
            }

            // Validate Pass
            const passRegex = /^[a-zA-Z0-9]{5,100}$/;
            if (!passInput.value) {
                document.getElementById('er_pass').textContent = 'Không được để trống';
            } else if (!passRegex.test(passInput.value)) {
                document.getElementById('er_pass').textContent =
                    'Viết liền không dấu, 5-100 kí tự';
            }

            // Validate Address
            const addressRegex = /^.{10,500}$/;
            if (!addressInput.value) {
                document.getElementById('er_address').textContent = 'Không được để trống';
            } else if (!addressRegex.test(addressInput.value)) {
                document.getElementById('er_address').textContent =
                    '10-500 kí tự';
            }

            // Validate Email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value) {
                document.getElementById('er_email').textContent = 'Không được để trống';
            } else if (!emailRegex.test(emailInput.value)) {
                document.getElementById('er_email').textContent = 'Hãy nhập đúng email';
            }

            // Validate Phone
            const phoneRegex = /^(0[3|5|7|8|9])+([0-9]{8})\b$/;
            if (!phoneInput.value) {
                document.getElementById('er_phone').textContent = 'Không được để trống';
            } else if (!phoneRegex.test(phoneInput.value)) {
                document.getElementById('er_phone').textContent = 'Hãy nhập đúng số điện thoại';
            }

            // Submit the form if everything is valid
            if (
                fullNameInput.value &&
                fullNameRegex.test(fullNameInput.value) &&
                accNameInput.value &&
                accNameRegex.test(accNameInput.value) &&
                passInput.value &&
                passRegex.test(passInput.value) &&
                addressInput.value &&
                addressRegex.test(addressInput.value) &&
                emailInput.value &&
                emailRegex.test(emailInput.value) &&
                phoneInput.value &&
                phoneRegex.test(phoneInput.value)
            ) {
                form.submit();
            }
        });
    </script>
@endsection
