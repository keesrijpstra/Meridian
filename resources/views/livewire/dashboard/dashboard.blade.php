<x-layouts.dashboard>
    <div>
        <div class="lg:pl-72">
            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    @if (request()->is('users'))
                        @livewire('users')
                    @endif
                </div>
            </main>
        </div>
    </div>
</x-layouts.dashboard>
