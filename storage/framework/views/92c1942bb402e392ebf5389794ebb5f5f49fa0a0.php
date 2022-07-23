<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="w-full h-full font-sans text-gray-900 antialiased">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.user-header','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <div class="w-full h-screen overflow-hidden container mx-auto py-4 lg:py-10 px-6 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg">ورود</p>

        </div>
        <div class="w-full h-full flex flex-col justify-center items-center">
            <div class="border rounded shadow-xl p-8 w-full lg:w-1/2 xl:w-1/3">
                <form class="flex flex-col gap-y-8" action="<?php echo e(route('login')); ?>" method="post">
                    <p class="font-semibold text-gray-700 text-xl">وارد اکانت خود شوید</p>
                    <?php echo csrf_field(); ?>
                    <fieldset class="flex flex-col gap-y-2">
                        <label class="w-full text-gray-600 font-medium text-lg" for="">ایمیل</label>
                        <input name="email"
                            class="border-gray-200 focus:border-transparent hover:ring-2 hover:ring-red-500 focus:ring-4 focus:ring-red-500"
                            type="email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-500">*<?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="flex flex-col gap-y-2">
                        <label class="w-full text-gray-600 font-medium text-lg" for="">پسورد</label>
                        <input name="password"
                            class="border-gray-200 focus:border-transparent hover:ring-2 hover:ring-red-500 focus:ring-4 focus:ring-red-500"
                            type="password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-sm text-red-500">*<?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </fieldset>

                    <fieldset class="flex flex-row justify-between">
                        <div class="flex flex-row items-center gap-x-2">
                            <input
                                class="p-2 rounded border-gray-300 focus:ring-red-500 hover:ring-red-500 checked:bg-red-500 checked:focus:bg-red-500 checked:focus:ring-red-500 checked:hover:bg-red-700"
                                type="checkbox" name="" id="">
                            <span class="font-semibold text-sm">مرا به خاطر بسپار</span>
                        </div>
                        <a class="font-semibold text-sm hover:text-red-500" href="">
                            فراموشی پسورد؟
                        </a>
                    </fieldset>
                    <fieldset>
                        <button
                            class="py-3 px-6 bg-red-500 text-white font-semibold text-xl tracking-wider hover:bg-gray-900"
                            type="submit">ورود</button>
                    </fieldset>

                </form>
            </div>
        </div>

    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.user-footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('user-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/auth/login.blade.php ENDPATH**/ ?>