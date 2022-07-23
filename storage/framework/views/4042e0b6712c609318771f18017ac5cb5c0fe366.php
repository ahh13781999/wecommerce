<div>
    <div class="w-full h-full container mx-auto py-4 lg:py-10 px-4 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg">پرداخت</p>
        </div>
        <form wire:submit.prevent="placeOrder" class="flex flex-col justify-between w-full gap-y-16 mt-8">
            <div class="flex flex-col justify-between gap-y-8 w-full">
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">نام</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="firstname">
                        <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">نام
                            خانوادگی</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="lastname">
                        <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">ایمیل</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="email" wire:model="email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">شماره
                            تلفن</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="line">
                        <?php $__errorArgs = ['line'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">آدرس</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="address">
                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">استان</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="province">
                        <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                </div>
                <div class="flex md:flex-row flex-col justify-between gap-x-12 gap-y-8 w-full">
                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">شهر</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="city">
                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="space-y-4 md:space-y-2 w-full">
                        <label class="text-lg font-semibold after:content-['*'] after:text-red-500" for="">کد
                            پستی</label>
                        <input
                            class="w-full border-gray-200 rounded py-3 px-4 focus:ring-red-500 focus:ring-4 focus:border-transparent"
                            type="text" wire:model="zipcode">
                        <?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm font-bold"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                </div>
            </div>

            <div class="px-6 py-16 bg-gray-50 border-2 border-grey-100 rounded">
                <div class="grid grid-cols-6 gap-y-16 md:gap-y-0">
                    <?php if(session()->has('checkout')): ?>
                    <div class="col-span-12">
                        <div class="flex flex-col justify-between gap-y-4 w-full">
                            <p class="text-gray-800 text-xl font-medium">جزییات سفارش</p>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">جمع کل</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(session()->get('checkout')['subtotal'])); ?> تومان</p>
                            </div>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه ارسال</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(session()->get('checkout')['tax'])); ?> تومان</p>
                            </div>
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">تخفیف</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(session()->get('checkout')['discount'])); ?> تومان</p>
                            </div>
                            <hr class="w-full">
                            <div class="flex flex-row justify-between w-full">
                                <p class="text-gray-600 text-lg font-medium">هزینه کل</p>
                                <p class="text-xl font-bold"><?php echo e(number_format(session()->get('checkout')['total'])); ?> تومان</p>
                            </div>
                            <div class="self-center">
                                <button
                                    class="py-2 px-6 mt-6 bg-red-500 hover:bg-gray-900 font-semibold text-lg text-white">ثبت
                                    سفارش</button>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <p class="font-bold text-center col-span-12">کالایی در سبد خرید نیست!</p>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/checkout.blade.php ENDPATH**/ ?>