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
    <div class="flex flex-col items-center justify-center w-full h-full">
        <div class="flex items-center justify-center flex-shrink">
            <img src="https://demo.themesberg.com/windster-pro/images/illustrations/404.svg" alt="">
        </div>
        <div class="flex flex-col justify-center items-center space-y-2">
            <h1 class="text-2xl md:text-6xl font-black p-2">Page not found</h1>
            <p class="text-lg md:text-2xl text-center text-gray-500 p-2">Oops! Looks like you followed a bad link. If you think this is a problem with us, please tell us.</p>
            <a class="flex flex-row items-center px-6 py-3 bg-teal-500 hover:bg-teal-800 focus:border-teal-200 focus:border-4 text-white font-bold rounded-lg text-lg" href="#">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
               <span>Go back home</span>
    
            </a>
        </div>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\Wcommerce\resources\views/errors/404.blade.php ENDPATH**/ ?>