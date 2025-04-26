<div class="px-4 sm:px-6 lg:px-8">
    <div class="mt-4 flex items-center justify-between">
        <span class="text-2xl text-white" >Users</span>
        <button wire:click="addUser" type="button"
            class="s rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Add user <span>{{ $userCount > 0 ? "($userCount)" : '' }}</span>
        </button>
    </div>

    @if ($searchTerm)
        <div class="mt-2 text-sm text-gray-300">
            Searching for: {{ $searchTerm }}
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
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Email
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Role
                                </th>
                                <th scope="col"
                                    class="flex justify-end px-3 py-3.5 text-sm font-semibold text-white">
                                    <input wire:model.live="searchTerm" type="text"
                                        class="mr-3 rounded-md bg-gray-700 px-3 py-2 text-white"
                                        placeholder="Search users...">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 bg-gray-900">
                            @foreach ($users as $user)
                                <tr class="w-full hover:bg-gray-700">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-6">
                                        {{ $user?->name ?? '' }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                        {{ $user?->email ?? '' }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">Member</td>
                                    <td class="flex justify-end px-7 py-4 text-white" ><span class="hover:text-indigo-400 cursor-pointer">Edit</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
