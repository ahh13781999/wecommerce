<div class="container mx-auto">
    <div class="my-4 border-2 rounded-xl">
        <div class="w-full bg-gray-200 py-4">
            <h2 class="text-xl font-bold text-gray-500 pr-4">تعویض پسورد</h2>
        </div>
        @if (session()->has('message'))
        <div class="my-4 mx-6">
         <p class="bg-red-500 text-white font-bold py-2 px-4">{{ session()->get('message') }}</p>
        </div>
        @endif
        <form wire:submit.prevent="changePassword"
            class="flex flex-col justify-between w-full items-center my-4 gap-y-6">
            <fieldset class="flex flex-col items-center gap-y-2">
                <label class="font-bold self-start" for="">پسورد فعلی :</label>
                <input
                    class="rounded-lg border-gray-200 hover:ring-red-500 hover:border-transparent focus:border-transparent focus:ring-red-500 focus:ring-2 hover:ring-2 w-full"
                    type="password" wire:model.defer="old_password">
            </fieldset>
            <fieldset class="flex flex-col items-center gap-y-2">
                <label class="font-bold self-start" for="">پسورد جدید :</label>
                <input
                    class="rounded-lg border-gray-200 hover:ring-red-500 hover:border-transparent focus:border-transparent focus:ring-red-500 focus:ring-2 hover:ring-2 w-full"
                    type="password" wire:model.defer="password">
            </fieldset>
            <fieldset class="flex flex-col items-center gap-y-2">
                <label class="font-bold self-start" for="">تایید پسورد :</label>
                <input
                    class="rounded-lg border-gray-200 hover:ring-red-500 hover:border-transparent focus:border-transparent focus:ring-red-500 focus:ring-2 hover:ring-2 w-full"
                    type="password" wire:model.defer="password_confirmation">
            </fieldset>

            @if ($errors->any())
                <div class="flex flex-col gap-y-2 items-center">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-500 before:content-['*']">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="">
                <button class="rounded-lg px-4 py-2 bg-red-500 text-white font-bold text-lg hover:bg-red-800">
                    آپدیت
                </button>
            </div>

        </form>
        <hr class="w-full h-4">
    </div>
</div>
