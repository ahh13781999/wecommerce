<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <header style="display: unset">
        
        <div class="bg-gray-50 w-full">
            <div
                class="flex flex-col lg:flex-row items-center justify-between py-2 px-0 lg:px-4 w-full gap-2 lg:gap-0  container mx-auto">

                <ul
                    class="flex flex-row items-center justify-evenly text-center font-semibold gap-x-2 lg:gap-x-4 xl:gap-x-6 order-2 lg:order-1">
                    <li class="px-2 py-1 hover:text-red-500"><a href="">ريال</a></li>
                    <li class="px-2 py-1 hover:text-red-500"><a href="">فارسی</a></li>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="px-2 py-1 hover:text-red-500">
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="font-semibold">خروج</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="px-2 py-1 hover:text-red-500"><a href="<?php echo e(route('register')); ?>">ثبت نام</a></li>
                        <li class="px-2 py-1 hover:text-red-500"><a href="<?php echo e(route('login')); ?>">ورود</a></li>
                    <?php endif; ?>



                </ul>
                <div class="order-1 lg:order-2">
                    <p class="px-2 py-1 font-bold">شماره تماس : 44556688+</p>
                </div>
            </div>
        </div>
        

        
        <div
            class="flex flex-col lg:flex-row items-center justify-between py-8 px-6 space-x-0 lg:space-x-16 space-y-8 lg:space-y-0 w-full  container mx-auto">
            <div class="flex justify-center items-center w-full basis-full lg:basis-1/4">
                <a href="">
                    <p class="text-3xl font-bold">وی کامرس</p>
                </a>
            </div>
            <div class="flex flex-row items-center justify-center w-full basis-full lg:basis-2/4">
                <form class="flex flex-row items-stretch justify-center h-full w-full px-12" action="">
                    <input
                        class="border-2 w-full border-red-500 items-stretch rounded rounded-l-none py-3 focus:ring-4 focus:ring-red-500 focus:border-transparent transition delay-200 duration-500 ease-in-out"
                        type="search" placeholder="جست و جو کن">
                    <button
                        class="flex flex-row items-center py-3 px-4 rounded rounded-r-none bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="white" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>

            </div>
            <div class="flex flex-row items-center justify-center w-full basis-full lg:basis-1/4">
                <div class="flex flex-row items-center justify-center gap-x-24 lg:gap-x-16 w-full">

                    <div class="flex flex-row justify-between items-center gap-2 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-col items-stretch justify-center space-y-2">
                            <div class="bg-gray-300 rounded px-2 py-1 text-center">
                                <p class="text-sm">0 کالا</p>
                            </div>
                            <p class="font-semibold text-gray-800 text-center whitespace-nowrap">لیست آرزو</p>
                        </div>

                    </div>
                    <div class="flex flex-row justify-between items-center gap-2 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <div class="flex flex-col items-stretch justify-center space-y-2">
                            <div class="bg-gray-300 rounded px-2 py-1 text-center">
                                <p class="text-sm">0 کالا</p>
                            </div>
                            <p class="font-semibold text-gray-800 text-center whitespace-nowrap">سبد خرید</p>
                        </div>

                    </div>
                    <div class="flex flex-col items-center justify-center gap-y-0 lg:hidden hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <span class="text-sm font-bold">
                            منو
                        </span>
                    </div>
                </div>
            </div>

        </div>
        

        
        <div class="h-full w-80 fixed top-0 right-0 bg-white z-20 hidden">
            <ul class="flex flex-col justify-center text-lg font-medium w-full">
                <li class="flex flex-row justify-between items-center border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">منوی اصلی</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">صفحه اصلی</a>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">کالا ها</a>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a class="flex flex-row justify-between items-center w-full" href="">
                        <span>دسته بندی ها</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                          </svg>
                    </a>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">سبد خرید</a>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">تسویه حساب</a>
                </li>
                <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                    <a href="">درباره ی ما</a>
                </li>
            </ul>
        </div>
        


        
        <div class="border-t-2 bg-gray-50 hidden lg:flex shadow-xl">
            <div class="flex flex-row items-center justify-center container w-full mx-auto">
                <ul class="flex flex-row items-center justify-evenly w-full py-2">
                    <li class="px-4 py-2 font-semibold hover:text-red-500">
                        <a href="">کالا های جذاب</a>
                    </li>
                    <li class="px-4 py-2 font-semibold hover:text-red-500">
                        <a href="">جدید ترین کالاها</a>
                    </li>
                    <li class="px-4 py-2 font-semibold hover:text-red-500">
                        <a href="">پرفروش ترین ها</a>
                    </li>
                    <li class="px-4 py-2 font-semibold hover:text-red-500">
                        <a href="">بیشترین امتیاز</a>
                    </li>
                </ul>
            </div>
        </div>
        

        
        <div class="bg-gray-900 h-auto hidden lg:block sticky top-0 z-10">
            <div class="flex flex-row items-center justify-start container relative px-32 w-full mx-auto">
                <ul class="flex flex-row items-center justify-between gap-4 text-white font-semibold border-none">
                    <li class="py-6 px-4 bg-red-500 hover:bg-red-800 cursor-pointer"><a
                            href=""><svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg></a></li>
                    <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="">کالا ها</a></li>
                    <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer">
                        <a class="flex flex-row items-center gap-x-1" href="">
                            دسته بندی ها
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                       <ul class="bg-white rounded fixed tranform -translate-x-2 translate-y-2 p-6">
                           <li class="text-black">hi</li>

                       </ul>
                    </li>
                    <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="">سبد خرید</a></li>
                    <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="">تسویه حساب</a></li>
                    <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="">درباره ی ما</a></li>
                </ul>
            </div>
        </div>
        
    </header>

    <main class="overflow-y-auto">
        <?php echo e($slot); ?>

    </main>

    <footer class="flex flex-col w-full">
        
        <div class="bg-red-500">
            <div class="flex flex-row items-center justify-center container mx-auto">
                <div
                    class="flex flex-col lg:flex-row items-center justify-between text-white font-semibold lg:py-6 py-10 w-full space-y-6 lg:space-y-0">
                    <div class="flex flex-row items-center gap-2 py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 flex-shrink-0" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            <path
                                d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                        </svg>
                        <div class="flex flex-col items-start">
                            <h2 class="text-xl font-bold">تحویل رایگان</h2>
                            <p>سفارش بالای 200 هزار تومان</p>
                        </div>

                    </div>

                    <div class="flex flex-row items-center gap-2 py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                        </svg>
                        <div class="flex flex-col items-start">
                            <h2 class="text-xl font-bold">پشتیبانی آنلاین</h2>
                            <p>24 ساعت هفته</p>
                        </div>
                    </div>

                    <div class="flex flex-row items-center gap-2 py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 flex-shrink-0" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <div class="flex flex-col items-start">
                            <h2 class="text-xl font-bold">پرداخت امن</h2>
                            <p>به صورت امن پرداخت کنید</p>
                        </div>
                    </div>

                    <div class="flex flex-row items-center gap-2 py-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 flex-shrink-0" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex flex-col items-start">
                            <h2 class="text-xl font-bold">گارانتی</h2>
                            <p>برگشت پول تا 30 روز</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        

        
        <div class="bg-gray-50">
            <div class="flex flex-row container mx-auto py-12 px-10 w-full">
                <div class="grid grid-cols-6 gap-y-4 gap-x-0 lg:gap-y-0 lg:gap-x-4 w-full">
                    <div class="flex flex-col space-y-4 col-span-6 lg:col-span-3 text-lg">
                        <p class="text-xl font-semibold">با ما در ارتباط باشید.</p>
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 flex-shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p>تهران - خیابان ولیعصر- بالاتر از میدان ونک- خیابان نگار- پلاک ۸.</p>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 flex-shrink-0" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <a href="tel" dir="ltr">(+21) 33442255</a>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 flex-shrink-0" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="">wcommerce@email.com</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-center space-y-6 col-span-6 lg:col-span-3">
                        <p class="text-xl font-semibold">در سرویس نامه خبری ما مشترک شوید</p>
                        <form class="flex flex-row items-stretch w-full" action="">
                            <input
                                class="w-full border-gray-200 py-4 rounded rounded-l-none focus:border-gray-200 focus:ring-transparent"
                                type="search">
                            <button
                                class="bg-red-500 py-1 px-6 rounded rounded-r-none text-white hover:bg-red-700 focus:ring-4 focus:ring-red-500 focus:ring-offset-2">
                                <p class="font-semibold text-sm whitespace-nowrap">مشترک شدن</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="bg-gray-900">
            <div class="flex flex-row items-center justify-center py-6 container mx-auto">
                <div
                    class="flex flex-col lg:flex-row items-center justify-between text-white gap-y-6 font-semibold w-full">


                    <div class="flex flex-row items-center gap-x-6">
                        <a class="hover:text-red-500" href="">درباره ی ما</a>
                        <a class="hover:text-red-500" href="">حریم خصوصی</a>
                        <a class="hover:text-red-500" href="">شرایط بازگشت</a>
                    </div>
                    <p><?php echo e(gmdate('Y', time())); ?> &copy; تمامی حقوق این سایت محفوظ است.</p>
                </div>
            </div>
        </div>
        
    </footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/components/home.blade.php ENDPATH**/ ?>