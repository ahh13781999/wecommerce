<header class="bg-white z-30 sticky top-0 w-full border-b-2 border-gray-200">
    <nav class="container mx-auto py-4">
        <div class="flex flex-row items-center justify-between w-full">
            <div class="flex flex-row items-center space-x-2 lg:space-x-4 basis-1/2">
                <button class="flex lg:hidden rounded-md hover:bg-gray-100 p-2 cursor-pointer">
                    <svg x-on:click="asideOpen = true" x-show="!asideOpen" class="fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                    <svg x-on:click="asideOpen = false" x-show="asideOpen" class="w-8 h-8" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <a class="flex flex-row items-center gap-x-2" href="">
                    <img src="https://demo.themesberg.com/windster/images/logo.svg" class="h-6 w-6"
                        alt="Windster Logo">
                    <span class="text-base font-bold lg:text-xl lg:font-extrabold tracking-wide">وی کامرس</span>
                </a>

            </div>
            <div class="flex flex-row items-center justify-end space-x-2 lg:space-x-4 basis-1/2">
                <div x-on:click="asideOpen = !asideOpen"
                    class="flex lg:hidden hover:bg-gray-100 hover:text-gray-900 rounded-lg p-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <form action="" class="hidden lg:block">
                    <div class="w-full relative">
                        <div class="absolute flex items-center inset-y-0 left-0 pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input
                            class="w-3/4 focus:w-full transition delay-200 duration-900 ease-in-out py-3 pl-12 rounded-lg text-lg text-gray-900 bg-gray-50 border-2 border-gray-300 focus:border-transparent focus:ring-4 focus:ring-teal-500"
                            type="search" placeholder="جست و جو ..." name="" id="">
                    </div>
                </form>
                <a href="" class="hover:bg-gray-100 hover:text-gray-900 rounded-lg p-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                </a>

                <div class="relative cursor-pointer">
                    <img x-on:click="adminDropdown = !adminDropdown"
                        class="lg:h-16 lg:w-16 w-10 h-10 rounded-full ring-4 shadow-lg shadow-gray-300 ring-gray-200"
                        src="https://picsum.photos/id/237/536/354" alt="">
                    <div x-show="adminDropdown" x-on:click.outside="adminDropdown = false"
                        x-transition:enter="ease-out delay-200 duration-500"
                        x-transition:enter-start="opacity-0 scale-80" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="ease-in delay-200 duration-500"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-80"
                        class="absolute translate-y-2 translate-x-4 bg-white w-fit">
                        <ul
                            class="lg:flex hidden p-2 flex-col items-center text-center justify-between border-2 border-gray-200 rounded-xl w-full shadow-xl text-gray-900">
                            <li class="py-2 px-4 rounded-md hover:bg-gray-100 w-full"><a href="">پروفایل</a>
                            </li>
                            <li class="py-2 px-4 rounded-md hover:bg-gray-100 w-full"><a href="">تنظیمات</a>
                            </li>
                            <li class="p-2 hover:bg-gray-100 w-full">
                                <form method="POST" action="<?php echo e(route('admin.logout')); ?>"><?php echo csrf_field(); ?><button
                                        type="submit">خروج</button></form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/components/admin-header.blade.php ENDPATH**/ ?>