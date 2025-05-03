<div class="px-4 sm:px-6 lg:px-8">
    <div class="mt-4 flex items-center justify-between">
        <span class="text-2xl text-white">Websites</span>
        <button x-data type="button"
            class="s rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
            @click.prevent="
            Livewire.emitTo(
                'slide-over-panel-component',
                'openPanel',
                'Realtime Validation Example',
                'real-time-validation-example'
            )">
            Add website <span></span>
        </button>
        <div x-data="{ open: @entangle('open').live }" @keydown.window.escape="$wire.closePanel()" class="position-relative">

            {{-- Backdrop --}}
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="position-fixed w-100 h-100 bg-dark start-0 top-0 bg-opacity-50" style="z-index: 1040;">
            </div>

            {{-- Panel --}}
            <div x-show="open" x-cloak @click.away="$wire.closePanel()"
                x-transition:enter="transition transform duration-300" x-transition:enter-start="translate-x-100"
                x-transition:enter-end="translate-x-0" x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-100"
                class="position-fixed bottom-0 end-0 top-0 overflow-y-auto bg-white shadow-lg"
                style="width: 32rem; z-index: 1041; transform: translateX(0);">

                {{-- Header --}}
                <div class="border-bottom bg-light px-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Slide Panel</h5>
                        <button type="button" class="btn-close" wire:click="closePanel" aria-label="Close">
                        </button>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-4">
                    @if ($component)
                        @livewire($component, $params, key('slide-panel-' . $component))
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                            <div class="p-4 text-center">
                                <h6 class="fw-bold mb-2">Dynamic Component Panel</h6>
                                <p class="text-muted mb-0">This panel can display any Livewire component dynamically.
                                    Use the openPanel event to load your desired component here.</p>
                            </div>
                        </div>
                    @else
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                            <div class="p-4 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-auto mb-3"
                                    width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <h6 class="fw-bold mb-2">Dynamic Component Panel</h6>
                                <p class="text-muted mb-0">This panel can display any Livewire component dynamically.
                                    Use the openPanel event to load your desired component here.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if ($searchTerm)
        <div class="mt-2 text-sm text-gray-300">
            Searching for: {{ $searchTerm ?? '' }}
        </div>
    @endif

    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-white/10 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-700">
                        <thead class="bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Name
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white"> Url
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                    Monitoring enabled
                                </th>
                                <th scope="col"
                                    class="flex justify-end px-3 py-3.5 text-sm font-semibold text-white">
                                    <input wire:model.live="searchTerm" type="text"
                                        class="mr-3 rounded-md bg-gray-700 px-3 py-2 text-white"
                                        placeholder="Search websites...">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 bg-gray-900">
                            <tr class="w-full hover:bg-gray-700">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-6">

                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">Member</td>
                                <td class="flex justify-end px-7 py-4 text-white"><span
                                        class="cursor-pointer hover:text-indigo-400">Edit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
