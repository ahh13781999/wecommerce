<div>
    @if (isset($banner->id))
        <div x-intersect="elem = true" x-data="{ elem: false }" class="relative p-6 border">
            <div class="w-5/6 mx-auto">
                <img x-show="elem" x-transition:enter="duration-1000 transition ease-out"
                    x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" width="1270"
                    src="{{ asset('home_slider/' . $banner->image) }}" alt="{{ $banner->title }}">
            </div>
            <div class="absolute top-0 w-full h-full">
                <div class="flex flex-col justify-between gap-y-6">
                    <p class="text-4xl font-bold">{{ $banner->title }}</p>
                    <h3 class="text-2xl font-bold text-red-500 animate-bounce">{{ $banner->subtitle }}</h3>

                </div>
            </div>
            <a x-show="elem" href="{{ $banner->link }}" target="_blank"
                x-transition:enter="duration-1000 transition ease-out" x-transition:enter-start="-translate-y-full"
                x-transition:enter-end="translate-y-0"
                class="absolute bottom-2 left-2 flex flex-row items-center gap-x-1 hover:text-red-500">
                <p class="text-xl">شروع از <span class="font-bold">{{ number_format($banner->price) }}
                        تومان</span></p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                </svg>
            </a>
        </div>
    @endif
</div>
