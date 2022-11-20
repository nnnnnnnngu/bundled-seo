<x-guest-layout>
    <div class="min-h-screen bg bg-gray-200">
        <section class="h-full gradient-form  min-1h-screen max-w-7xl mx-auto">
            <div class="container py-12 px-6 h-full mx-auto">
                <div class="h-full g-6 text-gray-800">
                    <div class=" ">
                        <div class="block bg-white shadow-lg rounded-lg">
                            <div class=" ">
                                <div class="  px-4 md:px-0">
                                    <div class="md:p-12 md:mx-6">
                                        <div class="text-center">

                                            <x-jet-authentication-card-logo/>

                                        </div>
                                        <p class="mb-4 capitalize">Create new account</p>
                                        <x-jet-validation-errors class="mb-4"/>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="sm:grid grid-cols-2 gap-4">
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        name="first_name"
                                                        placeholder="First Name"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        name="last_name"
                                                        placeholder="Last Name"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        type="email"
                                                        name="email"
                                                        placeholder="email"
                                                    />
                                                </div>


                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        type="password"
                                                        name="password"
                                                        placeholder="password"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        type="password"
                                                        name="password_confirmation"
                                                        placeholder="password_confirmation"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        name="phone"
                                                        placeholder="phone"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        name="address"
                                                        placeholder="address"
                                                    />
                                                </div>
                                                <div class="mb-4 sm:mb-0">
                                                    <x-jet-input
                                                        name="country"
                                                        placeholder="country"
                                                    />
                                                </div>

                                            </div>

                                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="mt-4">
                                                    <x-jet-label for="terms">
                                                        <div class="flex items-center">
                                                            <x-jet-checkbox name="terms" id="terms" required/>

                                                            <div class="ml-2">
                                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                ]) !!}
                                                            </div>
                                                        </div>
                                                    </x-jet-label>
                                                </div>
                                            @endif

                                            <div class="text-center pt-1 mb-12 pb-1">
                                                <button
                                                    class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                    style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                                                    Register
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-between pb-6">
                                                <p class="mb-0 mr-2">Have an account?</p>
                                                <a href="{{ route('login') }}"
                                                   type="button"
                                                   class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                                   data-mdb-ripple="true"
                                                   data-mdb-ripple-color="light"
                                                >
                                                    Login
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
</x-guest-layout>
