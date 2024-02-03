@extends('layouts.guest')

@section('main-content')
    <div class="bg-gray-100 h-screen w-full">

        <div class="flex justify-center items-center h-screen md:w-2/3 mx-auto">
            <div class="md:block md:w-4/6 flex justify-center items-center">
                <img src="{{ asset('assets/images/login-page-img.webp') }}" alt="Login image"
                    class="object-cover w-full h-full">
            </div>
            <div class="lg:p-18 md:p-8 sm:20 p-8 ww-full md:w-2/5 xmx-auto">
                <div class="max-w-xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8">
                    <div class="block mb-5">
                        <img src="{{ asset('assets/images/logo-color-300.png') }}" alt="Login image"
                            class="object-cover w-full h-full">
                    </div>
                    <form action="{{ route('app-login') }}" method="POST" enctype="multipart/form-data">
                        <x-validation-errors class="mb-4" />

                        @csrf

                        <!-- Username Input -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-600">Email</label>
                            <input type="text" id="email" name="email"
                                class="w-full border border-gray-300 rounded-md py-4 px-3 focus:outline-none focus:border-blue-500"
                                autocomplete="off" placeholder="email">
                        </div>
                        <!-- Password Input -->
                        <div class="mb-4">
                            <label for="senha" class="block text-gray-600">Senha</label>
                            <input type="password" id="senha" name="senha"
                                class="w-full border border-gray-300 rounded-md py-4 px-3 focus:outline-none focus:border-blue-500"
                                autocomplete="off" placeholder="senha">
                        </div>
                        <!-- Forgot Password Link -->
                        <div class="flex justify-end mb-6 text-blue-500">
                            <a href="#" class="hover:underline text-[#747c87]">Esqueci minha senha</a>
                        </div>
                        <!-- Login Button -->
                        <button type="submit"
                            class=" hover:bg-blue-400 text-[#60a5fa] font-semibold rounded-sm p-4 w-full xoutline border-[1px] border-[#60a5fa] hover:text-white">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
