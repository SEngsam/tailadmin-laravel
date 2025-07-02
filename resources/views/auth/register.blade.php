<x-guest-layout>



 <div class="flex flex-col justify-center flex-1 w-full max-w-md mx-auto">
            <div class="mb-5 sm:mb-8">
                <h1 class="mb-2 font-semibold text-gray-800 text-title-sm dark:text-white/90 sm:text-title-md">Sign Up
                </h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Enter your email and password to sign up!</p>
            </div>
            <div>
                <!-- Social Buttons (You can keep them or remove) -->
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-5">
                    <button type="button"
                        class="inline-flex items-center justify-center gap-3 py-3 text-sm font-normal text-gray-700 transition-colors bg-gray-100 rounded-lg px-7 hover:bg-gray-200 hover:text-gray-800 dark:bg-white/5 dark:text-white/90 dark:hover:bg-white/10">
                        <!-- Google SVG Icon -->
                        Sign up with Google
                    </button>
                    <button type="button"
                        class="inline-flex items-center justify-center gap-3 py-3 text-sm font-normal text-gray-700 transition-colors bg-gray-100 rounded-lg px-7 hover:bg-gray-200 hover:text-gray-800 dark:bg-white/5 dark:text-white/90 dark:hover:bg-white/10">
                        <!-- X SVG Icon -->
                        Sign up with X
                    </button>
                </div>

                <div class="relative py-3 sm:py-5">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200 dark:border-gray-800"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="p-2 text-gray-400 bg-white dark:bg-gray-900 sm:px-5 sm:py-2">Or</span>
                    </div>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="space-y-5">
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <!-- First Name -->
                            <div class="sm:col-span-1">
                                <label for="fname"
                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    First Name<span class="text-error-500">*</span>
                                </label>
                                <input type="text" id="fname" name="fname" placeholder="Enter your first name"
                                    value="{{ old('fname') }}" required
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                @error('fname')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Last Name -->
                            <div class="sm:col-span-1">
                                <label for="lname"
                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                    Last Name<span class="text-error-500">*</span>
                                </label>
                                <input type="text" id="lname" name="lname" placeholder="Enter your last name"
                                    value="{{ old('lname') }}" required
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                @error('lname')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email"
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Email<span class="text-error-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" placeholder="Enter your email"
                                value="{{ old('email') }}" required
                                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password"
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Password<span class="text-error-500">*</span>
                            </label>
                            <div x-data="{ showPassword: false }" class="relative">
                                <input id="password" name="password" :type="showPassword ? 'text' : 'password'"
                                    placeholder="Enter your password" required
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-4 pr-11 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                <span @click="showPassword = !showPassword"
                                    class="absolute z-30 text-gray-500 -translate-y-1/2 cursor-pointer right-4 top-1/2 dark:text-gray-400">
                                    <!-- Password toggle SVGs here -->
                                </span>
                            </div>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Confirmation -->
                        <div>
                            <label for="password_confirmation"
                                class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Confirm Password<span class="text-error-500">*</span>
                            </label>
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                placeholder="Confirm your password" required
                                class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                        </div>

                        <!-- Terms Checkbox -->
                        <div>
                            <div x-data="{ checkboxToggle: false }">
                                <label for="terms"
                                    class="flex items-start text-sm font-normal text-gray-700 cursor-pointer select-none dark:text-gray-400">
                                    <div class="relative">
                                        <input type="checkbox" id="terms" name="terms" class="sr-only"
                                            @change="checkboxToggle = !checkboxToggle" required />
                                        <div :class="checkboxToggle ? 'border-brand-500 bg-brand-500' :
                                            'bg-transparent border-gray-300 dark:border-gray-700'"
                                            class="mr-3 flex h-5 w-5 items-center justify-center rounded-md border-[1.25px]">
                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.6666 3.5L5.24992 9.91667L2.33325 7" stroke="white"
                                                        stroke-width="1.94437" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="inline-block font-normal text-gray-500 dark:text-gray-400">
                                        By creating an account means you agree to the
                                        <span class="text-gray-800 dark:text-white/90">Terms and Conditions,</span>
                                        and our
                                        <span class="text-gray-800 dark:text-white">Privacy Policy</span>
                                    </p>
                                </label>
                                @error('terms')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-5">
                    <p class="text-sm font-normal text-center text-gray-700 dark:text-gray-400 sm:text-start">
                        Already have an account?
                        <a href="{{ route('login') }}"
                            class="text-brand-500 hover:text-brand-600 dark:text-brand-400">Sign In</a>
                    </p>
                </div>
            </div>
        </div>

</x-guest-layout>
