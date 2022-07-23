<div x-data="{ chosenImage: '', imageModal: false }">
    <div class="w-full h-full container mx-auto py-4 lg:py-10 px-4 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg"><?php echo e($product->subcategory->subcategory_name); ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg"><?php echo e($product->name); ?></p>
        </div>
        <div class="flex flex-col justify-between w-full mt-8 gap-y-8">
            <div class="grid grid-cols-12 gap-x-6">
                <div class="col-span-12 lg:col-span-9 flex flex-col justify-between gap-y-16">
                    <div class="grid grid-cols-6 gap-y-10">
                        <div class="col-span-6 lg:col-span-3 order-2 lg:order-1">
                            <div class="flex flex-col gap-y-10 justify-between">
                                <p class="border-b-2 py-6 text-2xl font-semibold"><?php echo e($product->name); ?></p>
                                <ul
                                    class="flex flex-col justify-between gap-y-2 py-4 list-inside list-disc text-xl font-normal text-gray-600">
                                    <?php $__currentLoopData = $product->attributeValues->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><span class="text-black font-semibold"><?php echo e($item->ProductAttribute->name); ?>

                                                : </span><?php echo e($item->value); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php if($product->off_price): ?>
                                    <p class="text-xl font-bold">
                                        <span>قیمت قبل از تخفیف</span>
                                        <span
                                            class="text-2xl font-black line-through"><?php echo e(number_format($product->regular_price)); ?></span>
                                        <span>تومان</span>
                                    </p>
                                    <p class="mx-auto text-3xl font-bold text-red-500">
                                        <span>قیمت بعد از تخفیف</span>
                                        <?php echo e(number_format($product->off_price)); ?>

                                        <span>تومان</span>
                                    </p>
                                <?php else: ?>
                                    <p class="text-3xl font-black"><?php echo e(number_format($product->regular_price)); ?>

                                        <span>تومان</span>
                                    </p>
                                <?php endif; ?>
                                <p class="text-lg font-semibold text-gray-600">موجودیت:

                                    <?php if($product->stock_status == 'in_stock'): ?>
                                        <span class="text-green-500">موجود</span>
                                    <?php else: ?>
                                        <span class="text-red-500">ناموجود</span>
                                    <?php endif; ?>
                                </p>
                                <?php if($product->quantity <= 10): ?>
                                    <div class="text-red-800 text-lg">
                                        <p>فقط <?php echo e($product->quantity); ?> عدد در انبار مانده !</p>
                                    </div>
                                <?php endif; ?>
                                <div class="flex flex-col items-center gap-y-2">
                                    <p class="text-lg font-semibold text-gray-500">تعداد:</p>
                                    <div class="flex flex-row items-center w-fit gap-x-1 border-2 p-2">
                                        <input wire:model="qty"
                                            class="border-none w-20 focus:border-transparent focus:ring-transparent text-center text-xl font-bold"
                                            type="text" value="1">
                                        <div wire:click.prevent="decreaseQuantity"
                                            class="p-1 border border-gray-300 hover:bg-red-500 hover:text-white cursor-pointer rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                            </svg>
                                        </div>
                                        <div wire:click.prevent="increaseQuantity"
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
                                    wire:click.prevent="Store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->off_price ?? $product->regular_price); ?>)"
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
                                    <?php if($wishListItems->contains($product->id)): ?>
                                        <a wire:click.prevent="removeFromWishlist(<?php echo e($product->id); ?>)" href="#"
                                            class="flex flex-row items-center gap-x-1 text-red-500 hover:text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p>حذف کردن از لیست آرزو</p>
                                        </a>
                                    <?php else: ?>
                                        <a wire:click.prevent="addToWishlist(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->off_price ?? $product->regular_price); ?>)"
                                            href="#"
                                            class="flex flex-row items-center gap-x-1 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="ّ0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p>افزودن به لیست آرزو</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 lg:col-span-3 flex flex-col items-center gap-y-16 order-1 lg:order-2">
                            <div
                                class="rounded shadow-xl border-2 bg-white hover:scale-125 transition duration-500 delay-150 ease-linear cursor-pointer">
                                <img class="h-96 w-96"
                                    src="<?php echo e(asset('product_thumbnail/' . $product->thumbnail_image)); ?>"
                                    alt="">
                            </div>
                            <ul class="flex flex-row items-center justify-evenly w-full">
                                <?php $__currentLoopData = $product->images->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li
                                        class="shadow-xl border-2 cursor-pointer rounded hover:ring-2 hover:ring-red-500 focus:border-red-500">
                                        <img x-on:click.prevent="chosenImage = $el.src; imageModal = true"
                                            class="h-28 w-28"
                                            src="<?php echo e(asset('product_images/' . $product->name . '/' . $image->image_path)); ?>"
                                            alt="<?php echo e($product->name); ?>">
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div x-data={tab:1} class="flex flex-col gap-y-1">
                        <div @keydown.right="$focus.wrap().previous()" @keydown.left="$focus.wrap().next()"
                            class="flex flex-col text-center md:flex-row gap-x-2 w-full">
                            <a x-on:click="tab=1" :class="tab == 1 && 'border-gray-900'"
                                class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold focus:border-transparent focus:ring-2 focus:ring-red-500"
                                href="#introduction">معرفی</a>
                            <a x-on:click="tab=2" :class="tab == 2 && 'border-gray-900'"
                                class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold focus:border-transparent focus:ring-2 focus:ring-red-500"
                                href="#properties">مشخصات</a>
                            <a x-on:click="tab=3" :class="tab == 3 && 'border-gray-900'"
                                class="px-4 py-2 rounded bg-gray-100 border-2 text-lg font-semibold focus:border-transparent focus:ring-2 focus:ring-red-500"
                                href="#comments">نظرات</a>
                        </div>
                        <div class="p-6 border-2">
                            <div x-show="tab == 1" class="">
                                <p class="font-medium">
                                    <?php echo e($product->description); ?>

                                </p>
                            </div>
                            <div x-show="tab == 2">
                                <table class="border-2 flex flex-col w-full">
                                    <?php $__currentLoopData = $product->attributeValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="border-b-2 flex flex-row items-center justify-between w-full py-2">
                                            <th class="border-l-2 text-center basis-1/2">
                                                <p class="text-lg font-semibold"><?php echo e($item->ProductAttribute->name); ?>

                                                </p>
                                            </th>
                                            <td class="text-center basis-1/2">
                                                <p class="text-base font-medium"><?php echo e($item->value); ?></p>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                            <div x-show="tab == 3" class="flex flex-col justify-between gap-y-16">
                                <h2 class="text-xl font-bold mt-6 text-orange-900"><?php echo e($product->reviews->count()); ?>

                                    نظر</h2>
                                <?php if($product->reviews->count() != 0): ?>
                                    <ul class="flex flex-col justify-between gap-y-4 px-2 md:px-6">
                                        <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li
                                                class="flex flex-row items-center rounded border-rose-200 border-2 p-2 md:p-6 gap-x-4 hover:bg-rose-100">
                                                <img class="w-24 h-24 rounded"
                                                    src="https://picsum.photos/seed/picsum/200/300" alt="">
                                                <div class="flex flex-col justify-between gap-y-6 w-full">
                                                    <div class="flex flex-row items-center justify-between">
                                                        <h2 class="text-xl font-bold text-cyan-700">
                                                            <?php echo e($review->name); ?></h2>
                                                        <p class="text-lg font-medium text-gray-500">
                                                            <?php echo e($review->created_at->diffForHumans()); ?></p>
                                                    </div>
                                                    <p class="text-lg font-medium text-gray-700">
                                                        <?php echo e($review->comment); ?></p>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php else: ?>
                                    <p class="font-bold text-lg text-slate-600">هنوز نظری برای این محصول ثبت نشده است.
                                    </p>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <form wire:submit.prevent="addReview"
                                        class="flex flex-col justify-between gap-y-8 mt-4 p-2 md:p-6">
                                        <p class="text-lg font-semibold text-blue-800">لطفا بازخوردتان را درباره ی این
                                            محصول با ما در اشتراک بزارید.</p>
                                        <?php if(session()->has('message')): ?>
                                            <p class="my-4 py-2 px-2 rounded bg-green-400 font-bold text-white">
                                                <?php echo e(session()->get('message')); ?></p>
                                        <?php endif; ?>
                                        <fieldset class="flex flex-col gap-y-2">
                                            <label
                                                class="text-lg font-semibold after:content-['*'] after:text-red-500 after:mr-2"
                                                for="">نظر</label>
                                            <textarea wire:model.lazy="comment" class="rounded border-gray-200 focus:border-none focus:ring-2 focus:ring-red-500"
                                                name="" id="" cols="30" rows="10"></textarea>
                                            <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-sm text-red-500 font-semibold before:content-['*']">
                                                    <?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </fieldset>
                                        <fieldset>
                                            <button
                                                class="bg-red-500 text-white hover:bg-gray-900 hover:text-white font-semibold text-xl py-4 px-8">ثبت</button>
                                        </fieldset>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3 flex flex-col gap-y-16">
                    <ul class="flex flex-col justify-between">
                        <li class="flex flex-row items-center justify-start gap-x-2 py-12 border-b-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500"
                                viewBox="0 0 20 20" fill="currentColor">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500"
                                viewBox="0 0 20 20" fill="currentColor">
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
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-4">
                        <h2 class="text-xl font-semibold py-4">کالاهای تخفیف دار</h2>
                        <div class="owl-carousel owl-two" wire:ignore>
                            <?php $__currentLoopData = $discountedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex flex-col items-center">
                                    <a class="inline-block my-2 relative"
                                        href="<?php echo e(route('detail', [$item->slug])); ?>">
                                        <img class="h-44 w-44 rounded transition duration-200 hover:scale-110"
                                            src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                            alt="">
                                        <span
                                            class="absolute text-white font-bold rounded-full bg-rose-700 py-2 px-2 top-0 left-0">تخفیف</span>
                                    </a>
                                    <p class="font-semibold text-lg mb-2"><a
                                            href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a></p>
                                    <p class="line-through text-xl"><?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                    <p class="text-red-500 font-bold text-lg"><?php echo e(number_format($item->off_price)); ?>

                                        تومان</p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </ul>
                    <ul class="flex flex-col justify-between">
                        <h2 class="border-b-2 py-6 text-xl font-bold my-2">کالاهای پربازدید</h2>
                        <?php $__currentLoopData = $selectedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                                <div class="border-2 rounded shadow-lg flex-shrink-0">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>"><img class="h-24 w-24 rounded"
                                            src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                            alt="<?php echo e($item->name); ?>"></a>
                                </div>
                                <div class="flex flex-col items-start h-full justify-center gap-y-2">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>">
                                        <p class="text-lg font-semibold text-gray-400"><?php echo e($item->name); ?></p>
                                    </a>
                                    <?php if($item->off_price): ?>
                                        <p class="text-sm font-bold line-through text-gray-500">
                                            <?php echo e(number_format($item->regular_price)); ?> تومان
                                        </p>
                                        <p class="font-bold text-sm text-red-600">
                                            <?php echo e(number_format($item->off_price)); ?> تومان
                                        </p>
                                    <?php else: ?>
                                        <p class="text-base font-bold"><?php echo e(number_format($item->regular_price)); ?>

                                            تومان
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    

    <div x-show="imageModal" x-trap.inert.noscroll="imageModal"
        x-transition:enter="ease-out delay-200 duration-500" x-transition:enter-start="opacity-0 scale-70"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in delay-200 duration-500"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-70"
        class="bg-gray-800 h-full w-full z-40 top-0 fixed bg-opacity-80">
        <div class="flex flex-col items-center justify-center h-full">
            <svg x-on:click="imageModal = false" class="w-8 h-8 cursor-pointer text-red-500 absolute top-0 right-0"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <img class="h-[600px] w-[700px]" :src="chosenImage" alt="">
        </div>
    </div>

    

    <?php $__env->startPush('js'); ?>
        <script>
            $(document).ready(function() {
                $(".owl-two").owlCarousel({
                    rtl: true,
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    touchDrag: true,
                    autoplayHoverPause: true,
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/livewire/user/detail.blade.php ENDPATH**/ ?>