<x-guest-layout>


    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif



        <div class="bg bg-gray-200 h-screen">
            <section class="h-full gradient-form  md:h-screen max-w-7xl mx-auto">
                <div class="container py-12 px-6 h-full mx-auto">
                    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                        <div class="xl:w-10/12">
                            <div class="block bg-white shadow-lg rounded-lg">
                                <div class="lg:flex lg:flex-wrap g-0">
                                    <div class="lg:w-6/12 px-4 md:px-0">
                                        <div class="md:p-12 md:mx-6">
                                            <div class="text-center">
                                                <x-jet-authentication-card-logo/>

                                            </div>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <x-jet-validation-errors class="mb-4"/>

                                                <p class="mb-4">Please login to your account</p>
                                                <div class="mb-4">
                                                    <x-jet-input name="email" placeholder="email"/>
                                                </div>
                                                <div class="mb-4">
                                                    <x-jet-input type="password"  name="password" placeholder="password"/>

                                                    <x-jet-input-error for="password"/>

                                                </div>
                                                <div class="text-center pt-1 mb-12 pb-1">
                                                    <button
                                                        class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                        data-mdb-ripple="true"
                                                        data-mdb-ripple-color="light"
                                                        style="
                            background: linear-gradient(
                              to right,
                              #ee7724,
                              #d8363a,
                              #dd3675,
                              #b44593
                            );
                          "
                                                    >
                                                        Log in
                                                    </button>
                                                    <a class="text-gray-500" href="#!">Forgot password?</a>
                                                </div>
                                                <div class="flex items-center justify-between pb-6">
                                                    <p class="mb-0 mr-2">Don't have an account?</p>
                                                    <a href="{{route('register')}}"
                                                       class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                                       data-mdb-ripple="true"
                                                       data-mdb-ripple-color="light"
                                                    >
                                                        Register
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</x-guest-layout>
