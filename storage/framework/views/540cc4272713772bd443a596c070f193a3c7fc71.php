<header x-data="{ mobileMenu: false }" @resize.window="window.innerWidth > 760 ? mobileMenu = false : '' "
    style="display: unset">
    
    <div class="bg-gray-50 w-full">
        <div
            class="flex flex-col lg:flex-row items-center justify-between py-2 px-0 lg:px-4 w-full gap-2 lg:gap-0  container mx-auto">

            <ul
                class="flex flex-row items-center justify-evenly text-center font-semibold gap-x-2 lg:gap-x-2 xl:gap-x-4 order-2 lg:order-1"> 
                <?php if(auth()->guard()->check()): ?>
                    <li x-data="{ userProfile: false }" class="px-2 py-1 relative">
                        <div class="flex flex-row items-center gap-x-[2px] hover:cursor-pointer" x-on:click="userProfile = !userProfile">
                            <?php if(isset(auth()->user()->profile->image)): ?>
                                <img class="h-8 w-8 rounded-full"
                                    src="<?php echo e(asset('profile_photo/' . auth()->user()->profile->image)); ?>" alt="">
                            <?php else: ?>
                             <img class="h-8 w-8 rounded-full"
                            src="<?php echo e(asset('profile_photo/default.png')); ?>" alt="">
                            
                            <?php endif; ?>
                             <p class="text-lg flex flex-row items-center"><?php echo e(auth()->user()->name); ?>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </p>
                        </div>
                        <ul x-show="userProfile" x-on:click.outside="userProfile = false"
                            class="absolute bg-white rounded-xl border-2 w-full transform translate-y-2 transition">
                            <li class="px-2 py-2 hover:text-gray-500 border">
                                <a href="<?php echo e(route('user.profile', [auth()->user()->id])); ?>">پروفایل</a>
                            </li>
                            <li class="px-2 py-2 hover:text-gray-500 border">
                                <a href="<?php echo e(route('user.orders')); ?>">سفارشات من</a>
                            </li>
                            <li class="px-2 py-2 hover:text-gray-500 border">
                                <a href="<?php echo e(route('user.change-password')); ?>">تغییر پسورد</a>
                            </li>
                            <li class="px-2 py-2 hover:text-gray-500 border">
                                <form action="<?php echo e(route('logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button class="font-semibold">خروج</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="px-4 py-2 hover:text-red-500 bg-rose-400 text-white rounded hover:bg-white"><a href="<?php echo e(route('register')); ?>">ثبت نام</a></li>
                    <li class="px-4 py-2 hover:text-red-500 bg-red-400 text-white rounded hover:bg-white"><a href="<?php echo e(route('login')); ?>">ورود</a></li>
                <?php endif; ?>



            </ul>
            <div class="order-1 lg:order-2">
                <p class="px-2 py-1 font-bold">شماره تماس : 44556688+</p>
            </div>
        </div>
    </div>
    

    
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.header')->html();
} elseif ($_instance->childHasBeenRendered('7w67Xrl')) {
    $componentId = $_instance->getRenderedChildComponentId('7w67Xrl');
    $componentTag = $_instance->getRenderedChildComponentTagName('7w67Xrl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7w67Xrl');
} else {
    $response = \Livewire\Livewire::mount('user.header');
    $html = $response->html();
    $_instance->logRenderedChild('7w67Xrl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

    
    <div x-show="mobileMenu" x-trap.inert.noscroll="mobileMenu" x-on:click.outside="mobileMenu= false"
        x-trap.inert.noscroll="mobileMenu" x-transition:enter="transform transition ease-in-out duration-500"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-500" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full" class="h-full w-80 fixed top-0 right-0 bg-white z-20">
        <ul class="flex flex-col justify-center text-lg font-medium w-full">
            <li class="flex flex-row justify-between items-center border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="#">منوی اصلی</a>
                <svg x-on:click="mobileMenu = false" xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7 cursor-pointer hover:bg-gray-400 rounded" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="<?php echo e(route('home')); ?>">صفحه اصلی</a>
            </li>
            <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="<?php echo e(route('shop')); ?>">کالا ها</a>
            </li>
            <li x-data="{ showCategories: false }" class="border-b-2 px-4 py-4 hover:bg-gray-100">
                <a x-on:click="showCategories = !showCategories"
                    class="flex flex-row justify-between items-center w-full" href="#">
                    <span>دسته بندی ها</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="showCategories" x-transition.duration.500>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="hover:bg-gray-200 hover:text-black py-1 px-1 text-gray-500">
                            <a class="w-full"
                                href="#"><?php echo e($category->category_name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="<?php echo e(route('cart')); ?>">سبد خرید</a>
            </li>
            <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="<?php echo e(route('checkout')); ?>">تسویه حساب</a>
            </li>
            <li class="border-b-2 px-4 py-4 hover:bg-gray-200">
                <a href="">درباره ی ما</a>
            </li>
        </ul>
    </div>
    


    
    <div class="border-t-2 bg-gray-50 hidden lg:flex shadow-xl">
        <div class="flex flex-row items-center justify-center container w-full mx-auto">
            <ul class="flex flex-row items-center justify-evenly w-full py-2">
                <li class="px-4 py-2 font-semibold hover:text-red-500">
                    <a href="">کالا های جذاب</a>
                </li>
                <li class="px-4 py-2 font-semibold hover:text-red-500">
                    <a href="">جدید ترین کالاها</a>
                </li>
                <li class="px-4 py-2 font-semibold hover:text-red-500">
                    <a href="">پرفروش ترین ها</a>
                </li>
                <li class="px-4 py-2 font-semibold hover:text-red-500">
                    <a href="">بیشترین امتیاز</a>
                </li>
            </ul>
        </div>
    </div>
    

    
    <div class="bg-gray-900 h-auto hidden lg:block sticky top-0 z-40">
        <div class="flex flex-row items-center justify-start container relative px-32 w-full mx-auto">
            <ul class="flex flex-row items-center justify-between gap-4 text-white font-semibold border-none">
                <li class="py-6 px-4 bg-red-500 hover:bg-red-800 cursor-pointer"><a href="/"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg></a></li>
                <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="<?php echo e(route('shop')); ?>">کالا ها</a></li>
                <li x-data={categoryDropdown:false} x-on:click="categoryDropdown = !categoryDropdown"
                    class="py-6 px-4 hover:bg-gray-800 cursor-pointer relative">
                    <a class="flex flex-row items-center gap-x-1">
                        دسته بندی ها
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="categoryDropdown" x-on:click.outside="categoryDropdown = false"
                        class="absolute bg-white w-56 h-fit translate-y-6 translate-x-4 border-2 rounded p-1">
                        <div class="grid grid-cols-2 gap-y-2">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <ul class="col-span-1 text-gray-900">
                                    <a href="#"
                                        class="text-base py-1 pr-1"><?php echo e($category->category_name); ?></a>
                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="text-sm font-medium text-gray-500 py-1 px-1 hover:bg-gray-200"><a
                                                href="<?php echo e(route('sub-category', [$subcategory->subcategory_slug])); ?>"><?php echo e($subcategory->subcategory_name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </ul>
                </li>
                <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="<?php echo e(route('cart')); ?>">سبد خرید</a>
                </li>
                <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="<?php echo e(route('checkout')); ?>">تسویه حساب</a></li>
                <li class="py-6 px-4 hover:bg-gray-800 cursor-pointer"><a href="">درباره ی ما</a></li>
            </ul>
        </div>
    </div>
    
</header>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/components/user-header.blade.php ENDPATH**/ ?>