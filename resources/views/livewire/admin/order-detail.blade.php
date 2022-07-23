<div>
    <div class="flex flex-col items-center justify-center my-16">
        <table class="border-2 text-center rounded bg-white border-collapse">
            <tbody>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">نام</td>
                    <td class="py-2 px-4 border">{{ $order->firstname }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">نام خانوادگی</td>
                    <td class="py-2 px-4 border">{{ $order->lastname }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">ایمیل</td>
                    <td class="py-2 px-4 border">{{ $order->email }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">شماره</td>
                    <td class="py-2 px-4 border">{{ $order->line }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">شهر</td>
                    <td class="py-2 px-4 border">{{ $order->city }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">استان</td>
                    <td class="py-2 px-4 border">{{ $order->province }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">آدرس</td>
                    <td class="py-2 px-4 border">{{ $order->address }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">کد پستی</td>
                    <td class="py-2 px-4 border">{{ $order->zipcode }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">وضعیت</td>
                    <td class="py-2 px-4 border">
                        @switch($order->status)
                            @case('ordered')
                            <p class="bg-green-500 px-4 py-2 rounded-lg w-fit mx-auto font-bold text-white">
                                پرداخت شده    
                              </p>
                            @break

                            @case('deliverd')
                            <p class="bg-pink-500 px-4 py-2 rounded-lg w-fit mx-auto font-bold text-white">
                                تحویل داده شده    
                              </p>
                            @break

                            @case('canceld')
                            <p class="bg-orange-500 px-4 py-2 rounded-lg w-fit mx-auto font-bold text-white">
                                کنسل شده    
                              </p>
                            @break

                            @default
                            <p class="bg-gray-500 px-4 py-2 rounded-lg w-fit mx-auto font-bold text-white">
                                نامعلوم  
                              </p>
                        @endswitch

                    </td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">کاربر</td>
                    <td class="py-2 px-4 border">{{ $order->user->name }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">تاریخ سفارش</td>
                    <td class="py-2 px-4 border">{{ $order->created_at->diffForHumans() }}</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">کالا ها</td>
                    <td class="py-2 px-4 border text-center">
                        @foreach ($order->orderItems as $orderItem)
                            <div
                                class="flex flex-row items-center gap-x-6 justify-between border-2 border-cyan-600 py-4 px-8 bg-cyan-100 rounded my-2">
                                <p class="font-semibold text-lg">{{ $orderItem->product->name }}</p>
                                <img class="rounded-full h-12 w-12"
                                    src="{{ asset('product_thumbnail/' . $orderItem->product->thumbnail_image) }}"
                                    alt="">
                                <p>{{ number_format($orderItem->price) }} تومان</p>
                            </div>
                        @endforeach
                        
                    </td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">جمع کل</td>
                    <td class="py-2 px-4 border font-semibold text-lg text-blue-800">{{ number_format($order->subtotal) }} تومان</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">تخفیف</td>
                    <td class="py-2 px-4 border font-semibold text-lg text-red-500">{{ number_format($order->discount) }} تومان</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">هزینه ارسال</td>
                    <td class="py-2 px-4 border font-semibold text-lg text-gray-500">{{ number_format($order->tax) }} تومان</td>
                </tr>
                <tr class="border-2 border-gray-400 hover:bg-gray-200">
                    <td class="py-2 px-4 border-2 border-gray-400 font-semibold text-lg">هزینه کل</td>
                    <td class="py-2 px-4 border font-semibold text-lg text-gray-800">{{ number_format($order->total) }} تومان</td>
                </tr>               
            </tbody>
        </table>
        @if ($order->status === 'orderd')
        <div class="flex flex-row items-center justify-between my-6 gap-x-2">
            <button wire:click.prevent="sendOrder" class="px-4 py-2 rounded-lg bg-pink-400 font-semi-bold text-white hover:opacity-80">
                  ارسال سفارش
            </button>
            <button class="px-4 py-2 rounded-lg bg-orange-400 font-semi-bold text-white hover:opacity-80">
                  کنسل کردن سفارش
            </button>
        </div>  
        @endif
    </div>
</div>
