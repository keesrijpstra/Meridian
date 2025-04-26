<x-layouts.dashboard>
    <div>
        <div class="lg:pl-72">
            <main class="py-10">
                <div class="flex"></div>
                <div class="px-4 sm:px-6 lg:px-8">
                    <span text-color>Welcome back {{ auth()->user()?->name . '!' ?? 'user!' }}</span>
                </div>
            </main>
        </div>
    </div>
    <div class=""></div>
</x-layouts.dashboard>
