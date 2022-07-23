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
            <p class="font-semibold text-base lg:text-lg">سبد خرید</p>
        </div>

        <div class="flex flex-col justify-between w-full gap-y-16 my-12">
            <ul class="flex flex-col justify-between">
                <h3 class="text-2xl font-bold mb-10">لیست محصولات</h3>
                <li
                    class="flex flex-col md:flex-row justify-between items-center text-gray-500 border-y-2 border-gray-100 gap-y-6 md:gap-y-0 py-6 px-0 lg:px-4">
                    <div class="">
                        <img class="md:w-16 md:h-16 w-32 h-32 rounded shadow-lg" src="https://picsum.photos/id/237/200/300" alt="">
                    </div>
                    <div class="">
                        <a class="text-xl font-semibold" href="">لب تاپ لنوو</a>
                    </div>
                    <div class="">
                        <p class="text-lg font-bold text-gray-700">200000</p>
                    </div>
                    <div class="">

                        <div class="flex flex-row items-center py-2 px-2 border-2 rounded gap-x-2">
                            <input value="1"
                                class="border-none w-16 text-center focus:border-none focus:ring-transparent text-xl font-bold"
                                type="text">
                            <a class="bg-gray-300 hover:bg-red-500 text-white rounded-full p-2" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                                </svg>
                            </a>
                            <a class="bg-gray-500 hover:bg-red-500 text-white rounded-full p-2" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="">
                        <p class="text-lg font-bold text-gray-700">200000</p>
                    </div>
                    <div class="hidden md:block">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hover:text-red-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="block md:hidden">
                        <button class="px-6 py-2 text-xl font-semibold text-gray-500 bg-gray-200 border border-gray-300 hover:bg-red-500 hover:text-white">
                            حذف از سبد خرید
                        </button>
                    </div>
                </li>
                <li
                    class="flex flex-col md:flex-row justify-between items-center text-gray-500 border-b-2 border-gray-100 gap-y-6 md:gap-y-0 py-6 px-0 lg:px-4">
                    <div class="">
                        <img class="md:w-16 md:h-16 w-32 h-32 rounded shadow-lg" src="https://picsum.photos/id/237/200/300" alt="">
                    </div>
                    <div class="">
                        <a class="text-xl font-semibold" href="">لب تاپ لنوو</a>
                    </div>
                    <div class="">
                        <p class="text-lg font-bold text-gray-700">200000</p>
                    </div>
                    <div class="">

                        <div class="flex flex-row items-center py-2 px-2 border-2 rounded gap-x-2">
                            <input value="1"
                                class="border-none w-16 text-center focus:border-none focus:ring-transparent text-xl font-bold"
                                type="text">
                            <a class="bg-gray-300 hover:bg-red-500 text-white rounded-full p-2" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                                </svg>
                            </a>
                            <a class="bg-gray-500 hover:bg-red-500 text-white rounded-full p-2" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="">
                        <p class="text-lg font-bold text-gray-700">200000</p>
                    </div>
                    <div class="hidden md:block">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hover:text-red-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="block md:hidden">
                        <button class="px-6 py-2 text-xl font-semibold text-gray-500 bg-gray-200 border border-gray-300 hover:bg-red-500 hover:text-white">
                            حذف از سبد خرید
                        </button>
                    </div>
                </li>
            </ul>

            <div class="px-6 py-16  bg-gray-50 border-2 border-grey-100 rounded">
                <div class="grid grid-cols-6 gap-y-16 md:gap-y-0">
                    <div class="col-span-6 md:col-span-3">
                        <div class="flex flex-col justify-between gap-y-4 w-full">
                            <p class="text-gray-600 text-xl font-medium">جزییات سفارش</p>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">جمع کل</p>
                                <p class="text-xl font-bold">20000</p>
                            </div>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه ارسال</p>
                                <p class="text-xl font-bold">14000</p>
                            </div>
                            <hr class="w-full">
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه کل</p>
                                <p class="text-xl font-bold">34000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 md:col-span-3">
                      <div class="flex flex-col items-center justify-center h-full gap-y-10 w-full">
                           <div class="flex flex-row items-center gap-x-2">
                               <input class="rounded p-3 border-gray-200 checked:bg-red-500 checked:hover:bg-red-700 checked:ring-red-500 focus:ring-red-500 checked:focus:bg-red-500" type="checkbox" name="" id="">
                               <p class="text-lg font-medium">من کد تخفیف دارم!</p>
                           </div>
                           <a href="" class="py-2 px-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white">پرداخت</a>
                           <a href="" class="flex flex-row items-center gap-x-1 text-xl font-bold text-gray-700 hover:text-red-500">
                                  <p>ادامه دادن خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                  </svg>
                                </a>
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
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/cart.blade.php ENDPATH**/ ?>