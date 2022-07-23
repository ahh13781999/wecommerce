<div
    class="flex flex-col lg:flex-row items-center justify-between py-8 px-6 space-x-0 lg:space-x-16 space-y-8 lg:space-y-0 w-full  container mx-auto">
    <div class="flex justify-center items-center w-full basis-full lg:basis-1/4">
        <a class="hover:text-red-500" href="/">
            <p class="text-3xl font-bold">وی کامرس</p>
        </a>
    </div>
    <div class="flex flex-row items-center justify-center w-full basis-full lg:basis-2/4 relative">
        <div class="flex flex-row items-stretch justify-center h-full w-full px-12" action="">
            <input wire:model="query"
                class="border-2 w-full border-red-500 items-stretch rounded rounded-l-none py-3 focus:ring-4 focus:ring-red-500 focus:border-transparent transition delay-200 duration-500 ease-in-out"
                type="search" placeholder="جست و جو کن">
            <button
                class="flex flex-row items-center py-3 px-4 rounded rounded-r-none bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="white" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
        <?php if(!empty($query)): ?>
            <ul x-data="{ searchDropdown:true }" class="absolute z-50 transform top-16 bg-white w-10/12 border-2">
                <?php $__currentLoopData = $searchItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li x-on:click.outside="searchDropdown = false, $wire.set('query',null)" x-show="searchDropdown" class="border w-full flex flex-row justify-between items-center py-4 px-2 hover:border-green-400 hover:bg-green-100">
                           <div class="flex flex-col justify-between gap-y-2">
                            <a href="<?php echo e(route('detail',[$searchItem->slug])); ?>" class="font-bold text-xl text-green-900"><?php echo e($searchItem->name); ?></a>
                            <span class="font-semibold text-gray-700"><?php echo e($searchItem->subcategory->category->category_name); ?></span> 
                           </div>
                           <img class="rounded-md w-14 h-14 border-2 border-green-400" src="<?php echo e(asset('product_thumbnail/'.$searchItem->thumbnail_image)); ?>" alt="">
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="flex flex-row items-center justify-center w-full basis-full lg:basis-1/4">
        <div class="flex flex-row items-center justify-center gap-x-24 lg:gap-x-16 w-full">
            <div class="flex flex-row justify-between items-center gap-2 hover:cursor-pointer hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd" />
                </svg>
                <div class="flex flex-col items-stretch justify-center space-y-2">
                    <?php if(Cart::instance('wishlist')->count() > 0): ?>
                        <div class="bg-red-500 rounded px-2 py-1 text-center">
                            <p class="text-sm text-white font-bold"><?php echo e(Cart::count()); ?> کالا</p>
                        </div>
                    <?php else: ?>
                        <div class="bg-gray-300 rounded px-2 py-1 text-center">
                            <p class="text-sm text-white font-bold">0 کالا</p>
                        </div>
                    <?php endif; ?>
                    <a href="<?php echo e(route('wishlist')); ?>"
                        class="font-semibold text-gray-800 text-center whitespace-nowrap">لیست آرزو</a>
                </div>
            </div>
            <div class="flex flex-row justify-between items-center gap-2 hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                </svg>
                <div class="flex flex-col items-stretch justify-center space-y-2">
                    <?php if(Cart::instance('cart')->count() > 0): ?>
                        <div class="bg-red-500 rounded px-2 py-1 text-center">
                            <p class="text-sm text-white font-bold"><?php echo e(Cart::instance('cart')->count()); ?> کالا</p>
                        </div>
                    <?php else: ?>
                        <div class="bg-gray-300 rounded px-2 py-1 text-center">
                            <p class="text-sm text-white font-bold">0 کالا</p>
                        </div>
                    <?php endif; ?>

                    <a href="<?php echo e(route('cart')); ?>"
                        class="font-semibold text-gray-800 text-center whitespace-nowrap">سبد خرید</a>
                </div>
            </div>
            <div x-on:click="mobileMenu = !mobileMenu"
                class="flex flex-col items-center justify-center gap-y-0 lg:hidden hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="text-sm font-bold">
                    منو
                </span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/header.blade.php ENDPATH**/ ?>