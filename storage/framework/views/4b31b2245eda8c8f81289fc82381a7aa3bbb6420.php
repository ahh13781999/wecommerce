<?php if (isset($component)) { $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="w-full h-screen overflow-hidden container mx-auto py-4 lg:py-10 px-6 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg">سپاس گذاریم</p>

        </div>
        <div class="w-full h-full flex flex-col justify-center items-center text-center gap-y-6">
                 <h2 class="text-xl lg:text-4xl font-bold text-gray-600">از خرید شما سپاس گزاریم</h2>
                 <p class="text-base lg:text-lg font-semibold text-gray-600">جزییات سفارش برای شما ایمیل شد</p>
                 <button class="px-8 py-4 bg-red-500 font-semibold text-lg text-white hover:bg-gray-900"> <a href="">به خریدتان ادامه دهید</a></button>
        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73)): ?>
<?php $component = $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73; ?>
<?php unset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/thank-you.blade.php ENDPATH**/ ?>