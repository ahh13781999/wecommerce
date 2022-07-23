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
            <p class="font-semibold text-base lg:text-lg">پرداخت</p>

        </div>

        <div class="flex flex-col justify-between w-full gap-y-16 mt-8">

            <div class="flex flex-col justify-between gap-y-8 w-full">
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">نام</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" name="" id="">
                    </fieldset>
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">نام
                            خانوادگی</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text">
                    </fieldset>
                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">ایمیل</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" name="" id="">
                    </fieldset>
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">شماره
                            تلفن</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text">
                    </fieldset>
                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">آدرس</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" name="" id="">
                    </fieldset>
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">استان</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text">
                    </fieldset>
                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">شهر</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" name="" id="">
                    </fieldset>
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">کد
                            پستی</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text">
                    </fieldset>
                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="flex flex-row items-center gap-x-2  w-full">
                        <input
                            class="rounded p-3 border-gray-200 checked:bg-red-500 checked:hover:bg-red-700 checked:ring-red-500 focus:ring-red-500 checked:focus:bg-red-500"
                            type="checkbox" name="" id="">
                        <p class="text-lg font-semibold">می خواهید حساب بسازید؟</p>
                    </fieldset>
                    <fieldset class="flex flex-row items-center gap-x-2  w-full">
                        <input
                            class="rounded p-3 border-gray-200 checked:bg-red-500 checked:hover:bg-red-700 checked:ring-red-500 focus:ring-red-500 checked:focus:bg-red-500"
                            type="checkbox" name="" id="">
                        <p class="text-lg font-semibold">ارسال به آدرس متفاوت</p>
                    </fieldset>
                </div>
            </div>

            <div class="px-6 py-16 bg-gray-50 border-2 border-grey-100 rounded">
                <div class="grid grid-cols-6 gap-y-16 md:gap-y-0">

                    <div class="col-span-6 md:col-span-3">
                        <div class="flex flex-col items-center justify-center h-full gap-y-8 w-full">
                            <div class="flex flex-col items-center w-full gap-y-6">
                                <p class="text-2xl font-semibold">کد تخفیف</p>
                                <hr class="w-full md:w-3/4">
                            </div>
                            <form class="flex flex-col justify-between gap-y-4 items-center w-full" action="">
                                <p class="text-gray-700 font-semibold text-lg">کد تخفیف را وارد کنید</p>
                                <input
                                    class="border-gray-200 focus:border-transparent hover:ring-2 hover:ring-red-500 focus:ring-4 focus:ring-red-500 w-3/5"
                                    type="text">
                                <button
                                    class="py-2 px-6 mt-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white"
                                    type="submit">اعمال تخفیف</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-span-6 md:col-span-3">
                        <div class="flex flex-col justify-between gap-y-4 w-full">
                            <p class="text-gray-800 text-xl font-medium">جزییات سفارش</p>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">جمع کل</p>
                                <p class="text-xl font-bold">20000</p>
                            </div>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه ارسال</p>
                                <p class="text-xl font-bold">14000</p>
                            </div>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">تخفیف</p>
                                <p class="text-xl font-bold">14000</p>
                            </div>
                            <hr class="w-full">
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه کل</p>
                                <p class="text-xl font-bold">34000</p>
                            </div>
                            <div class="self-center">
                                <button  class="py-2 px-6 mt-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white">ثبت سفارش</button>
                            </div>
                        </div>
                    </div>
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
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/checkout.blade.php ENDPATH**/ ?>