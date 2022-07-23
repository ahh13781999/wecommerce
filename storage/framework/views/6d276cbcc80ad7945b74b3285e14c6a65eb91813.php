<div>
    <div x-data class="w-full h-full container mx-auto py-4 lg:py-10 px-4 lg:px-12">
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

                <div class="col-span-12 lg:col-span-3 flex flex-col items-start gap-y-8">
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold pb-4">دسته بندی ها</h2>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li
                                class="flex flex-row justify-between text-lg font-medium text-gray-500 hover:text-red-500">
                                <a href="<?php echo e(route('category',['slug' => $category->category_slug])); ?>"><?php echo e($category->category_name); ?></a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold py-4">برند ها</h2>
                        <li class="flex flex-row justify-between items-center">
                            <p class="text-lg font-bold">
                                Samsung
                            </p>
                            <input
                                class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                type="checkbox" name="" id="">
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <p class="text-lg font-bold">
                                Lenovo
                            </p>
                            <input
                                class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                type="checkbox" name="" id="">
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <p class="text-lg font-bold">
                                Huawei
                            </p>
                            <input
                                class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                type="checkbox" name="" id="">
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <p class="text-lg font-bold">
                                Dell
                            </p>
                            <input
                                class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                type="checkbox" name="" id="">
                        </li>

                    </ul>
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold py-4">رنگ</h2>
                        <li class="flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                    type="checkbox" name="" id="">
                                <p class="text-lg font-bold">
                                    آبی
                                </p>
                            </div>
                            <span class="rounded-full p-2 bg-blue-600">
                            </span>
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                    type="checkbox" name="" id="">
                                <p class="text-lg font-bold">
                                    سفید
                                </p>
                            </div>
                            <span class="rounded-full p-2 bg-white border">
                            </span>
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                    type="checkbox" name="" id="">
                                <p class="text-lg font-bold">
                                    سیاه
                                </p>
                            </div>
                            <span class="rounded-full p-2 bg-black">
                            </span>
                        </li>
                        <li class="flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                    type="checkbox" name="" id="">
                                <p class="text-lg font-bold">
                                    طلایی
                                </p>
                            </div>
                            <span class="rounded-full p-2 bg-yellow-600">
                            </span>
                        </li>

                    </ul>
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold py-4">محدوده قیمت</h2>
                        <input type="range" name="" id="">
                    </ul>
                    <ul class="flex flex-col gap-y-4 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold">
                            سایز
                        </h2>
                        <div class="flex flex-row items-center gap-x-1 w-full">
                            <a class="border p-2 rounded-full font-medium whitespace-nowrap hover:bg-red-500 hover:text-white"
                                href="">کوچک</a>
                            <a class="border p-2 rounded-full font-medium whitespace-nowrap hover:bg-red-500 hover:text-white"
                                href="">متوسط</a>
                            <a class="border p-2 rounded-full font-medium whitespace-nowrap hover:bg-red-500 hover:text-white"
                                href="">بزرگ</a>
                            <a class="border p-2 rounded-full font-medium whitespace-nowrap hover:bg-red-500 hover:text-white"
                                href="">خیلی بزرگ</a>
                        </div>
                    </ul>
                    <ul class="flex flex-col w-full justify-between">
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

                <div class="col-span-12 lg:col-span-9">
                    <div class="flex flex-col items-center px-4 w-full">
                        <div class="relative p-6 border">
                            <img class="" src="https://i.ibb.co/B6DgwF3/14s.jpg" alt="">
                            <div class="absolute top-0 w-full h-full">
                                <div class="flex flex-col justify-between gap-y-6">
                                    <p class="text-4xl font-bold">انواع لپ تاپ</p>
                                    <h3 class="text-xl font-bold text-red-500">با قیمت مناسب</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-200 py-2 px-4 w-full mt-6">
                            <div class="flex flex-row items-center justify-between">
                                <h2 class="text-xl font-semibold"><?php echo e($category->category_name); ?></h2>
                                <div class="flex flex-row items-center gap-x-4">

                                    <div class="flex flex-row items-center gap-x-2">
                                        <a wire:click.prevent="$set('sortField','regular_price')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900"
                                            href="">ارزان‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','regular_price')"
                                            x-on:click="$wire.set('sortOrder','DESC')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900"
                                            href="">گران‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','created_at')"
                                            x-on:click="$wire.set('sortOrder','DESC')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900"
                                            href="">جدید‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','featured')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900"
                                            href="">محبوب‌ترین</a>
                                    </div>

                                    <div>
                                        <select wire:model="paginateNumber"
                                            class="rounded border-gray-200 focus:border-none focus:ring-red-500 focus:ring-2 font-medium">
                                            <option selected disabled value="">نمایش</option>
                                            <option value="1">12 تا</option>
                                            <option value="2">16 تا</option>
                                            <option value="20">20 تا</option>
                                            <option value="24">24 تا</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php echo e(dd($products)); ?>

                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 py-8 px-4">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 bg-white cursor-pointer rounded">
                                <div class="flex flex-col items-center gap-y-2">
                                    <div class="py-4">
                                        <img class="w-40 h-40 rounded"
                                            src="<?php echo e(asset('product_thumbnail/' . $product->thumbnail_image)); ?>" alt="">
                                    </div>
                                    <h2 class="text-xl font-light py-2"><?php echo e($product->name); ?></h2>
                                    <p class="text-lg font-bold"><?php echo e($product->regular_price); ?> تومان</p>
                                    <button
                                        wire:click.prevent="Store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)"
                                        class="w-full text-base font-medium text-gray-600 border-2 bg-gray-200 py-2 rounded hover:bg-red-500 hover:text-white">اضافه
                                        کردن به سفید</button>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>


            </div>
        </div>


    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/category.blade.php ENDPATH**/ ?>