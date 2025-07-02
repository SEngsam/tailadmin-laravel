<x-layout>
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <!-- Breadcrumb Start -->
        <div x-data="{ pageName: `Videos` }">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>

                <nav>
                    <ol class="flex items-center gap-1.5">
                        <li>
                            <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                                href="index.html">
                                Home
                                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke=""
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <div class="grid grid-cols-1 gap-5 sm:gap-6 xl:grid-cols-2">
            <div class="space-y-5 sm:space-y-6">
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                            Video Ratio 16:9
                        </h3>
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="overflow-hidden rounded-lg aspect-video">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                            Video Ratio 4:3
                        </h3>
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="aspect-4/3 overflow-hidden rounded-lg">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-5 sm:space-y-6">
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                            Video Ratio 4:3
                        </h3>
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="aspect-4/3 overflow-hidden rounded-lg">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800">
                        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                            Video Ratio 1:1
                        </h3>
                    </div>
                    <div class="p-4 sm:p-6">
                        <div class="overflow-hidden rounded-lg aspect-square">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
