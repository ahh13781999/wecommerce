<div>
    <div x-data class="w-full h-full container mx-auto py-4 lg:py-10 px-4 lg:px-12">
        <div class="flex flex-row justify-start items-center gap-x-1 lg:gap-x-2 text-gray-800">
            <p class="font-semibold text-base lg:text-lg hover:text-red-500"><a href="/">صفحه اصلی</a></p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <p class="font-semibold text-base lg:text-lg">تمام کالاها</p>
        </div>
        <div class="flex flex-col justify-between w-full my-16">
            <div class="grid grid-cols-12 gap-y-12">
                <div class="col-span-12 lg:col-span-3 flex flex-col items-start gap-y-8">
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold pb-4">دسته بندی ها</h2>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul x-data>
                                <div
                                    class="flex flex-row justify-between text-lg font-medium text-gray-700 hover:text-red-500">
                                    <p><?php echo e($category->category_name); ?><span>
                                            (<?php echo e($category->products()->count()); ?>)</span></p>

                                    <svg x-on:click="$refs.subcategory.classList.toggle('hidden')"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                                <div x-ref="subcategory" class="hidden">
                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="text-base font-bold text-stone-400 hover:bg-gray-200 p-1 my-2"><a
                                                href="<?php echo e(route('sub-category', ['slug' => $subcategory->subcategory_slug])); ?>">-
                                                <?php echo e($subcategory->subcategory_name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold py-4">برند ها</h2>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex flex-row justify-between items-center">
                                <div class="inline-flex gap-x-1">
                                    <p class="font-medium"><?php echo e($brand->brand_name); ?></p>
                                    <span
                                        class="text-lg font-semibold text-slate-500">(<?php echo e($brand->products->count()); ?>)</span>
                                </div>
                                <input wire:model="selectedBrands"
                                    class="bg-gray-50 border-gray-200 rounded p-2 focus:bg-red-500 focus:ring-red-500 checked:bg-red-500 checked:hover:bg-red-700 checked:focus:bg-red-500"
                                    type="checkbox" value="<?php echo e($brand->id); ?>">
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <ul class="flex flex-col gap-y-2 w-full border-b-2 pb-6">
                        <h2 class="text-xl font-semibold py-4">کالاهای تخفیف دار</h2>
                        <div class="owl-carousel" wire:ignore>
                            <?php $__currentLoopData = $discountedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex flex-col items-center">
                                    <a class="inline-block my-2 relative" href="<?php echo e(route('detail', [$item->slug])); ?>">
                                        <img class="h-44 w-44 rounded transition duration-200 hover:scale-110"
                                            src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                            alt="">
                                        <span
                                            class="absolute text-white font-bold rounded-full bg-rose-700 py-2 px-2 top-0 left-0">تخفیف</span>
                                    </a>
                                    <p class="font-semibold text-lg mb-2"><a
                                            href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a></p>
                                    <p class="line-through text-xl"><?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                    <p class="text-red-500 font-bold text-lg"><?php echo e(number_format($item->off_price)); ?>

                                        تومان</p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </ul>

                    <ul class="flex flex-col w-full justify-between">
                        <h2 class="border-b-2 py-6 text-xl font-bold my-4">کالاهای پربازدید</h2>
                        <?php $__currentLoopData = $selectedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex flex-row items-center gap-x-4 px-2 py-4 hover:bg-gray-100">
                                <div class="border-2 rounded shadow-lg flex-shrink-0">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>"><img class="h-24 w-24 rounded"
                                            src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                            alt="<?php echo e($item->name); ?>"></a>
                                </div>
                                <div class="flex flex-col items-start h-full justify-center gap-y-2">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>">
                                        <p class="text-lg font-semibold text-gray-400"><?php echo e($item->name); ?></p>
                                    </a>
                                    <?php if($item->off_price): ?>
                                        <p class="text-sm font-bold line-through text-gray-500">
                                            <?php echo e(number_format($item->regular_price)); ?> تومان
                                        </p>
                                        <p class="font-bold text-sm text-red-600">
                                            <?php echo e(number_format($item->off_price)); ?> تومان
                                        </p>
                                    <?php else: ?>
                                        <p class="text-base font-bold"><?php echo e(number_format($item->regular_price)); ?>

                                            تومان
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-9">
                    <div class="flex flex-col items-center px-4 w-full">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.banner')->html();
} elseif ($_instance->childHasBeenRendered('l3946915214-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3946915214-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3946915214-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3946915214-0');
} else {
    $response = \Livewire\Livewire::mount('user.banner');
    $html = $response->html();
    $_instance->logRenderedChild('l3946915214-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <div class="bg-gray-200 py-2 px-4 w-full mt-6">
                            <div class="flex flex-row items-center justify-between">
                                <h2 class="text-xl font-semibold">تمامی کالاها</h2>
                                <div class="flex flex-row items-center gap-x-4">
                                    <div x-data class="flex flex-row items-center gap-x-2">
                                        <a wire:click.prevent="$set('sortField','regular_price')"
                                            x-on:click.prevent="$wire.set('sortOrder','ASC')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900 <?php if($sortField == 'regular_price' && $sortOrder == 'ASC'){ echo 'text-red-900'; } ?>"
                                            href="">ارزان‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','regular_price')"
                                            x-on:click.prevent="$wire.set('sortOrder','DESC')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900 <?php if($sortField == 'regular_price' && $sortOrder == 'DESC'){ echo 'text-red-900'; } ?>"
                                            href="">گران‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','created_at')"
                                            x-on:click.prevent="$wire.set('sortOrder','DESC')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900 <?php if($sortField == 'created_at'){ echo 'text-red-900'; } ?>" 
                                            href="">جدید‌ترین</a>
                                        <a wire:click.prevent="$set('sortField','featured')"
                                            class="rounded-full font-bold text-gray-400 hover:text-gray-900 <?php if($sortField == 'featured'){ echo 'text-red-900'; } ?>"
                                            href="">محبوب‌ترین</a>
                                    </div>
                                    <div>
                                        <select wire:model="paginateNumber"
                                            class="rounded border-gray-200 focus:border-none focus:ring-red-500 focus:ring-2 font-medium">
                                            <option selected disabled value="">نمایش</option>
                                            <option value="1">12 تا</option>
                                            <option value="2">16 تا</option>
                                            <option value="20">20 تا</option>
                                            <option value="24">24 تا</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 py-8 px-4">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded relative hover:ring-red-300 hover:ring">
                                <div class="flex flex-col items-center justify-between gap-y-2 h-full">
                                    <div class="py-4">
                                        <img class="w-44 h-44 rounded"
                                            src="<?php echo e(asset('product_thumbnail/' . $product->thumbnail_image)); ?>"
                                            alt="<?php echo e($product->name); ?>">
                                    </div>
                                    <div class="gap-y-1 flex flex-col items-center">
                                        <h2 class="text-2xl font-light my-2"><a
                                                href="<?php echo e(route('detail', [$product->slug])); ?>"><?php echo e($product->name); ?></a>
                                        </h2>
                                        <?php if($product->off_price): ?>
                                            <p class="font-medium line-through text-gray-500">
                                                <?php echo e(number_format($product->regular_price)); ?> تومان
                                            </p>
                                            <p class="font-bold text-lg text-red-600">
                                                <?php echo e(number_format($product->off_price)); ?> تومان
                                            </p>
                                        <?php else: ?>
                                            <p class="text-lg font-bold">
                                                <?php echo e(number_format($product->regular_price)); ?>

                                                تومان
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <button
                                        wire:click.prevent="Store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->off_price ?? $product->regular_price); ?>)"
                                        class="self-end w-full text-base font-medium text-gray-600 border-2 bg-gray-200 py-2 rounded hover:bg-red-500 hover:text-white">اضافه
                                        کردن به سبد</button>

                                </div>
                                <?php if($wishListItems->contains($product->id)): ?>
                                    <svg title="حذف از سبد خرید"
                                        wire:click.prevent="removeFromWishlist(<?php echo e($product->id); ?>)"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 text-red-500 hover:text-gray-500 absolute top-0 left-0 cursor-pointer"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                <?php else: ?>
                                    <svg title="اضافه به سبد خرید"
                                        wire:click.prevent="addToWishlist(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->off_price ?? $product->regular_price); ?>)"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 text-gray-500 hover:text-red-500 absolute top-0 left-0 cursor-pointer"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('js'); ?>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    rtl: true,
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    touchDrag: true,
                    autoplayHoverPause: true,
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\laragon\www\Wcommerce - Copy\resources\views/livewire/user/shop.blade.php ENDPATH**/ ?>