<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}" x-data="{accept: false}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email | Username') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="identity" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>
            <!-- Modal and Checkbox -->
            <div x-data="{ showModal : false }">
                <div class="block mt-4">
                    <label for="terms" class="flex items-center">
                        <x-jet-checkbox id="terms" x-model="accept" name="terms" @click="showModal = !showModal"
                            required />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Terms and Condition') }}</span>
                    </label>
                </div>
                <!-- Modal Background -->
                <div x-show="showModal"
                    class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                    x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <!-- Modal -->
                    <div x-show="showModal" class="bg-white rounded-xl shadow-2xl sm:w-10/12 mx-10"
                        @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease duration-100 transform"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                        <!-- modal header -->
                        <div class="border-b px-4 py-2 flex justify-end items-center bg-[#1f3a56]">
                            <button @click.prevent="showModal = !showModal" class="text-white close-modal"> <svg
                                    class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18">
                                    <path
                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                                </svg></button>
                        </div>
                        <!-- modal Body -->
                        <div class="px-4 p-6">

                            <!-- Title -->
                            <span class="font-bold block text-2xl mb-3">🍺 Beer, beer, beer </span>
                            <!-- Some beer 🍺 -->
                            <p class="mb-5">beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer,
                                beer...
                            </p>
                            <p>beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer,
                                beer,
                                beer... beer, beer, beer... beer, beer, beer...</p>
                        </div>
                        <!-- Buttons -->
                        <div class="text-right space-x-5 mt-5 mb-2 mr-2">
                            <button @click.prevent="showModal = !showModal"
                                class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                <div class="block">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <x-jet-button class="ml-4" x-bind:disabled="!accept">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
