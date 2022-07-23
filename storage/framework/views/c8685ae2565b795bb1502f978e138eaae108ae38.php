<div x-data="{ editModal: $wire.entangle('editModal'), createModal: $wire.entangle('createModal'), deleteModal: $wire.entangle('deleteModal') }">
    
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
                    <a class="font-bold" href="">نظرات</a>
                </li>
            </ul>
            <h1 class="text-2xl font-bold">نظرات</h1>
            <div
                class="flex flex-col md:flex-row gap-y-4  gap-x-4 items-center justify-between w-full">
                <div class="flex flex-row items-center w-full">
                    <div class="w-full">
                        <input wire:model="Search"
                            class="w-full md:w-1/2 focus:w-full transition duration-500 ease-in-out delay-200 rounded-lg bg-gray-50 border-gray-200 py-3 focus:border-transparent hover:border-teal-500 focus:ring-4 focus:ring-teal-500"
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
                </div>
            </div>
        </div>
        <div class="w-full h-full bg-white overflow-x-auto">
            <div class="p-2 md:p-6 overflow-x-auto">
                <?php if(session()->has('message')): ?>
                <div x-ref="message" class="flex flex-row justify-between items-center bg-green-300 py-2 px-4 rounded mb-6 transition ease-in-out duration-500 delay-200">
                    <p class="text-white text-lg"><?php echo e(session()->get('message')); ?></p>
                    <svg x-on:click="$refs.message.remove()" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 hover:bg-green-500 cursor-pointer rounded" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <?php endif; ?>
                <table class="border rounded-lg w-full overflow-x-auto">
                    <thead class="bg-gray-50 rounded-lg text-gray-500 text-center">
                        <tr class="">
                            <th class="py-3 px-5 font-bold tracking-wide">
                                <input type="checkbox"
                                    class="bg-gray-100 rounded hover:bg-teal-800 focus:bg-teal-500 focus:ring-teal-500 checked:bg-teal-500 checked:hover:bg-teal-800 checked:focus:bg-teal-500 h-5 w-5 ">
                            </th>
                            <th class="py-3 px-5 font-bold tracking-wide">
                                <a href="">نام کاربر</a>
                            </th>
                            <th class="py-3 px-5 font-bold tracking-wide">
                                <a href="">ایمیل کاربر</a>
                            </th>
                            <th class="py-3 px-5 font-bold tracking-wide">
                                <a href="">متن نظر</a>
                            </th>
                            <th class="py-3 px-5 font-bold tracking-wide">
                                <a href="">ثبت شده</a>
                            </th>
                            <th class="py-3 px-5 font-bold tracking-wide">
                               <span>اکشن</span> 
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="hover:bg-gray-100 text-center">
                                <td class="py-4 px-6"><input type="checkbox"
                                        class="bg-gray-100 rounded hover:bg-teal-800 focus:bg-teal-500 focus:ring-teal-500 checked:bg-teal-500 checked:hover:bg-teal-800 checked:focus:bg-teal-500 h-5 w-5 ">
                                </td>
                                <td class="py-4 px-6">
                                   <p class="font-bold"><?php echo e($review->name); ?></p> 
                                </td>
                                <td class="py-4 px-6">
                                   <p class="font-semibold text-green-600"><?php echo e($review->email); ?></p>
                                </td>
                                <td class="py-4 px-6">
                                   <p class="text-lg text-blue-800"><?php echo e($review->comment); ?></p>
                                </td>
                                <td class="py-4 px-6 font-medium">
                                    <?php echo e($review->created_at->diffForHumans()); ?>

                                </td>
                                <td class="py-4 px-6">

                                    <div
                                        class="flex flex-col md:flex-row items-stretch md:items-center justify-center gap-x-1 gap-y-1">
                                        <button
                                            x-on:click="deleteModal = true ,$wire.set('deletingReviewId','<?php echo e($review->id); ?>')"
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($reviews->links('pagination.tailwind')); ?>

            </div>
        </div>
    </div>

    <div x-show="deleteModal" x-trap.inert.noscroll="deleteModal" id="deleteModal" x-transition:enter="ease-out delay-200 duration-500"
        x-transition:enter-start="opacity-0 scale-70" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in delay-200 duration-500" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-70"
        class="w-full h-full bg-gray-600 bg-opacity-50 fixed top-0 inset-x-0 z-40">
        <div class="flex items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden p-6">
            <div class="bg-white rounded-lg px-12 py-6">
                <div class="flex justify-end p-2">
                    <svg x-on:click="deleteModal = false" class="w-8 h-8 rounded-md cursor-pointer hover:bg-gray-200"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="flex flex-col items-center justify-between gap-y-8">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h1 class="text-xl font-bold">
                        می خواهید این نظر را حذف کنید؟
                    </h1>
                    <div class="flex flex-row items-center justify-center gap-x-2">
                        <button x-on:click="$wire.emit('deleteReview')"
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
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/admin/review-crud.blade.php ENDPATH**/ ?>