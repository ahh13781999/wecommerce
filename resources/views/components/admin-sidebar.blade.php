<aside x-show="asideOpen"
    x-transition:enter="transition ease-in-out duration-500 transform" x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-500 transform"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
    class="h-screen xl:basis-1/6 lg:basis-1/5 md:basis-1/4 basis-1/2">
    <div
        class="h-full w-full z-20 flex flex-col flex-1 justify-between overflow-y-auto bg-white border-r border-gray-200">
        <div class="flex flex-col justify-between h-full py-6 px-2">
            <div x-data="{ showSearch: false }" class="flex flex-col justify-between whitespace-nowrap gap-y-4">
                <form class="w-full" x-show="showSearch"
                    @resize.window="window.innerWidth > 1024 ? showSearch = false : showSearch = true " action="">
                    <div class="w-full relative">
                        <div class="absolute flex items-center inset-y-0 left-0 pl-4 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input
                            class="w-full py-1 lg:py-3 pl-12 lg:rounded-lg rounded-md text-lg text-gray-900 bg-gray-50 border-2 border-gray-300 focus:border-transparent focus:ring-4 focus:ring-teal-500 transition duration-700 ease-in-out delay-200"
                            type="search" placeholder="...جست و جو" name="" id="">
                    </div>
                </form>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "admin.dashboard"){ echo "bg-gray-200";} ?>"
                    href="{{ route('admin.dashboard') }}">
                    <span class="flex-1">داشبورد</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>

                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "brand.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('brand.crud') }}">
                    <span class="flex-1">برند</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "category.crud"){ echo "bg-gray-200";} ?>""
                    href="{{ route('category.crud') }}">
                    <span class="flex-1">دسته بندی</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "sub-category.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('sub-category.crud') }}">
                    <span class="flex-1">زیر دسته بندی</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "product.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('product.crud') }}">
                    <span class="flex-1">محصولات</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "product-attribute.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('product-attribute.crud') }}">
                    <span class="flex-1">ویژگی محصول</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "home-slider.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('home-slider.crud') }}">
                    <span class="flex-1">اسلایدر صفحه اصلی</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "coupon.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('coupon.crud') }}">
                    <span class="flex-1">کوپن</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z" />
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "user.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('user.crud') }}">
                    <span class="flex-1">کاربران</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "order.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('order.crud') }}">
                    <span class="flex-1">سفارشات</span>
                    <svg class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                      </svg>
                </a>
                <a class="flex flex-row items-center justify-between text-lg font-medium p-2 rounded text-gray-900 hover:bg-gray-100 <?php if(Route::currentRouteName() == "review.crud"){ echo "bg-gray-200";} ?>"
                    href="{{ route('review.crud') }}">
                    <span class="flex-1">نظرات</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-8 lg:h-8 text-gray-500 flex-shrink-0 transition duration-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                </a>
            </div>
        </div>
    </div>
</aside>
