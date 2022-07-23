<?php if (isset($component)) { $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73)): ?>
<?php $component = $__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73; ?>
<?php unset($__componentOriginal42fcf4fee084002fda68648e3d9e7bc1c1cb3d73); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\Wcommerce\resources\views/dashboard.blade.php ENDPATH**/ ?>