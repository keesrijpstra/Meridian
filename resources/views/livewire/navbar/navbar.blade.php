<div
    class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-800 bg-gray-900 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <button type="button" class="text-gray-400 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
            data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <div class="h-6 w-px bg-gray-700 lg:hidden" aria-hidden="true"></div>

    <div x-data="{ open: false, notificationOpen: false }" class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <div class="flex-1"></div>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <div class="relative flex items-center">
                <button x-on:click="notificationOpen = !notificationOpen; open = false" type="button"
                    class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-300">
                    <span class="sr-only">View notifications</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>
                <div x-cloak x-show="notificationOpen" @click.outside="notificationOpen = false"
                    class="absolute right-0 z-50 w-full">
                    <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                        <div class="fixed overflow-hidden">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                                    <div x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full"
                                        class="pointer-events-auto w-screen max-w-md">
                                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                            <div class="p-6">
                                                <div class="flex items-start justify-between">
                                                    <h2 class="text-base font-semibold text-gray-900"
                                                        id="slide-over-title">Notifications
                                                    </h2>
                                                    <button x-on:click="open = false; notificationOpen = false"
                                                        type="button"
                                                        class="relative rounded-md bg-white text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
                                                        <span class="absolute -inset-2.5"></span>
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="size-6" fill="none" viewBox="0 0 24 24"
                                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18 18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="border-b border-gray-700"></div>
                                            <ul role="list" class="flex-1 divide-y divide-gray-200 overflow-y-auto">
                                                <li>
                                                    <div class="group relative flex items-center px-5 py-6">
                                                        <a href="#" class="-m-1 block flex-1 p-1">
                                                            <div class="absolute inset-0 group-hover:bg-gray-50"
                                                                aria-hidden="true"></div>
                                                            <div class="relative flex min-w-0 flex-1 items-center">
                                                                <span class="relative inline-block shrink-0">
                                                                    <img class="size-10 rounded-full"
                                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                        alt="">
                                                                    <span
                                                                        class="absolute right-0 top-0 block size-2.5 rounded-full bg-green-400 ring-2 ring-white"
                                                                        aria-hidden="true"></span>
                                                                </span>
                                                                <div class="ml-4 truncate">
                                                                    future notifications
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <button x-on:click="open = ! open; notificationOpen = false" type="button"
                    class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false"
                    aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full bg-gray-800" src="{{ $profilePicture }}" alt="">
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6 text-white" aria-hidden="true">
                            {{ $username }}
                        </span>
                        <svg class="ml-2 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <div x-cloak x-show="open" @click.outside="open = false" class="absolute right-0 z-50">
                    <x-card.profile-card>
                        <x-slot name="header">
                            <div class="flex flex-row items-center pl-3">
                                <img class="mx-auto my-6 size-8 rounded-full bg-gray-800" src="{{ $profilePicture }}"
                                    alt="">
                                <span class="ml-4 text-sm font-semibold leading-6" aria-hidden="true">
                                    {{ $username }}
                                </span>

                            </div>

                        </x-slot>
                        <x-slot name="content">
                            <button class="flex flex-col items-center rounded-l p-4 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>
                                <span>Light</span>
                            </button>
                            <button class="flex flex-col items-center p-4 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>
                                <span>Dark</span>
                            </button>
                            <button class="flex flex-col items-center p-4 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                </svg>
                                <span>System</span>
                            </button>

                        </x-slot>
                        <x-slot name="footer">
                            <button class="flex w-full flex-row rounded p-4 hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                                <span>Sign out</span>
                            </button>
                        </x-slot>
                    </x-card.profile-card>
                </div>
            </div>
        </div>
    </div>
</div>
