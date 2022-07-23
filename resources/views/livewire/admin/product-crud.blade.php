<div>
    <div x-data="{ editModal: $wire.entangle('editModal'), createModal: $wire.entangle('createModal'), deleteModal: $wire.entangle('deleteModal') }" id="alpinejs">
        <div class="space-y-6">
            <div class="flex flex-col items-start justify-between space-y-8 bg-white w-full px-4 py-6 md:px-6 md:py-8">
                <ul class="flex flex-row items-center gap-x-2 text-gray-900">
                    <li>
                        <a class="flex flex-row items-center gap-x-2" href="">
                            <svg class="w-7 h-7 text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            <span class="font-bold">پنل ادمین</span>
                        </a>
                    </li>
                    <li class="flex flex-row items-center gap-x-2">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a class="font-bold" href="">محصول ها</a>
                    </li>
                </ul>
                <h1 class="text-2xl font-bold">محصول ها</h1>
                <div class="flex flex-col md:flex-row gap-y-4  gap-x-4 items-center justify-between w-full">
                    <div class="flex flex-row items-center w-full">
                        <div class="w-full">
                            <input wire:model="Search"
                                class="w-1/2 focus:w-full transition duration-500 ease-in-out delay-200 rounded-lg bg-gray-50 border-gray-200 py-3 focus:border-transparent hover:border-teal-500 focus:ring-4 focus:ring-teal-500"
                                type="search" placeholder="جست و جو...">
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-between w-full">
                        <div class="lg:flex hidden flex-row space-x-2">
                            <a class="hover:bg-gray-200 focus:ring-2 focus:ring-gray-400 rounded-lg p-2" href="">
                                <svg class="w-7 h-7 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a class="hover:bg-gray-200 focus:ring-2 focus:ring-gray-400 rounded-lg p-2" href="">
                                <svg class="w-7 h-7 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a class="hover:bg-gray-200 focus:ring-2 focus:ring-gray-400 rounded-lg p-2" href="">
                                <svg class="w-7 h-7 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>

                        </div>
                        <button x-on:click="createModal = true"
                            class="flex flex-row items-center rounded-lg bg-teal-500 py-2 px-4 font-bold text-white text-lg focus:ring-4 focus:ring-teal-300">
                            <span>محصول جدید</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-white">
                <div class="p-2 md:p-6">
                    @if (session()->has('message'))
                        <div x-data x-ref="message"
                            class="flex flex-row justify-between items-center bg-green-300 py-2 px-4 rounded mb-6 transition ease-in-out duration-300">
                            <p class="text-white text-lg">{{ session()->get('message') }}</p>
                            <svg x-on:click="$refs.message.remove()" xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 hover:bg-green-500 cursor-pointer rounded" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    @endif
                    <table class="border rounded-lg w-full overflow-x-auto whitespace-nowrap">
                        <thead class="bg-gray-50 rounded-lg text-gray-500 text-center overflow-x-auto">
                            <tr class="">
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <input type="checkbox"
                                        class="bg-gray-100 rounded hover:bg-teal-800 focus:bg-teal-500 focus:ring-teal-500 checked:bg-teal-500 checked:hover:bg-teal-800 checked:focus:bg-teal-500 h-5 w-5 ">
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">نام محصول</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">قیمت محصول</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">وضعیت انبار</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">برند محصول</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">دسته محصول</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">زیردسته محصول</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <a href="">ایجاد شده</a>
                                </th>
                                <th class="py-3 px-5 font-bold tracking-wide">
                                    <span>اکشن</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-auto">
                            @foreach ($products as $product)
                                <tr class="hover:bg-gray-100 text-center">
                                    <td class="py-4 px-6"><input type="checkbox"
                                            class="bg-gray-100 rounded hover:bg-teal-800 focus:bg-teal-500 focus:ring-teal-500 checked:bg-teal-500 checked:hover:bg-teal-800 checked:focus:bg-teal-500 h-5 w-5 ">
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-semibold">{{ $product->name }}</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ number_format($product->regular_price) }} تومان
                                    </td>
                                    <td class="py-4 px-6">
                                        <span></span>
                                        @if ($product->stock_status == 'in_stock')
                                            <span
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold rounded-full whitespace-nowrap px-4 py-2 ">موجود</span>
                                        @else
                                            <span
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold rounded-full whitespace-nowrap px-4 py-2 ">ناموجود</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="bg-blue-200 text-white font-bold rounded-full py-2 px-2">
                                            {{ $product->brand->brand_name }}</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-bold text-orange-800">{{ $product->subcategory->category->category_name }}</p>
                                    </td>
                                    <td class="py-4 px-6">
                                       <p class="font-bold text-pink-600">{{ $product->subcategory->subcategory_name }}</p>
                                    </td>
                                    <td class="py-4 px-6 font-medium">
                                        {{ $product->created_at->diffForHumans() }}
                                    </td>
                                    <td class="py-4 px-6">

                                        <div
                                            class="flex flex-col md:flex-row items-stretch md:items-center justify-center gap-x-1 gap-y-1">
                                            <button
                                                wire:click.prevent="$emit('editProductTrigger',{{ $product->id }})"
                                                class="flex flex-row items-center py-2 px-4 rounded font-bold text-white text-base bg-teal-500 hover:bg-teal-700 focus:ring-4 focus:ring-teal-300">
                                                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                ادیت
                                            </button>
                                            <button wire:click.prevent="$set('deletingProductId',{{ $product->id }})"
                                                x-on:click="deleteModal = true"
                                                class="flex flex-row items-center py-2 px-4 rounded font-bold text-white text-base bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                                                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('pagination.tailwind') }}
                </div>
            </div>
        </div>

        <div x-show="editModal" x-trap.inert.noscroll="editModal" id="editModal"
            x-transition:enter="ease-out delay-200 duration-500" x-transition:enter-start="opacity-0 scale-70"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in delay-200 duration-500"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-70"
            class="w-full h-full bg-gray-600 bg-opacity-50 fixed top-0 inset-x-0 z-40">
            <div class="flex items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden p-6">
                <div class="bg-white rounded-lg h-screen overflow-y-auto" wire:ignore.self
                    x-on:click.outside="editModal = false">
                    <div class="flex justify-between items-center border-b-2 px-4 py-6">
                        <p class="text-xl font-bold">ادیت محصول</p>
                        <svg x-on:click="createModal = false"
                            class="w-8 h-8 rounded-md cursor-pointer hover:bg-gray-200" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="px-4 py-6">
                        <form wire:submit.prevent="editProduct">
                            <div class="grid grid-cols-6 gap-x-4 gap-y-4">
                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">نام محصول</label>
                                    <input wire:model.defer="name" wire:keyup="generateSlug"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('name')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">اسلاگ محصول</label>
                                    <input wire:model.defer="slug"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('slug')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">توضیح کوتاه محصول</label>
                                    <textarea wire:model.defer="short_description"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        cols="30" rows="10" wire:dirty.class="text-red-500 font-bold"></textarea>
                                    @error('short_description')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">توضیح بلند محصول</label>
                                    <textarea wire:model.defer="description"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        cols="30" rows="10" wire:dirty.class="text-red-500 font-bold"></textarea>
                                    @error('description')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">قیمت عادی محصول</label>
                                    <input wire:model.defer="regular_price"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('regular_price')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg" for="">قیمت با تخفیف محصول</label>
                                    <input wire:model.defer="off_price"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('off_price')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">بارکد محصول</label>
                                    <input wire:model.defer="SKU"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('SKU')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">وضعیت انبار محصول</label>
                                    <select wire:model.defer="stock_status"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="" wire:dirty.class="text-red-500 font-bold">
                                        <option value="in_stock">موجود</option>
                                        <option value="out_of_stock">ناموجود</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">کمیت محصول</label>
                                    <input wire:model.defer="quantity"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text" wire:dirty.class="text-red-500 font-bold">
                                    @error('quantity')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">تصویر اصلی</label>
                                    <input wire:model.defer="thumbnail_image"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="file" wire:dirty.attr="disabled">
                                    @error('thumbnail_image')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">برند محصول</label>
                                    <select wire:model.defer="brand_id"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="" wire:dirty.class="text-red-500 font-bold">
                                        @foreach ($brands as $brand)
                                            <option
                                                x-bind="$wire.get('brand_id') == {{ $brand->id }} ? 'selected' : '' "
                                                value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">زیر دسته محصول</label>
                                    <select wire:model.defer="sub_category_id"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="" wire:dirty.class="text-red-500 font-bold">
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">
                                                <span class="text-sm text-gray-400">{{ $subcategory->category->category_name }} - </span>
                                                {{ $subcategory->subcategory_name }} </option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-6 space-y-4">

                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">ویژگی محصول</label>
                                    <div class="flex flex-row items-strech">
                                        <select wire:model="Attr"
                                            class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                            name="" id="">
                                            @foreach ($productAttributes as $productAttribute)
                                                <option value="{{ $productAttribute->id }}">
                                                    {{ $productAttribute->name }}</option>
                                            @endforeach
                                        </select>
                                        <button wire:click.prevent="addAttribute"
                                            class="bg-teal-300 font-bold whitespace-nowrap flex-grow px-4 text-white rounded-lg hover:bg-teal-600 focus:border-teal-500 focus:border-2">اضافه
                                            کردن ویژگی</button>
                                    </div>

                                    @foreach ($Inputs as $key => $value)
                                        <div class="flex flex-col gap-y-2">
                                            <label
                                                class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                                for="">{{ $productAttribute->whereId($Attribute_Array[$key])->first()->name }}</label>
                                            <div class="flex flex-row items-stretch ">
                                                <input wire:model="Attribute_Values.{{ $value }}"
                                                    class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                                    type="text"
                                                    placeholder="{{ $productAttribute->whereId($Attribute_Array[$key])->first()->name }}">
                                                <button wire:click.prevent="removeAttribute({{ $key }})"
                                                    class="bg-red-500 text-white font-bold hover:bg-red-800 px-4 rounded-lg">حذف</button>
                                            </div>

                                        </div>
                                    @endforeach

                                    @error('sub_category_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-6 space-y-4">
                                    <div class="flex flex-row items-center gap-x-1">
                                        <label class="font-medium text-lg" for="">محصول برتر</label>
                                        <input type="checkbox" value="1" wire:model.defer="featured"
                                            class="rounded border-gray-400  bg-gray-100 focus:bg-teal-500 focus:border-teal-500 checked:focus:bg-teal-500 checked:hover:bg-teal-700 checked:bg-teal-500 checked:focus:border-teal-500">
                                    </div>
                                </div>

                                <button wire:loading.attr="disabled" type="submit"
                                    class="col-span-2 bg-teal-500 font-bold text-lg py-2 px-4 hover:bg-teal-700 rounded-lg text-white focus:ring-4 focus:ring-teal-300">
                                    ذخیره
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="deleteModal" x-trap.inert.noscroll="deleteModal" id="deleteModal"
            x-transition:enter="ease-out delay-200 duration-500" x-transition:enter-start="opacity-0 scale-70"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in delay-200 duration-500"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-70"
            class="w-full h-full bg-gray-600 bg-opacity-50 fixed top-0 inset-x-0 z-40">
            <div class="flex items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden p-6">
                <div class="bg-white rounded-lg px-12 py-6">
                    <div class="flex justify-end p-2">
                        <svg x-on:click="deleteModal = false"
                            class="w-8 h-8 rounded-md cursor-pointer hover:bg-gray-200" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col items-center justify-between gap-y-8">
                        <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h1 class="text-xl font-bold">
                            می خواهید این محصول را حذف کنید؟
                        </h1>
                        <div class="flex flex-row items-center justify-center gap-x-2">
                            <button x-on:click="$wire.emit('deleteProduct')"
                                class="px-4 py-2 font-bold text-lg rounded bg-red-500 hover:bg-red-700  focus:ring-4 focus:ring-red-300 text-white">
                                بله، مطمئنم
                            </button>
                            <button x-on:click="deleteModal = false"
                                class="px-4 py-2 font-bold text-lg rounded text-gray-500 border-2 hover:bg-gray-200 focus:ring-4 focus:border-transparent focus:ring-teal-500 border-gray-300">
                                خبر
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="createModal" x-trap.inert.noscroll="createModal" id="createModal"
            x-transition:enter="ease-out delay-200 duration-500" x-transition:enter-start="opacity-0 scale-70"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in delay-200 duration-500"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-70"
            class="w-full h-fit bg-gray-600 bg-opacity-50 fixed top-0 inset-x-0 z-40">
            <div class="flex items-center justify-center h-full w-full p-4">
                <div class="bg-white rounded-lg h-screen overflow-y-auto" wire:ignore.self
                    x-on:click.outside="createModal = false">
                    <div class="flex justify-between items-center border-b-2 px-4 py-6">
                        <p class="text-xl font-bold">ایجاد محصول</p>
                        <svg x-on:click="createModal = false"
                            class="w-8 h-8 rounded-md cursor-pointer hover:bg-gray-200" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="px-4 py-6">
                        <form wire:submit.prevent="createProduct">
                            <div class="grid grid-cols-6 gap-x-4 gap-y-4">
                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">نام محصول</label>
                                    <input wire:model="name" wire:keyup="generateSlug"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('name')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">اسلاگ محصول</label>
                                    <input wire:model="slug"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('slug')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">توضیح کوتاه محصول</label>
                                    <textarea wire:model="short_description"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        cols="30" rows="10"></textarea>
                                    @error('short_description')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">توضیح بلند محصول</label>
                                    <textarea wire:model="description"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        cols="30" rows="10"></textarea>
                                    @error('description')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">قیمت عادی محصول</label>
                                    <input wire:model="regular_price"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('regular_price')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label class="font-medium text-lg" for="">قیمت با تخفیف محصول</label>
                                    <input wire:model="off_price"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('off_price')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">بارکد محصول</label>
                                    <input wire:model="SKU"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('SKU')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">وضعیت انبار محصول</label>
                                    <select wire:model="stock_status"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="">
                                        <option selected disabled>نامعلوم</option>
                                        <option value="out_of_stock">ناموجود</option>
                                        <option value="in_stock">موجود</option>

                                    </select>
                                    @error('stock_status')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">کمیت محصول</label>
                                    <input wire:model="quantity"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="text">
                                    @error('quantity')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">تصویر اصلی</label>
                                    <input wire:model.defer="thumbnail_image"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        type="file" wire:dirty.class="border-red-500">
                                    @error('thumbnail_image')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">برند محصول</label>
                                    <select wire:model="brand_id"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="">
                                        <option value="" selected disabled>انتخاب برند</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-3 col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">زیر دسته محصول</label>
                                    <select wire:model="sub_category_id"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        name="" id="">
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">
                                                <span class="text-sm text-gray-400">{{ $subcategory->category->category_name }} - </span>
                                                {{ $subcategory->subcategory_name }} </option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-6 space-y-4">
                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">تصاویر محصول</label>
                                    <input type="file" wire:model="multiImages"
                                        class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                        multiple max="5">
                                    @error('multiImages')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-6 space-y-4">

                                    <label
                                        class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                        for="">ویژگی محصول</label>
                                    <div class="flex flex-row items-strech">
                                        <select wire:model="Attr"
                                            class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                            name="" id="">
                                            @foreach ($productAttributes as $productAttribute)
                                                <option value="{{ $productAttribute->id }}">
                                                    {{ $productAttribute->name }}</option>
                                            @endforeach
                                        </select>
                                        <button wire:click.prevent="addAttribute"
                                            class="bg-teal-300 font-bold whitespace-nowrap flex-grow px-4 text-white rounded-lg hover:bg-teal-600 focus:border-teal-500 focus:border-2">اضافه
                                            کردن ویژگی</button>
                                    </div>

                                    @foreach ($Inputs as $key => $value)
                                        <div class="flex flex-col gap-y-2">
                                            <label
                                                class="font-medium text-lg after:content-['*'] after:text-red-500 after:mr-1"
                                                for="">{{ $productAttribute->whereId($Attribute_Array[$key])->first()->name }}</label>
                                            <div class="flex flex-row items-stretch ">
                                                <input wire:model="Attribute_Values.{{ $value }}"
                                                    class="w-full bg-gray-50 rounded-lg border-gray-300 py-3 hover:border-teal-500 focus:ring-4 focus:ring-teal-500 focus:border-transparent"
                                                    type="text"
                                                    placeholder="{{ $productAttribute->whereId($Attribute_Array[$key])->first()->name }}">
                                                <button wire:click.prevent="removeAttribute({{ $key }})"
                                                    class="bg-red-500 text-white font-bold hover:bg-red-800 px-4 rounded-lg">حذف</button>
                                            </div>

                                        </div>
                                    @endforeach

                                    @error('sub_category_id')
                                        <p class="rounded bg-red-200 text-red-600 py-2 px-4 text-base  ">
                                            {{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-span-6 space-y-4">
                                    <div class="flex flex-row items-center gap-x-1">
                                        <label class="font-medium text-lg" for="">محصول برتر</label>
                                        <input type="checkbox" value="1" wire:model="featured"
                                            class="rounded border-gray-400  bg-gray-100 focus:bg-teal-500 focus:border-teal-500 checked:focus:bg-teal-500 checked:hover:bg-teal-700 checked:bg-teal-500 checked:focus:border-teal-500">
                                    </div>
                                </div>

                                <button type="submit"
                                    class="col-span-2 bg-teal-500 font-bold text-lg py-2 px-4 hover:bg-teal-700 rounded-lg text-white focus:ring-4 focus:ring-teal-300">
                                    ذخیره
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
