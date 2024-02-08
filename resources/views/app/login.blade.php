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

                        <!--Email input-->
                        <div class="relative mb-5">
                            <input type="email"
                                class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:!border-[#767e89] focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                id="email" name="email" placeholder="name@example.com" />
                            <label for="email"
                                class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Email</label>
                        </div>

                        <!--Password input-->
                        <div class="relative mb-5 mt-10">
                            <input type="password"
                                class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:!border-[#767e89] focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary dark:border-neutral-600 dark:text-neutral-200 dark:focus:border-primary dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                                id="senha" name="senha" placeholder="Senha" />
                            <label for="senha"
                                class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Senha</label>
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
