<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-gray-50 w-full h-screen overflow-y-auto">
        <div class="flex flex-col items-center justify-center space-y-8 w-full h-full my-0 md:my-8">
            <a class="flex flex-row space-x-4 items-center justify-center" href="#">
                <img src="https://demo.themesberg.com/windster/images/logo.svg" alt="">
                <span class="text-2xl font-bold">داشبورد ادمین</span>
            </a>
            <div
                class="bg-white rounded-lg border-2 border-gray-100 shadow-md shadow-gray-100 py-8 px-6 md:py-20 md:px-20 xl:w-3/5 lg:w-2/3 md:w-4/5 w-5/6">
                <div class="flex flex-col space-y-8">
                    <h2 class="text-2xl md:text-4xl font-extrabold">لطفا وارد اکانت خود شوید</h2>
                    <form class="space-y-6" method="POST" action="<?php echo e(route('admin.verify')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="flex flex-col space-y-2">
                            <label class="font-normal md:font-bold text-base md:text-lg after:content-['*'] after:text-red-500 after:mr-1" for="">ایمیل</label>
                            <input name="email"
                                class="rounded-lg py-2 md:py-3 border-gray-200 bg-gray-50 focus:border-teal-500 focus:ring-teal-500 focus:ring-2"
                                type="email" placeholder="example@email.com">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm font-medium"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                        <div class="flex flex-col space-y-2">
                            <label class="font-normal md:font-bold text-base md:text-lg after:content-['*'] after:text-red-500 after:mr-1" for="">پسورد</label>
                            <input name="password"
                                class="rounded-lg py-2 md:py-3 border-gray-200 bg-gray-50 focus:border-teal-500 focus:ring-teal-500 focus:ring-2"
                                type="password" placeholder="******">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-red-500 text-sm font-medium"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-2">
                                <input
                                    class="rounded border-gray-200 h-5 w-5 checked:bg-teal-500 hover:bg-teal-700 focus:hover:bg-teal-700 checked:focus:bg-teal-500 checked:hover:bg-teal-700 focus:bg-teal-700 bg-gray-50 focus:ring-3 focus:ring-teal-200"
                                    type="checkbox" name="" id="">
                                <span class="text-base md:text-lg font-bold text-gray-500">مرا به خاطر بسپار</span>
                            </div>
                            <div class="">
                                <a class="text-base md:text-lg font-bold text-teal-500 hover:underline" href="#">پسوردتان را فراموش کرده اید؟</a>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="py-2 px-3 md:py-4 md:px-6 rounded-lg bg-teal-500 hover:bg-teal-800 focus:border-4 focus:border-teal-200 text-white text-lg md:text-xl font-bold">ورود</button>
                        </div>
                        <div class="text-base md:text-lg font-bold space-x-1">
                            <span class="text-gray-500">هنور ثبت نام نکرده اید؟</span>
                            <a class="text-teal-500 hover:underline" href="<?php echo e(route('admin.register')); ?>">ساخت اکانت</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/auth/admin-login.blade.php ENDPATH**/ ?>