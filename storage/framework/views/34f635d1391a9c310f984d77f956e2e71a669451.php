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
            <p class="font-semibold text-base lg:text-lg">لیست آرزو</p>
        </div>

        <div class="flex flex-col justify-between w-full my-16">
            <div class="grid grid-cols-12 gap-y-12">
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                    <div class="flex flex-col items-center justify-between gap-y-2">
                        <div class="relative">
                            <img class="rounded w-56 h-56" src="https://picsum.photos/536/354" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title="" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                              <div class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold">
                                  <p>اضافه به سبد خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg>
                              </div>
                        </div>
                        <h2 class="text-xl font-bold py-2">لپ تاپ لنوو سفید</h2>
                        <p class="text-gray-600 text-lg font-bold">2000 تومان</p>
                        <button class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف کردن از لیست</button>
                    </div>
                </div>
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                    <div class="flex flex-col items-center justify-between gap-y-2">
                        <div class="relative">
                            <img class="rounded w-56 h-56" src="https://picsum.photos/536/354" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title="" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                              <div class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold">
                                  <p>اضافه به سبد خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg>
                              </div>
                        </div>
                        <h2 class="text-xl font-bold py-2">لپ تاپ لنوو سفید</h2>
                        <p class="text-gray-600 text-lg font-bold">2000 تومان</p>
                        <button class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف کردن از لیست</button>
                    </div>
                    
                </div>
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                    <div class="flex flex-col items-center justify-between gap-y-2">
                        <div class="relative">
                            <img class="rounded w-56 h-56" src="https://picsum.photos/536/354" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title="" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                              <div class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold">
                                  <p>اضافه به سبد خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg>
                              </div>
                        </div>
                        <h2 class="text-xl font-bold py-2">لپ تاپ لنوو سفید</h2>
                        <p class="text-gray-600 text-lg font-bold">2000 تومان</p>
                        <button class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف کردن از لیست</button>
                    </div>
                    
                </div>
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                    <div class="flex flex-col items-center justify-between gap-y-2">
                        <div class="relative">
                            <img class="rounded w-56 h-56" src="https://picsum.photos/536/354" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title="" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                              <div class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold">
                                  <p>اضافه به سبد خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg>
                              </div>
                        </div>
                        <h2 class="text-xl font-bold py-2">لپ تاپ لنوو سفید</h2>
                        <p class="text-gray-600 text-lg font-bold">2000 تومان</p>
                        <button class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف کردن از لیست</button>
                    </div>
                    
                </div>
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12">
                    <div class="flex flex-col items-center justify-between gap-y-2">
                        <div class="relative">
                            <img class="rounded w-56 h-56" src="https://picsum.photos/536/354" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title="" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                              </svg>
                              <div class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold">
                                  <p>اضافه به سبد خرید</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                  </svg>
                              </div>
                        </div>
                        <h2 class="text-xl font-bold py-2">لپ تاپ لنوو سفید</h2>
                        <p class="text-gray-600 text-lg font-bold">2000 تومان</p>
                        <button class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف کردن از لیست</button>
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
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/wishlist.blade.php ENDPATH**/ ?>