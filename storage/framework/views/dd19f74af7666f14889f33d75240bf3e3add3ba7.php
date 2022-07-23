<div>
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
                <?php if(session()->has('message')): ?>
                    <p class="bg-green-300 mb-6 py-2 px-4 rounded font-bold"><?php echo e(session()->get('message')); ?></p>
                <?php endif; ?>

                <?php if(Cart::instance('cart')->count() > 0): ?>

                    <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li
                            class="flex flex-col md:flex-row justify-between items-center text-center text-gray-500 border-y-2 border-gray-100 gap-y-6 md:gap-y-0 py-6 px-0 lg:px-4 w-full h-full">
                            <div class="basis-1/6 flex-1">
                                <img class="md:w-16 md:h-16 w-32 h-32 rounded shadow-lg"
                                    src="<?php echo e(asset('product_thumbnail/'.$product->model->thumbnail_image)); ?>" alt="">
                            </div>
                            <div class="basis-1/6 flex-1">
                                <a class="text-lg font-semibold"
                                    href="<?php echo e(route('detail', ['slug' => $product->model->slug])); ?>"><?php echo e($product->name); ?></a>
                            </div>
                            <div class="basis-1/6 flex-1">
                                <p class="text-lg font-bold text-gray-700"><?php echo e(number_format($product->price)); ?> تومان</p>
                            </div>
                            <div class="flex flex-col items-center gap-y-2 basis-1/6 flex-1">
                                <div class="flex flex-row items-center py-2 px-2 border-2 rounded gap-x-2">
                                    <input value="<?php echo e($product->qty); ?>"
                                        class="border-none w-16 text-center focus:border-none focus:ring-transparent text-xl font-bold"
                                        type="text">
                                    <a wire:click.prevent="decreaseQuantity('<?php echo e($product->rowId); ?>')"
                                        class="bg-gray-300 hover:bg-red-500 text-white rounded-full p-2" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                                        </svg>
                                    </a>
                                    <a wire:click.prevent="increaseQuantity('<?php echo e($product->rowId); ?>')"
                                        class="bg-gray-500 hover:bg-red-500 text-white rounded-full p-2" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </a>
                                </div>
                                <a wire:click.prevent="saveForLater('<?php echo e($product->rowId); ?>')" href="#" class="font-bold text-center text-red-500 hover:text-black">ذخیره برای بعدا</a>
                            </div>
                            <div class="basis-1/6 flex-1">
                                <p class="text-lg font-bold text-gray-700"><?php echo e(number_format($product->subtotal)); ?> تومان</p>
                            </div>
                            <div class="hidden md:block basis-1/6 flex-1">
                                <a wire:click.prevent="destory('<?php echo e($product->rowId); ?>')" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hover:text-red-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div class="block md:hidden">
                                <button wire:click.prevent="destory('<?php echo e($product->rowId); ?>')"
                                    class="px-6 py-2 text-xl font-semibold text-gray-500 bg-gray-200 border border-gray-300 hover:bg-red-500 hover:text-white">
                                    حذف از سبد خرید
                                </button>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p class="text-lg font-bold text-gray-500">کالایی در سبد خرید موجود نمی باشد.</p>
                <?php endif; ?>
            </ul> 

            <?php if(Cart::instance('cart')->count() > 0): ?>
            <div class="px-6 py-16 bg-gray-50 border-2 border-grey-100 rounded">
                <div class="grid grid-cols-6 gap-y-16 md:gap-y-0">
                    <div class="col-span-6 md:col-span-2">
                        <div class="flex flex-col justify-between gap-y-4 w-full">
                            <p class="text-gray-600 text-xl font-medium">جزییات سفارش</p>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">جمع کل</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(Cart::subtotal())); ?> تومان</p>
                            </div>
                            <?php if(session()->has('coupon')): ?>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium flex flex-row items-center gap-x-1">تخفیف(<span class="font-bold text-gray-500"><?php echo e(session()->get('coupon')['code']); ?></span>) 
                                    <svg wire:click.prevent="removeCoupon" title="حذف تخفیف"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                </p>
                                <p class="text-xl font-bold"><?php echo e(number_format($discount)); ?> تومان</p>
                            </div> 
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه ارسال</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(Cart::tax())); ?> تومان</p>
                            </div>
                            <hr class="w-full">
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه کل</p>
                                <p class="text-xl font-bold"><?php echo e(number_format($totalAfterDiscount)); ?> تومان</p>
                            </div>
                            <?php else: ?>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه ارسال</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(Cart::tax())); ?> تومان</p>
                            </div>
                            <hr class="w-full">
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه کل</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(Cart::total())); ?> تومان</p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <div x-data="{couponCode : false}" class="flex flex-col items-center justify-center h-full gap-y-10 w-full">
                            <?php if(!session()->has('coupon')): ?>
                           <div class="flex flex-col items-center justify-center gap-y-6">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="rounded p-3 border-gray-200 checked:bg-red-500 checked:hover:bg-red-700 checked:ring-red-500 focus:ring-red-500 checked:focus:bg-red-500"
                                    type="checkbox" x-model="couponCode">
                                <p class="text-lg font-medium">من کد تخفیف دارم!</p>
                            </div>
                            <form x-show="couponCode" wire:submit.prevent="applyCouponCode" class="flex flex-col items-center gap-y-4" class="">
                                 <input wire:model="couponCode" class="border-gray-200 rounded focus:border-gray-200 focus:ring-transparent" placeholder="کد تخفیف" type="text">
                                 <?php $__errorArgs = ['couponCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <p class="text-red-500 text-sm font-bold px-2 py-1">
                                     <?php echo e($message); ?>

                                 </p>
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                 <button class="py-2 px-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white">اعمال تخفیف</button>
                                 <?php if(session()->has('coupon_message')): ?>
                                     <p class="text-white bg-red-500 font-bold">
                                         <?php echo e(session()->get('coupon_message')); ?>

                                     </p>
                                 <?php endif; ?>

                            </form>
                        </div>
                       <?php endif; ?>
                            <a href="#" wire:click.prevent="checkout"
                                class="py-2 px-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white">پرداخت</a>
                            <a href="<?php echo e(url()->previous()); ?>"
                                class="flex flex-row items-center gap-x-1 text-xl font-bold text-gray-700 hover:text-red-500">
                                <p>ادامه دادن خرید</p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <div class="flex flex-col items-center justify-center h-full gap-y-4 w-full">
                            <a wire:click.prevent="destoryAll()" href="#"
                                class="py-2 px-6 bg-gray-400 hover:bg-gray-900 font-semibold text-lg text-white whitespace-nowrap">پاکسازی
                                سبد خرید</a>
                            <a href=""
                                class="py-2 px-6 bg-gray-400 hover:bg-gray-900 font-semibold text-lg text-white whitespace-nowrap">آپدیت
                                سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <ul class="flex flex-col justify-between">
                <h3 class="text-2xl font-bold mb-10">محصولات ذخیره شده</h3>
                <?php if(session()->has('message_1')): ?>
                    <p class="bg-green-300 mb-6 py-2 px-4 rounded font-bold"><?php echo e(session()->get('message')); ?></p>
                <?php endif; ?>

                <?php if(Cart::instance('saveForLater')->count() > 0): ?>

                    <?php $__currentLoopData = Cart::instance('saveForLater')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li
                            class="flex flex-col md:flex-row justify-between items-center text-gray-500 border-y-2 border-gray-100 gap-y-6 md:gap-y-0 py-6 px-0 lg:px-4">
                            <div class="">
                                <img class="md:w-16 md:h-16 w-32 h-32 rounded shadow-lg"
                                    src="<?php echo e(asset('product_thumbnail/'.$product->model->thumbnail_image)); ?>" alt="">
                            </div>
                            <div class="">
                                <a class="text-lg font-semibold"
                                    href="<?php echo e(route('detail', ['slug' => $product->model->slug])); ?>"><?php echo e($product->name); ?></a>
                            </div>
                            <div class="">
                                <p class="text-lg font-bold text-gray-700"><?php echo e(number_format($product->model->off_price) ?? number_format($product->model->regular_price)); ?> تومان</p>
                            </div>
                            <div class="flex flex-col items-center">
                                <a wire:click.prevent="moveToCart('<?php echo e($product->rowId); ?>')" href="#" class="font-bold text-center text-red-500 hover:text-black">اضافه به لیست خرید</a>
                            </div>
                            <div class="">
                                <p class="text-lg font-bold text-red-700"><?php echo e($product->qty); ?> عدد</p>
                            </div>
                            <div class="hidden md:block">
                                <a wire:click.prevent="destory('<?php echo e($product->rowId); ?>')" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hover:text-red-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div class="block md:hidden">
                                <button wire:click.prevent="destory('<?php echo e($product->rowId); ?>')"
                                    class="px-6 py-2 text-xl font-semibold text-gray-500 bg-gray-200 border border-gray-300 hover:bg-red-500 hover:text-white">
                                    حذف از سبد خرید
                                </button>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p class="text-lg font-bold text-gray-500">کالایی در لیست انتظار موجود نمی باشد.</p>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/cart.blade.php ENDPATH**/ ?>