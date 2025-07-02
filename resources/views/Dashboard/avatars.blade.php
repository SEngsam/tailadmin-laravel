  <x-layout>
          <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Avatars`}">
              <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
  <h2
    class="text-xl font-semibold text-gray-800 dark:text-white/90"
    x-text="pageName"
  ></h2>

  <nav>
    <ol class="flex items-center gap-1.5">
      <li>
        <a
          class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
          href="index.html"
        >
          Home
          <svg
            class="stroke-current"
            width="17"
            height="16"
            viewBox="0 0 17 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
              stroke=""
              stroke-width="1.2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </a>
      </li>
      <li
        class="text-sm text-gray-800 dark:text-white/90"
        x-text="pageName"
      ></li>
    </ol>
  </nav>
</div>
</div>
            <!-- Breadcrumb End -->

            <div class="space-y-5 sm:space-y-6">
              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Default Avatar
                  </h3>
                </div>
                <div class="p-8 border-t border-gray-100 dark:border-gray-800">
                  <div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
  <div class="relative h-6 w-full max-w-6 rounded-full">
    <img
      src="s{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>

  <div class="relative h-8 w-full max-w-8 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>

  <div class="relative h-10 w-full max-w-10 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>

  <div class="relative h-12 w-full max-w-12 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>

  <div class="relative h-14 w-full max-w-14 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>

  <div class="relative h-16 w-full max-w-16 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />
  </div>
</div>
</div>
              </div>

              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Avatar with online indicator
                  </h3>
                </div>
                <div class="p-8 border-t border-gray-100 dark:border-gray-800">
                  <div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
  <div class="relative h-6 w-full max-w-6 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-1.5 w-full max-w-1.5 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-8 w-full max-w-8 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2 w-full max-w-2 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-10 w-full max-w-10 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2.5 w-full max-w-2.5 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-12 w-full max-w-12 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3 w-full max-w-3 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-14 w-full max-w-14 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3.5 w-full max-w-3.5 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-16 w-full max-w-16 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-4 w-full max-w-4 rounded-full border-[1.5px] border-white bg-success-500 dark:border-gray-900"
    ></span>
  </div>
</div>
</div>
              </div>

              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Avatar with Offline indicator
                  </h3>
                </div>
                <div class="p-8 border-t border-gray-100 dark:border-gray-800">
                  <div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
  <div class="relative h-6 w-full max-w-6 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-1.5 w-full max-w-1.5 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-8 w-full max-w-8 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2 w-full max-w-2 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-10 w-full max-w-10 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2.5 w-full max-w-2.5 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-12 w-full max-w-12 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3 w-full max-w-3 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-14 w-full max-w-14 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3.5 w-full max-w-3.5 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-16 w-full max-w-16 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-4 w-full max-w-4 rounded-full border-[1.5px] border-white bg-error-500 dark:border-gray-900"
    ></span>
  </div>
</div>
</div>
              </div>

              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-6 py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Avatar with busy indicator
                  </h3>
                </div>
                <div class="p-8 border-t border-gray-100 dark:border-gray-800">
                  <div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
  <div class="relative h-6 w-full max-w-6 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-1.5 w-full max-w-1.5 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-8 w-full max-w-8 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2 w-full max-w-2 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-10 w-full max-w-10 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-2.5 w-full max-w-2.5 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-12 w-full max-w-12 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}""
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3 w-full max-w-3 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-14 w-full max-w-14 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-3.5 w-full max-w-3.5 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>

  <div class="relative h-16 w-full max-w-16 rounded-full">
    <img
      src="{{asset('tailadmin/build/src/images/user/user-01.jpg')}}"
      alt="user"
      class="overflow-hidden rounded-full"
    />

    <span
      class="absolute bottom-0 right-0 h-4 w-full max-w-4 rounded-full border-[1.5px] border-white bg-warning-500 dark:border-gray-900"
    ></span>
  </div>
</div>
</div>
              </div>
            </div>
          </div>
        </x-layout>
