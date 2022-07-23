<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارسال سفارش</title>
</head>
<body>
    <p> {{ $shipping->lastname }} {{ $shipping->lastname }} سلام</p>
    <p>سفارش شما با موفقیت ارسال شد!</p>
    <br>

    <table style="width: 600px; text-align:right">
        <thead style="text-align: center; border: 1px solid #000;">
            <th>تصویر</th>
            <th>نام</th>
            <th>تعداد</th>
            <th>قیمت</th>
        </thead>
        <tbody>
            @foreach ($shipping->order->OrderItems as $item)
            <tr style="text-align: center; border: 1px solid #000;">
                <td><img src="" alt=""></td>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price * $item->quantity }} تومان</td>
            </tr> 
            @endforeach
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight:bold;">جمع کل :{{ $shipping->order->subtotal }} تومان</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight:bold;">هزینه ارسال :{{ $shipping->order->tax }} تومان</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px; font-weight:bold;">هزینه کل :{{ $shipping->order->total }} تومان</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>