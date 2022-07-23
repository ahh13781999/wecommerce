<div class="w-full h-full overflow-y-auto">
    <main>
        <div class="px-4 py-10">
            <div class="w-full grid grid-cols-1 xl:grid-cols-2 gap-4">
                <div class="bg-white shadow rounded-lg p-6 md:p-4 xl:p-8 xl:col-span-2">
                    <div class="flex items-center justify-between mb-4"></div>
                </div>
                <div class=""></div>
            </div>
            <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full">
                {{-- First Grid Item --}}
                <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white shadow-lg rounded-lg p-4">
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-col items-start gap-y-2  ">
                            <span class="text-gray-900 font-bold text-2xl">{{ $todaySales }}</span>
                            <h3 class="text-base font-normal text-gray-500">سفارشات امروز</h3>
                        </div>
                        <div class="flex flex-row items-center justify-center font-bold text-lg text-teal-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- First Grid Item --}}

                {{-- Second Grid Item --}}
                <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white shadow-lg rounded-lg p-4">
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-col items-start gap-y-2 ">
                            <span class="text-gray-900 font-bold text-2xl">{{ $monthSales }}</span>
                            <h3 class="text-base font-normal text-gray-500">سفارشات این ماه</h3>
                        </div>
                        <div class="flex flex-row items-center justify-center font-bold text-lg text-teal-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- Second Grid Item --}}

                {{-- Third Grid Item --}}
                <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white shadow-lg rounded-lg p-4">
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-col items-start gap-y-2  ">
                            <span class="text-gray-900 font-bold text-2xl">{{ $annualSales }}</span>
                            <h3 class="text-base font-normal text-gray-500"> سفارشات امسال </h3>
                        </div>
                        <div class="flex flex-row items-center justify-center font-bold text-lg text-teal-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- Third Grid Item --}}

            </div>

            <div class="grid grid-cols-12 w-full mt-8 gap-x-4 gap-y-4">
                <div class="col-span-12 lg:col-span-6 rounded-lg border-2 shadow-lg">
                    <div class="flex flex-col gap-y-6 my-4 mx-2">
                        <h2 class="font-bold text-xl text-purple-600 mr-4">آخرین سفارشات</h2>
                        <table class="border-2 w-full">
                            <thead>
                                <tr class="text-center font-semibold text-gray-500 border-2 bg-gray-100">
                                    <td class="border py-2">#</td>
                                    <td class="border py-2">تعداد اقلام</td>
                                    <td class="border py-2">تخفیف</td>
                                    <td class="border py-2">جمع کل</td>
                                    <td class="border py-2">وضعیت</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestOrders as $key => $item)
                                    <tr class="text-center hover:bg-gray-100">
                                        <td class="py-2 border">{{ ++$key }}</td>
                                        <td class="py-2 border">{{ $item->OrderItems->count() }}</td>
                                        <td class="py-2 border text-red-500">{{ number_format($item->discount) }} تومان</td>
                                        <td class="py-2 border">{{ number_format($item->total) }} تومان</td>
                                        <td class="py-2 border">
                                            <p
                                                class="bg-green-400 text-white font-semibold rounded-full py-2 px-2 w-fit mx-auto">
                                                پرداخت شده</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 rounded-lg border-2 shadow-lg">
                    <div class="flex flex-col gap-y-6 my-4 mx-2">
                        <h2 class="font-bold text-xl text-yellow-600 mr-4">جدیدترین نظرات</h2>
                        <table class="border-2 w-full">
                            <thead>
                                <tr class="text-center font-semibold text-gray-500 border-2 bg-gray-100">
                                    <td class="border py-2">#</td>
                                    <td class="border py-2">نام کاربر</td>
                                    <td class="border py-2">ایمیل</td>
                                    <td class="border py-2">نظر</td>
                                    <td class="border py-2">ثبت شده</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestComments as $key => $item)
                                    <tr class="text-center hover:bg-gray-100">
                                        <td class="py-2 border">{{ ++$key }}</td>
                                        <td class="py-2 border font-semibold text-cyan-800">{{ $item->name }}</td>
                                        <td class="py-2 border font-semibold text-emerald-800">{{ $item->email }}</td>
                                        <td class="py-2 border">{{ Str::limit($item->comment,50) }}</td>
                                        <td class="py-2 border font-bold text-indigo-800">{{ $item->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 rounded-lg border-2 shadow-lg">
                    <div class="flex flex-col gap-y-6 my-4 mx-2">
                        <h2 class="font-bold text-xl text-green-600 mr-4">جدید ترین کاربرها</h2>
                        <table class="border-2 w-full">
                            <thead>
                                <tr class="text-center font-semibold text-gray-500 border-2 bg-gray-100">
                                    <td class="border py-2">#</td>
                                    <td class="border py-2">نام</td>
                                    <td class="border py-2">ایمیل</td>
                                    <td class="border py-2">تاریخ ثبت نام</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestUsers as $key => $item)
                                    <tr class="text-center hover:bg-gray-100">
                                        <td class="py-2 border">{{ ++$key }}</td>
                                        <td class="py-2 border">{{ $item->name }}</td>
                                        <td class="py-2 border">{{ $item->email }}</td>
                                        <td class="py-2 border text-pink-800 font-semibold">{{ $item->created_at->diffForHumans() }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6 rounded-lg border-2 shadow-lg">
                    <div class="flex flex-col gap-y-6 my-4 mx-2">
                        <h2 class="font-bold text-xl text-cyan-600 mr-4">آخرین سفارشات ارسال شده</h2>
                        <table class="border-2 w-full">
                            <thead>
                                <tr class="text-center font-semibold text-gray-500 border-2 bg-gray-100">
                                    <td class="border py-2">#</td>
                                    <td class="border py-2">تعداد اقلام</td>
                                    <td class="border py-2">هزینه ارسال</td>
                                    <td class="border py-2">جمع کل</td>
                                    <td class="border py-2">وضعیت</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestShippings as $key => $item)
                                    <tr class="text-center hover:bg-gray-100">
                                        <td class="py-2 border font-bold text-green-700">{{ ++$key }}</td>
                                        <td class="py-2 border">{{ $item->order->OrderItems->count() }}</td>
                                        <td class="py-2 border">{{ number_format($item->order->tax) }} تومان</td>
                                        <td class="py-2 border">{{ number_format($item->order->total) }} تومان</td>
                                        <td class="py-2 border">
                                            <p class="bg-blue-400 text-white font-semibold rounded-full py-2 px-2 w-fit mx-auto">ارسال شده</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </main>
</div>
