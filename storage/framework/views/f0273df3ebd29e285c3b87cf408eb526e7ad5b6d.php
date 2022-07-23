<div class="container mx-auto">
    <div class="my-4 border-2 rounded-xl">
        <div class="w-full bg-gray-200 py-4">
            <h2 class="text-xl font-bold text-gray-500 pr-4">سفارشات من</h2>
        </div>
        <div class="p-4">
            <?php if(!empty($user->orders->count())): ?>
                <table class="border-4 w-full overflow-x-auto my-8">
                    <thead>
                        <tr class="w-full border-2 text-center">
                            <th class="border-2 bg-gray-100 py-2 font-bold">#</th>
                            <th class="border-2 bg-gray-100 py-2 font-bold">اقلام سفارش</th>
                            <th class="border-2 bg-gray-100 py-2 font-bold">تخفیفات</th>
                            <th class="border-2 bg-gray-100 py-2 font-bold">جمع کل</th>
                            <th class="border-2 bg-gray-100 py-2 font-bold">تاریخ سفارش</th>
                            <th class="border-2 bg-gray-100 py-2 font-bold">وضعیت سفارش</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $user->orders->sortByDesc('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center hover:bg-gray-100 font-medium text-gray-500 text-lg">
                                <td class="border py-4"><?php echo e(++$key); ?></td>
                                <td class="border py-4 font-bold">
                                    <?php $__currentLoopData = $order->OrderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $OrderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('detail', [$OrderItem->product->slug])); ?>"
                                            class="hover:text-red-500"><span><?php echo e(++$id); ?> - </span>
                                            <?php echo e($OrderItem->product->name); ?>

                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="border py-4"><?php echo e(number_format($order->discount)); ?> تومان</td>
                                <td class="border py-4"><?php echo e(number_format($order->total)); ?> تومان</td>
                                <td class="border py-4"><?php echo e($order->created_at->diffForHumans()); ?></td>
                                <td class="border py-4">
                                    <p class="rounded-full py-2 bg-red-400 text-white w-fit px-4 mx-auto">
                                        <?php echo e($order->created_at->diffForHumans()); ?></p>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot class="">
                        <tr class="w-full border-2 bg-gray-100 text-center">
                            <td class="py-2 font-bold" colspan="3">تعداد کل سفارشات :
                            </td>
                            <td class="py-2 font-bold" colspan="3"> جمع کل خرید ها :
                                <span><?php echo e(number_format($user->orders->sum('total'))); ?> تومان</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            <?php else: ?>
                <p class="text-xl font-bold my-6 text-red-800">هیچ سفارشی موجود نیست!</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/livewire/user/user-orders.blade.php ENDPATH**/ ?>