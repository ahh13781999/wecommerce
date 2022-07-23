<?php if (isset($component)) { $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="w-full h-full container mx-auto py-4 lg:py-10 px-4 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg">لپ تاپ لنوو سفید</p>

        </div>

        <div class="flex flex-col justify-between w-full mt-8 gap-y-16">
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12 lg:col-span-9 flex flex-col justify-between gap-y-16">
                    <div class="grid grid-cols-6 gap-y-10">
                        <div class="col-span-6 lg:col-span-3 order-2 lg:order-1">
                            <div class="flex flex-col gap-y-10 justify-between">
                                <p class="border-b-2 py-6 text-2xl font-semibold">لپ تاپ سفید لنوو</p>
                                <ul
                                    class="flex flex-col justify-between gap-y-2 py-4 list-inside list-disc text-xl font-normal text-gray-600">
                                    <li>صفحه نمایش HD</li>
                                    <li>رم 8 گیگ</li>
                                    <li>باتری 10000 هزار</li>
                                </ul>
                                <p class="text-3xl font-black">300000 <span>تومان</span></p>
                                <p class="text-lg font-semibold text-gray-600">موجودیت:<span class="text-red-500">در
                                        انبار </span></p>

                                <div class="flex flex-col items-center gap-y-2">
                                    <p class="text-lg font-semibold text-gray-500">تعداد:</p>
                                    <div class="flex flex-row items-center w-fit gap-x-1 border-2 p-2">
                                        <input class="border-none w-20 focus:border-transparent focus:ring-transparent text-center text-xl font-bold"
                                            type="text" value="1">
                                        <div
                                            class="p-1 border border-gray-300 hover:bg-red-500 hover:text-white cursor-pointer rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                            </svg>
                                        </div>
                                        <div
                                            class="p-1 border border-gray-300 hover:bg-red-500 hover:text-white cursor-pointer rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <button
                                    class="border-2 py-4 font-bold text-xl bg-gray-100 hover:bg-red-500 hover:text-white rounded w-2/3 self-center">اضافه
                                    به سبد</button>
                                <div
                                    class="flex flex-row justify-between items-center text-lg font-medium text-gray-600 px-4 md:px-0">
                                    <a href="" class="flex flex-row items-center gap-x-1 hover:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                        </svg>
                                        <p>افزودن به لیست مقایسه</p>
                                    </a>
                                    <a href="" class="flex flex-row items-center gap-x-1 hover:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>افزودن به لیست آرزو</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 lg:col-span-3 flex flex-col items-center gap-y-16 order-1 lg:order-2">
                            <div class="rounded shadow-xl border-2 bg-white hover:scale-125 transition duration-500 delay-150 ease-linear cursor-pointer">
                                <img class="h-96 w-96" src="https://picsum.photos/536/354" alt="">
                            </div>
                            <ul class="flex flex-row items-center justify-evenly relative w-full">
                                <div class="bg-gray-200 text-gray-600 py-2 absolute right-6 hover:bg-red-500 hover:text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                      </svg>
                                </div>
                                <li
                                    class="shadow-xl border-2 cursor-pointer rounded hover:ring-2 hover:ring-red-500 focus:border-red-500">
                                    <img class="h-28 w-28" src="https://picsum.photos/536/354" alt="">
                                </li>
                                <li
                                    class="shadow-xl border-2 cursor-pointer rounded hover:ring-2 hover:ring-red-500 focus:border-red-500">
                                    <img class="h-28 w-28" src="https://picsum.photos/536/354" alt="">
                                </li>
                                <li
                                    class="shadow-xl border-2 cursor-pointer rounded hover:ring-2 hover:ring-red-500 focus:border-red-500">
                                    <img class="h-28 w-28" src="https://picsum.photos/536/354" alt="">
                                </li>
                                <li
                                    class="shadow-xl border-2 cursor-pointer rounded hover:ring-2 hover:ring-red-500 focus:border-red-500">
                                    <img class="h-28 w-28" src="https://picsum.photos/536/354" alt="">
                                </li>
                                <div class="bg-gray-200 text-gray-600 py-2 absolute left-6 hover:bg-red-500 hover:text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                      </svg>
                                </div>
                            </ul>

                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-col text-center md:flex-row gap-x-2 w-full">
                            <a class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold border-b-0"
                                href="#introduction">معرفی</a>
                            <a class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold border-b-0"
                                href="#properties">مشخصات</a>
                            <a class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold border-b-0"
                                href="#comments">نظرات</a>
                        </div>
                        <div class="p-6 border-2">

                            <p class="font-medium hidden">
                                سنجش دقیق، و کاربری آسان قابلیت خاموشی خودکار دارای 10 عدد نوار تست همراه دارای آلارم
                                هشدار خطای تست دارای نشانگر زمان و تاریخ و روز و ماه قابلیت تنظیم تا 5 یادآور در روز جهت
                                انجام تست قابلیت تنظیم هشدار افت یا بالا بودن میزان قند خون قابلیت علامت‌گذاری قبل و بعد
                                از غذا دارای ایجکت نوار (پرتاب خودکار نوار جهت جلوگیری از آلودگی و تماس دست) قابلیت
                                اتصال به کامپیوتر و انتقال اطلاعات اندازه گیری قند خون با 8 الکترود در نوارهای تست قند
                                خون قابلیت انجام تست در شرایط دمایی 5 الی 45 درجه سانتی‌گراد انجام تست در بازه هماتوکریت
                                20 تا 70 درصد مناسب در دوران بارداری ، نوزادان و بیماران مبتلا به کم خونی قابلیت اندازه
                                گیری حجم خون صفحه نمایش بزرگ و خوانا سنجش قند خون تنها در 5 ثانیه بدون نیاز به کد گذاری
                                (اتوکدینگ) دارای نوارهایی با قابلیت جذب نمونه خون انجام تست قندخون با کمترین میزان حجم
                                خون ( 0.5 میکرولیتر) امکان ذخیره 900 تست قابلیت نشانه گذاری تست، قبل و بعد از وعده غذایی
                                قابلیت تنظیم تا 5 یاد آور در روز جهت انجام تست امکان محاسبه میانگین 7- 14 – 30 روزه
                                دارای دکمه خروج خودکار نوار از دستگاه است.
                            </p>

                            <template>
                                <table class="border-2 flex flex-col w-full">
                                    <tr class="border-b-2 flex flex-row items-center justify-between w-full py-2">
                                        <th class="border-l-2 text-center basis-1/2">
                                            <p class="text-lg font-semibold">وزن</p>
                                        </th>
                                        <td class="text-center basis-1/2">
                                            <p class="text-base font-medium">1 کیلوگرم</p>
                                        </td>
                                    </tr>
                                    <tr class="border-b-2 flex flex-row items-center justify-between w-full py-2">
                                        <th class="border-l-2 text-center basis-1/2">
                                            <p class="text-lg font-semibold">ابعاد</p>
                                        </th>
                                        <td class="text-center basis-1/2">
                                            <p class="text-base font-medium">12 * 15 * 13 سانتی متر</p>
                                        </td>
                                    </tr>
                                    <tr class="flex flex-row items-center justify-between w-full py-2">
                                        <th class="border-l-2 text-center basis-1/2">
                                            <p class="text-lg font-semibold">رنگ</p>
                                        </th>
                                        <td class="text-center basis-1/2">
                                            <p class="text-base font-medium">آبی، زردر، سفید، بنفش</p>
                                        </td>
                                    </tr>
                                </table>
                            </template>

                            <div class="flex flex-col justify-between gap-y-16">

                                <h2 class="text-xl font-bold mt-6">1 نظر</h2>
                                <ul class="flex flex-col justify-between gap-y-4 px-2 md:px-6">
                                    <li class="flex flex-row items-center rounded border-2 p-2 md:p-6 gap-x-4">
                                        <img class="w-24 h-24 rounded" src="https://picsum.photos/seed/picsum/200/300"
                                            alt="">
                                        <div class="flex flex-col justify-between gap-y-6 w-full">
                                            <div class="flex flex-row items-center justify-between">
                                                <h2 class="text-xl font-bold">جان دو</h2>
                                                <p class="text-lg font-medium text-gray-500">
                                                    <?php echo e(gmdate('Y/M/D', time())); ?></p>
                                            </div>
                                            <p class="text-lg font-medium text-gray-700">بهترین</p>
                                        </div>
                                    </li>
                                    <li class="flex flex-row items-center rounded border-2 p-2 md:p-6 gap-x-4">
                                        <img class="w-24 h-24 rounded" src="https://picsum.photos/seed/picsum/200/300"
                                            alt="">
                                        <div class="flex flex-col justify-between gap-y-6 w-full">
                                            <div class="flex flex-row items-center justify-between">
                                                <h2 class="text-xl font-bold">جان دو</h2>
                                                <p class="text-lg font-medium text-gray-500">
                                                    <?php echo e(gmdate('Y/M/D', time())); ?></p>
                                            </div>
                                            <p class="text-lg font-medium text-gray-700">بهترین</p>
                                        </div>
                                    </li>

                                </ul>

                                <form class="flex flex-col justify-between gap-y-8 mt-8 p-2 md:p-6" action="">
                                    <div class="flex flex-col md:flex-row justify-between gap-y-8 gap-x-6 w-full">
                                        <fieldset class="flex flex-col gap-y-2 w-full">
                                            <label
                                                class="text-lg font-semibold after:content-['*'] after:text-red-500 after:mr-2"
                                                for="">نام</label>
                                            <input class="rounded py-3 border-gray-200 focus:border-none focus:ring-2 focus:ring-red-500" type="text" name="" id="">
                                        </fieldset>
                                        <fieldset class="flex flex-col gap-y-2 w-full">
                                            <label
                                                class="text-lg font-semibold after:content-['*'] after:text-red-500 after:mr-2"
                                                for="">ایمیل</label>
                                            <input class="rounded py-3 border-gray-200 focus:border-none focus:ring-2 focus:ring-red-500" type="email" name="" id="">
                                        </fieldset>
                                    </div>

                                    <fieldset class="flex flex-col gap-y-2">
                                        <label
                                            class="text-lg font-semibold after:content-['*'] after:text-red-500 after:mr-2"
                                            for="">نظر</label>
                                        <textarea class="rounded border-gray-200 focus:border-none focus:ring-2 focus:ring-red-500" name="" id="" cols="30" rows="10"></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <button class="bg-red-500 text-white hover:bg-gray-900 hover:text-white font-semibold text-xl py-4 px-8">ثبت</button>
                                    </fieldset>
                                    
                                </form>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3 flex flex-col gap-y-16">
                    <ul class="flex flex-col justify-between">
                        <li class="flex flex-row items-center justify-start gap-x-2 py-12 border-b-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                            </svg>
                            <div class="flex flex-col justify-between gap-y-2">
                                <p class="text-xl font-semibold">ارسال رایگان</p>
                                <p class="text-lg font-medium text-gray-400">برای خرید های بالای دوست هزار تومان</p>
                            </div>

                        </li>
                        <li class="flex flex-row items-center justify-start gap-x-2 py-12 border-b-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="flex flex-col justify-between gap-y-2">
                                <p class="text-xl font-semibold">پیشتهاد ویژه</p>
                                <p class="text-lg font-medium text-gray-400">برای خرید هدیه</p>
                            </div>

                        </li>
                        <li class="flex flex-row items-center justify-start pt-12 gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="flex flex-col justify-between gap-y-2">
                                <p class="text-xl font-semibold">
                                    بازگشت کالا
                                </p>
                                <p class="text-lg font-medium text-gray-400">
                                    ضمانت بازگشت کالا تا هفت روز
                                </p>
                            </div>

                        </li>
                    </ul>

                    <ul class="flex flex-col justify-between">
                        <h2 class="border-b-2 py-6 text-xl font-bold my-4">کالاهای پربازدید</h2>

                        <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                            <div class="border-2 rounded shadow-lg flex-shrink-0">
                                <img class="h-24 w-24 rounded" src="https://picsum.photos/seed/picsum/200/300" alt="">
                            </div>
                            <div class="flex flex-col items-start h-full justify-start gap-y-4">
                                <p class="text-lg font-semibold text-gray-400">لپ تاپ سفید لنوو</p>
                                <p class="text-lg font-bold">200000</p>
                            </div>

                        </li>

                        <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                            <div class="border-2 rounded shadow-lg flex-shrink-0">
                                <img class="h-24 w-24 rounded" src="https://picsum.photos/seed/picsum/200/300" alt="">
                            </div>
                            <div class="flex flex-col items-start h-full justify-start gap-y-4">
                                <p class="text-lg font-semibold text-gray-400">لپ تاپ سفید لنوو</p>
                                <p class="text-lg font-bold">200000</p>
                            </div>

                        </li>

                        <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                            <div class="border-2 rounded shadow-lg flex-shrink-0">
                                <img class="h-24 w-24 rounded" src="https://picsum.photos/seed/picsum/200/300" alt="">
                            </div>
                            <div class="flex flex-col items-start h-full justify-start gap-y-4">
                                <p class="text-lg font-semibold text-gray-400">لپ تاپ سفید لنوو</p>
                                <p class="text-lg font-bold">200000</p>
                            </div>

                        </li>

                        <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                            <div class="border-2 rounded shadow-lg flex-shrink-0">
                                <img class="h-24 w-24 rounded" src="https://picsum.photos/seed/picsum/200/300" alt="">
                            </div>
                            <div class="flex flex-col items-start h-full justify-start gap-y-4">
                                <p class="text-lg font-semibold text-gray-400">لپ تاپ سفید لنوو</p>
                                <p class="text-lg font-bold">200000</p>
                            </div>

                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73)): ?>
<?php $component = $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73; ?>
<?php unset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/detail.blade.php ENDPATH**/ ?>