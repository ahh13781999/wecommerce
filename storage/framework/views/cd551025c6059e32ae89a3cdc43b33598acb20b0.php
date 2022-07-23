<div>
    <div class="container mx-auto h-full w-full">
        <div class="flex flex-col items-center gap-y-6 my-8">

            
            <div class="flex flex-col items-center my-4 gap-y-4 w-full">
                <div class="flex-1 w-full">
                    <div class="owl-carousel owl-theme owl-loaded owl-two"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.banner')->html();
} elseif ($_instance->childHasBeenRendered('l640683730-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l640683730-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640683730-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640683730-0');
} else {
    $response = \Livewire\Livewire::mount('user.banner');
    $html = $response->html();
    $_instance->logRenderedChild('l640683730-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
                </div>
                <div
                    class="flex flex-col items-center owl-carousel owl-theme owl-loaded owl-three">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.banner')->html();
} elseif ($_instance->childHasBeenRendered('l640683730-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l640683730-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640683730-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640683730-1');
} else {
    $response = \Livewire\Livewire::mount('user.banner');
    $html = $response->html();
    $_instance->logRenderedChild('l640683730-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
            

            
            <div class="flex flex-col items-center gap-y-4 w-full">
                <div class="w-full bg-red-500 py-2 px-4">
                    <h3 class="text-lg font-bold text-white">کالاهای جدید</h3>
                </div>
                <div class="w-full border-2 bg-gray-100 h-full my-2">
                    <div class="owl-carousel owl-theme owl-loaded owl-one py-6">
                        <?php $__currentLoopData = $newProducts->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="bg-white relative flex flex-col items-center justify-evenly hover:ring-2 hover:ring-red-500 hover:scale-110 transition h-80 my-6">
                                <div class="absolute top-2 right-2 bg-orange-500 rounded-full px-2 py-1">
                                    <p class="text-white font-bold">جدید</p>
                                </div>
                                <div class="w-56 h-56 inline-block">
                                    <img src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                        alt="<?php echo e($item->name); ?>">
                                </div>
                                <h2 class="font-semibold text-gray-600 text-lg text-center hover:text-red-500">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a>
                                </h2>
                                <?php if($item->off_price): ?>
                                    <p class="font-medium line-through text-gray-500">
                                        <?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                    <p class="font-bold text-red-600">
                                        <?php echo e(number_format($item->off_price)); ?> تومان
                                    </p>
                                <?php else: ?>
                                    <p class="font-bold">
                                        <?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            

            
            <div class="flex flex-col items-center w-full">
                <div class="w-full bg-red-500 py-2 px-4">
                    <h3 class="text-lg font-bold text-white">کالاهای تخفیف خورده</h3>
                </div>
                <div x-data="discountTime()" x-init="countdown()"
                    class="flex flex-row self-start bg-gray-100 gap-x-4 font-bold border-2 border-t-0 py-2 px-4">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <span class="flex flex-row items-center gap-x-2 after:text-red-500 after:content-['و']">
                        <p class="text-xl text-gray-500" x-text="days"></p>
                        :
                        <p>روز</p>
                    </span>
                    <span class="flex flex-row items-center gap-x-2 after:text-red-500 after:content-['و']">
                        <p class="text-xl text-gray-500" x-text="hours"></p>
                        :
                        <p>ساعت</p>
                    </span>
                    <span class="flex flex-row items-center gap-x-2 after:text-red-500 after:content-['و']">
                        <p class="text-xl text-gray-500" x-text="minutes"></p>
                        :
                        <p>دقیقه</p>
                    </span>
                    <span class="flex flex-row items-center gap-x-2 ">
                        <p class="text-xl text-gray-500" x-text="seconds"></p>
                        :
                        <p>ثانیه</p>
                    </span>

                </div>
            </div>
            <div class="w-full border-2 bg-gray-100 h-full my-2">
                <div class="owl-carousel owl-theme owl-loaded owl-one py-6">
                    <?php $__currentLoopData = $discountProducts->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="bg-white relative flex flex-col items-center justify-evenly hover:ring-2 hover:ring-red-500 hover:scale-110 transition h-80 my-6">
                            <div class="absolute top-2 right-2 bg-red-500 rounded-full px-2 py-1">
                                <p class="text-white font-bold">تخفیف</p>
                            </div>
                            <div class="w-56 h-56 inline-block">
                                <img src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                    alt="<?php echo e($item->name); ?>">
                            </div>
                            <h2 class="font-semibold text-gray-600 text-lg text-center hover:text-red-500">
                                <a href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a>
                            </h2>
                            <?php if($item->off_price): ?>
                                <p class="font-medium line-through text-gray-500">
                                    <?php echo e(number_format($item->regular_price)); ?> تومان
                                </p>
                                <p class="font-bold text-red-600">
                                    <?php echo e(number_format($item->off_price)); ?> تومان
                                </p>
                            <?php else: ?>
                                <p class="font-bold">
                                    <?php echo e(number_format($item->regular_price)); ?> تومان
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            



            
            <div class="flex flex-col items-center gap-y-4 w-full">
                <div class="w-full bg-red-500 py-2 px-4">
                    <h3 class="text-lg font-bold text-white">کالاهای پربازدید</h3>
                </div>
                <div class="w-full border-2 bg-gray-100 h-full my-2">
                    <div class="owl-carousel owl-theme owl-loaded owl-one py-6">
                        <?php $__currentLoopData = $popularProducts->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="bg-white relative flex flex-col items-center justify-evenly hover:ring-2 hover:ring-red-500 hover:scale-110 transition h-80 my-6">
                                <div class="absolute top-2 right-2 bg-green-300 rounded-full px-2 py-1">
                                    <p class="text-white font-bold">محبوب</p>
                                </div>
                                <div class="w-56 h-56 inline-block">
                                    <img src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                        alt="<?php echo e($item->name); ?>">
                                </div>
                                <h2 class="font-semibold text-gray-600 text-lg text-center hover:text-red-500">
                                    <a href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a>
                                </h2>
                                <?php if($item->off_price): ?>
                                    <p class="font-medium line-through text-gray-500">
                                        <?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                    <p class="font-bold text-red-600">
                                        <?php echo e(number_format($item->off_price)); ?> تومان
                                    </p>
                                <?php else: ?>
                                    <p class="font-bold">
                                        <?php echo e(number_format($item->regular_price)); ?> تومان
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="flex flex-col items-center w-full mb-6">
            <div class="w-full bg-red-500 py-2 px-4">
                <h3 class="text-lg font-bold text-white">کالاها بر اساس دسته بندی</h3>
            </div>
            <div class="w-full border-t-2 mt-4 flex flex-col gap-y-4 bg-slate-100">
                <div class="flex md:flex-row flex-col md:items-center items-stretch text-center gap-x-[1px]">
                    <?php $__currentLoopData = $categories->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div wire:click="$set('selectedCategory',<?php echo e($category->id); ?>)"
                            class="py-3 px-6 ring-1 ring-gray-300 'bg-gray-100' cursor-pointer hover:bg-white md:hover:ring-transparent">
                            <p class="text-lg font-bold"><?php echo e($category->category_name); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="w-full border-2 bg-gray-100 h-full">
                <div class="owl-carousel owl-theme owl-one owl-loaded py-6">
                    <?php $__currentLoopData = $popularProducts->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="bg-white relative flex flex-col items-center justify-evenly hover:ring-2 hover:ring-red-500 hover:scale-110 transition h-80 my-6">
                            <div class="absolute top-2 right-2 bg-pink-300 rounded-full px-2 py-1">
                                <p class="text-white font-bold"><?php echo e($item->subcategory->subcategory_name); ?></p>
                            </div>
                            <div class="w-56 h-56 inline-block">
                                <img src="<?php echo e(asset('product_thumbnail/' . $item->thumbnail_image)); ?>"
                                    alt="<?php echo e($item->name); ?>">
                            </div>
                            <h2 class="font-semibold text-gray-600 text-lg text-center hover:text-red-500">
                                <a href="<?php echo e(route('detail', [$item->slug])); ?>"><?php echo e($item->name); ?></a>
                            </h2>
                            <?php if($item->off_price): ?>
                                <p class="font-medium line-through text-gray-500">
                                    <?php echo e(number_format($item->regular_price)); ?> تومان
                                </p>
                                <p class="font-bold text-red-600">
                                    <?php echo e(number_format($item->off_price)); ?> تومان
                                </p>
                            <?php else: ?>
                                <p class="font-bold">
                                    <?php echo e(number_format($item->regular_price)); ?> تومان
                                </p>
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
            $(".owl-three").owlCarousel({
                rtl: true,
                items: 1,
                loop: true,
                autoplay: true,
                margin: 20,
                autoplayTimeout: 2000,
                touchDrag: true,
                animateIn: true,
                responsive: {
                    640: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1024: {
                        items: 2
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".owl-two").owlCarousel({
                rtl: true,
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                touchDrag: true,
                animateIn: true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".owl-one").owlCarousel({
                rtl: true,
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                margin: 30,
                autoHeight: true,
                merge: true,
                touchDrag: true,
                animateIn: true,
                autoplayHoverPause: true,
                responsive: {
                    640: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 3
                    },
                    1280: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        function discountTime() {
            return {
                days: "00",
                hours: "00",
                minutes: "00",
                seconds: "00",
                endTime: new Date("December 31, 2022 07:01:59 GMT+0430").getTime(),
                now: new Date().getTime(),
                timeLeft: 0,
                countdown: function() {
                    let counter = setInterval(() => {
                        this.now = new Date().getTime();
                        this.timeLeft = (this.endTime - this.now) / 1000;
                        this.seconds = this.format(this.timeLeft % 60);
                        this.minutes = this.format((this.timeLeft / 60) % 60);
                        this.hours = this.format((this.timeLeft / (60 * 60)) % 24);
                        this.days = this.format(this.timeLeft / (60 * 60 * 24));
                        if (this.timeLeft <= 0) {
                            clearInterval(counter);
                            this.seconds = "00";
                            this.minutes = "00";
                            this.hours = "00";
                            this.days = "00";
                        }
                    }, 1000);

                },
                format: function(value) {
                    if (value < 10) {
                        return "0" + Math.floor(value);
                    } else
                        return Math.floor(value);
                },
            };
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/home.blade.php ENDPATH**/ ?>