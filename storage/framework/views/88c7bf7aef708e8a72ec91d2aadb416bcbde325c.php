<div>
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
            <?php if(Cart::instance('wishlist')->count() > 0): ?>
                <div class="grid grid-cols-12 gap-y-12">
                    <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 hover:ring hover:ring-red-300">
                            <div class="flex flex-col items-center justify-between gap-y-2 h-full">
                                <div class="relative">
                                    <img class="rounded w-64 h-64"
                                        src="<?php echo e(asset('product_thumbnail/' . $item->model->thumbnail_image)); ?>" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 absolute top-0 right-0 text-red-500 cursor-pointer" title=""
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div wire:click.prevent="moveProductFromWishlistToCart('<?php echo e($item->rowId); ?>')"
                                        class="absolute flex flex-row justify-between bottom-0 bg-gray-600 bg-opacity-30 w-full text-white p-2 font-bold cursor-pointer hover:bg-opacity-50">
                                        <p>اضافه به سبد خرید</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="gap-y-1 flex flex-col items-center">
                                    <h2 class="text-2xl font-light"><a
                                            href="<?php echo e(route('detail', [$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a>
                                    </h2>
                                    <?php if($item->model->off_price): ?>
                                        <p class="font-medium line-through text-gray-500">
                                            <?php echo e(number_format($item->model->regular_price)); ?> تومان
                                        </p>
                                        <p class="font-bold text-lg text-red-600">
                                            <?php echo e(number_format($item->model->off_price)); ?> تومان
                                        </p>
                                    <?php else: ?>
                                        <p class="text-lg font-bold"><?php echo e(number_format($item->model->regular_price)); ?>

                                            تومان
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <button wire:click.prevent="removeFromWishlist('<?php echo e($item->rowId); ?>')"
                                    class="bg-red-500 text-white text-lg font-semibold py-2 px-4 hover:bg-gray-900">حذف
                                    کردن
                                    از لیست</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
             <?php else: ?>
             <p class="mx-auto text-6xl text-gray-600">کالایی در لیست آرزو نیست!</p>   
            <?php endif; ?>
        </div>
    </div>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/livewire/user/wishlist.blade.php ENDPATH**/ ?>