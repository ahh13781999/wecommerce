<div class="container mx-auto">
    <div class="my-4 border-2 rounded-xl">
        <div class="w-full bg-gray-200 py-4">
            <h2 class="text-xl font-bold text-gray-500 pr-4">مشخصات کاربر: <?php echo e(auth()->user()->name); ?></h2>
        </div>
        <div class="flex md:flex-row flex-col justify-between items-center w-full my-4 gap-y-6">
            <div class="w-full md:w-1/2 flex flex-row items-center">
                <?php if(isset(auth()->user()->profile->image)): ?>
                    <img class="h-40 w-40 rounded-full mx-auto"
                        src="<?php echo e(asset('profile_photo/' . auth()->user()->profile->image)); ?>" alt="">
                <?php else: ?>
                    <img class="h-40 w-40 rounded-full mx-auto" src="<?php echo e(asset('profile_photo/default.png')); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="flex flex-row w-full md:w-1/2">
                <ul class="space-y-4 mx-6 md:mx-0">
                    <li class="flex flex-row items-center">
                        <p class="text-lg">نام : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->firstname)) {
                            echo $userProfile->firstname;
                        } else {
                            echo 'نامشخص';
                        } ?></p>
                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">نام خانوادگی : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->lastname)) {
                            echo $userProfile->lastname;
                        } else {
                            echo 'نامشخص';
                        } ?></p>
                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">ایمیل : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->email)) {
                            echo $userProfile->email;
                        } else {
                            echo 'نامشخص';
                        } ?></p>
                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">شماره : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->line)) {
                            echo $userProfile->line;
                        } else {
                            echo 'نامشخص';
                        } ?></p>

                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">شهر : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->city)) {
                            echo $userProfile->city;
                        } else {
                            echo 'نامشخص';
                        } ?></p>

                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">استان : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->province)) {
                            echo $userProfile->province;
                        } else {
                            echo 'نامشخص';
                        } ?></p>

                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">کد پستی : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->zipcode)) {
                            echo $userProfile->zipcode;
                        } else {
                            echo 'نامشخص';
                        } ?></p>

                    </li>
                    <li class="flex flex-row items-center">
                        <p class="text-lg">آدرس : </p>
                        <p class="text-black font-bold"><?php if (!empty($userProfile->address)) {
                            echo $userProfile->address;
                        } else {
                            echo 'نامشخص';
                        } ?></p>

                    </li>
                </ul>

            </div>
        </div>
        <hr class="w-full h-4">
        <div class="p-4">
            <h2 class="my-8 pr-2 text-lg font-semibold">ویرایش مشخصات</h2>
            <?php if(session()->has('message')): ?>
                <div class="my-4">
                    <p class="bg-green-500 text-white font-bold py-2 px-4 rounded"><?php echo e(session()->get('message')); ?></p>
                </div>
            <?php endif; ?>
            <form wire:submit.prevent="updateProfile" class="grid grid-cols-12 gap-y-6 gap-x-4">
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">تصویر کاریر</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="file"
                        value="" wire:model="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">نام</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="firstname">
                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">نام خانوادگی</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="lastname">
                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">ایمیل</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">شماره</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="line">
                    <?php $__errorArgs = ['line'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">شهر</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="city">
                    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">استان</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="province">
                    <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for=" " class="font-bold text-gray-700 after:content-[':']">کد پستی</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="zipcode">
                    <?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <fieldset class="col-span-12 md:col-span-6 lg:col-span-4 flex flex-col gap-y-4">
                    <label for="" class="font-bold text-gray-700 after:content-[':']">آدرس</label>
                    <input class="w-full rounded border-gray-200 focus:border-red-500 focus:ring-red-500" type="text"
                        wire:model="address">
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </fieldset>
                <div class="w-1/2">
                    <button class="px-4 py-2 rounded-lg bg-red-500 hover:bg-red-800 text-white font-bold text-lg">
                        آپدیت
                    </button>
                </div>
            </form>
        </div>


    </div>
</div>
<?php /**PATH C:\laragon\www\Wcommerce\resources\views/livewire/user/user-profile-component.blade.php ENDPATH**/ ?>