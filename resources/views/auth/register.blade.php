@extends('user.layouts.layout')
@section('main-content')
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- full name -->
            <div>
                <x-input-label for="full_name" :value="__('Họ và tên')" />
                <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')"
                    autofocus autocomplete="full_name" />
                <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
            </div>

            <!-- adddress -->
            <div>
                <x-input-label for="address" :value="__('Địa chỉ')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- phone -->
            <div>
                <x-input-label for="phone" :value="__('Số điện thoại')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- acc name -->
            <div>
                <x-input-label for="acc_name" :value="__('Tài khoản')" />
                <x-text-input id="acc_name" class="block mt-1 w-full" type="text" name="acc_name" :value="old('acc_name')"
                    autofocus autocomplete="acc_name" />
                <x-input-error :messages="$errors->get('acc_name')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Xác nhận mật khẩu')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Quên mật khẩu?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Đăng ký') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endsection
