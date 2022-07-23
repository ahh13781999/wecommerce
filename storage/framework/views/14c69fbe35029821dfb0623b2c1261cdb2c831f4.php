<!DOCTYPE html>
<html dir="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تاییدیه ی سفارش</title>
</head>
<body>
    <p> <?php echo e($order->lastname); ?> <?php echo e($order->lastname); ?> سلام</p>
    <p>سفارش شما با موفقیت دریافت شد!</p>
    <br>

    <table style="width: 600px; text-align:right">
        <thead style="text-align: center; border: 1px solid #000;">
            <th>تصویر</th>
            <th>نام</th>
            <th>تعداد</th>
            <th>قیمت</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $order->OrderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="text-align: center; border: 1px solid #000;">
                <td><img src="" alt=""></td>
                <td><?php echo e($item->product->name); ?></td>
                <td><?php echo e($item->quantity); ?></td>
                <td><?php echo e($item->price * $item->quantity); ?> تومان</td>
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight:bold;">جمع کل :<?php echo e($order->subtotal); ?> تومان</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight:bold;">هزینه ارسال :<?php echo e($order->tax); ?> تومان</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px; font-weight:bold;">هزینه کل :<?php echo e($order->total); ?> تومان</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html><?php /**PATH C:\laragon\www\Wcommerce\resources\views/mails/order-mail.blade.php ENDPATH**/ ?>