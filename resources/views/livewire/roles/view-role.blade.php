<div class="px-4 sm:px-6 lg:px-8 max-w-7xl">
    <div x-data="{ open: false }" class="relative">
        <div class="mt-4 flex items-center justify-between pb-6">
            <span class="text-2xl text-white">{{ $role?->name ?? '' }}</span>
            
        </div>
        <x-card-with-header>
            <x-slot name="header">
                ??
            </x-slot>
            <x-slot name="content">
                ??
            </x-slot>
        </x-card-with-header>
    </div>
</div>
