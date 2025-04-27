<div class="px-4 sm:px-6 lg:px-8">
    <div x-data="{ open: false }" class="relative">
        <div class="mt-4 flex items-center justify-between">
            <span class="text-2xl text-white">Roles</span>
            <button x-on:click="open = true" type="button"
                class="rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Add role
            </button>
        </div>

        <div x-show="open" x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0"
            @click.outside="open = false" x-transition:leave-end="translate-x-full"
            class="fixed inset-0 overflow-hidden" style="display: none;">
            <div class="inset-0 overflow-hidden">
                <div class="fixed inset-y-0 right-0 flex pl-10">
                    <div class="relative w-screen max-w-md">
                        <div class="flex h-full h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                            <div class="px-4 sm:px-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900">Add New Role</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button x-on:click="open = false"
                                            class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                <div class="flex h-full flex-col justify-between">
                                    <div class="space-y-6">
                                        <div>
                                            <div>
                                                <label for="name"
                                                    class="block text-sm/6 font-medium text-gray-900">Name</label>
                                                <div class="mt-2">
                                                    <input type="text" wire:model="name" name="name"
                                                        id="name"
                                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                        placeholder="Guest">
                                                </div>
                                            </div>
                                        </div>

                                        <div x-data="{ open: false }" @click.outside="open = false"
                                            class="relative inline-block text-left">
                                            <div>
                                                <button x-on:click="open = true" type="button"
                                                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                    {{ $selectedGuard ?? 'Guard' }}
                                                    <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path fill-rule="evenodd"
                                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div x-show="open"
                                                class="absolute z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hover:cursor-pointer focus:outline-none"
                                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                                tabindex="-1">
                                                <div class="py-1 hover:bg-gray-300"
                                                    wire:click="selectGuard('web_guard'); open = false">
                                                    <button class="block px-4 py-2 text-sm text-gray-700"
                                                        role="menuitem" tabindex="-1"
                                                        id="menu-item-0">web_guard</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <div class="flex justify-end">
                                            <button x-on:click="open = false" type="button"
                                                class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                Cancel
                                            </button>
                                            <button type="submit" wire:click="submit()" x-on:click="open = false"
                                                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Guard
                                    name
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                    Permissions
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                    Updated at
                                </th>
                                <th scope="col"
                                    class="flex justify-end px-3 py-3.5 text-sm font-semibold text-white">
                                    <input wire:model.live="searchTerm" type="text"
                                        class="mr-3 rounded-md bg-gray-700 px-3 py-2 text-white"
                                        placeholder="Search roles...">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 bg-gray-900">
                            @if ($roles && count($roles) > 0)
                                @foreach ($roles as $role)
                                    <tr class="w-full hover:bg-gray-700">

                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-6">
                                            <a href="{{ route('roles.view', $role->id) }}">

                                                {{ $role?->name ?? '' }}
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                            <a href="{{ route('roles.view', $role->id) }}">

                                                {{ $role?->guard_name ?? '' }}
                                            </a>
                                        </td>

                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                            <a href="{{ route('roles.view', $role->id) }}">

                                                {{ $role?->permissions_count ?? 0 }} permissions
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                            <a href="{{ route('roles.view', $role->id) }}">

                                                {{ $role?->updated_at ?? '' }}
                                        </td>
                                        </a>
                                        <td class="flex justify-end px-7 py-4 text-white">
                                            <span class="cursor-pointer hover:text-indigo-400"
                                                @click="$dispatch('open-edit-modal', { id: {{ $role->id }} })">Edit</span>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">
                                        <div
                                            class="flex min-w-full flex-col items-center justify-center rounded-lg border border-gray-800 bg-gray-900 py-12">
                                            <div class="text-center">
                                                <svg class="mx-auto h-24 w-24 text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                </svg>

                                                <h3 class="mt-4 text-xl font-medium text-gray-300">No roles found</h3>
                                                <p class="mt-2 text-sm text-gray-500">Get started by creating your
                                                    first role.</p>

                                                <div
                                                    class="mt-8 transform transition-all duration-300 hover:scale-105">
                                                    <button @click="$parent.open = true" type="button"
                                                        class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                        <svg class="-ml-1 mr-2 h-5 w-5"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                        </svg>
                                                        Create your first role
                                                    </button>
                                                </div>

                                                <div
                                                    class="mx-auto mt-10 max-w-md rounded-lg border border-gray-700 bg-gray-800 p-5 text-left">
                                                    <h4 class="text-md mb-2 font-medium text-gray-300">Quick tips:</h4>
                                                    <ul class="space-y-2 text-sm text-gray-400">
                                                        <li class="flex items-start">
                                                            <svg class="mr-2 h-5 w-5 text-indigo-400"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            Roles help you manage access to your application
                                                        </li>
                                                        <li class="flex items-start">
                                                            <svg class="mr-2 h-5 w-5 text-indigo-400"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            Assign permissions to each role to control what users can do
                                                        </li>
                                                        <li class="flex items-start">
                                                            <svg class="mr-2 h-5 w-5 text-indigo-400"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            Common roles include Admin, Editor, and Viewer
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div x-data="{ openEditModal: false, editRoleId: null }"
                        @open-edit-modal.window="openEditModal = true; editRoleId = $event.detail.id; $wire.editRole($event.detail.id)"
                        x-show="openEditModal" x-transition:enter="transform transition ease-in-out duration-300"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-300"
                        x-transition:leave-start="translate-x-0" @click.outside="openEditModal = false"
                        x-transition:leave-end="translate-x-full" class="fixed inset-0 z-50 overflow-hidden"
                        style="display: none;">
                        <div class="inset-0 overflow-hidden">
                            <div class="fixed inset-y-0 right-0 flex pl-10">
                                <div class="relative w-screen max-w-md">
                                    <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                                        <div class="px-4 sm:px-6">
                                            <div class="flex items-start justify-between">
                                                <h2 class="text-lg font-medium text-gray-900">Edit Role</h2>
                                                <div class="ml-3 flex h-7 items-center">
                                                    <button x-on:click="openEditModal = false"
                                                        class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                            <div class="flex h-full flex-col justify-between">
                                                <div class="space-y-6">
                                                    <div>
                                                        <div>
                                                            <label for="edit-name"
                                                                class="block text-sm/6 font-medium text-gray-900">Name</label>
                                                            <div class="mt-2">
                                                                <input type="text" wire:model="editName"
                                                                    name="edit-name" id="edit-name"
                                                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                                    placeholder="Role name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div x-data="{ editGuardOpen: false }"
                                                        @click.outside="editGuardOpen = false"
                                                        class="relative inline-block text-left">
                                                        <div>
                                                            <button x-on:click="editGuardOpen = true" type="button"
                                                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                                                id="edit-menu-button" aria-expanded="true"
                                                                aria-haspopup="true">
                                                                {{ $editGuard ?? 'Guard' }}
                                                                <svg class="-mr-1 size-5 text-gray-400"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true" data-slot="icon">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div x-show="editGuardOpen"
                                                            class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hover:cursor-pointer focus:outline-none"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="edit-menu-button" tabindex="-1">
                                                            <div class="py-1 hover:bg-gray-300"
                                                                wire:click="selectEditGuard('web_guard'); editGuardOpen = false">
                                                                <button class="block px-4 py-2 text-sm text-gray-700"
                                                                    role="menuitem" tabindex="-1"
                                                                    id="edit-menu-item-0">web_guard</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mt-auto pt-4">
                                                    <div class="flex justify-end">
                                                        <button x-on:click="openEditModal = false" type="button"
                                                            class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" wire:click="updateRole"
                                                            x-on:click="openEditModal = false"
                                                            class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
