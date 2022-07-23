<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="h-screen w-full bg-gray-50">
        <div class="flex flex-col md:flex-row justify-center items-center w-full h-full">
            <div class="flex flex-col xl:px-16 lg:px-8 md:px-6 px-6 items-center md:items-start justify-center space-y-4 flex-shrink order-2 md:order-1">
                <h2 class="text-center md:text-left text-2xl md:text-3xl lg:text-5xl font-black">
                    Something has gone seriously wrong
                </h2>
                <p class="text-center md:text-left text-gray-500 text-xl">
                    It's always time for a coffee break. We should be back by the time you finish your coffee.
                </p>
                <a class="flex flex-row justify-center items-center px-8 py-4 rounded-lg text-white font-bold text-lg bg-teal-500 hover:bg-teal-800 focus:border-teal-200 focus:border-4"  href="#">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Go back home</span>
                </a>
            </div>
            <div class="flex items-center justify-center xl:px-16 lg:px-8 md:px-4 px-6 flex-shrink order-1 md:order-2">
                <img src="https://demo.themesberg.com/windster-pro/images/illustrations/500.svg" alt="">
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/errors/500.blade.php ENDPATH**/ ?>