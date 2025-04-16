<div class="p-4  w min-h-screen">
    <div class=" mx-auto">
        <table class="min-w-full  border rounded-lg shadow-lg">
            <thead class=" bg-zinc-800">
                <tr>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-zinc-200 border-b border border-zinc-600">ID</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-zinc-200 border-b border border-zinc-600">Name</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-zinc-200 border-b border border-zinc-600"> Email</th>
                    <th class="py-3 px-6 text-left text-sm font-semibold text-zinc-200 border-b border border-zinc-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-zinc-800 transition-colors">
                        <td class="py-4 px-6 text-sm text-zinc-300 border-b border border-zinc-700">{{ $user->id }}</td>
                        <td class="py-4 px-6 text-sm text-zinc-300 border-b border border-zinc-700">{{ $user->name }}</td>
                        <td class="py-4 px-6 text-sm text-zinc-300 border-b border border-zinc-700">{{ $user->email }}</td>
                        <td class="py-4 px-6 text-sm text-zinc-200 border-b border border-zinc-700 flex">
                            <form wire:submit.prevent="update">
{{--                            <flux:button variant="primary" type="submit" class="m-2" size="sm">Edit</flux:button>--}}

                                <flux:modal.trigger name="edit-profile">
                                    <flux:button class="m-2" size="sm">Edit profile</flux:button>
                                </flux:modal.trigger>

                                <flux:modal name="edit-profile" class="md:w-96">
                                    <div class="space-y-6">
                                        <div>
                                            <flux:heading size="lg">Update profile</flux:heading>
                                            <flux:text class="mt-2">Make changes to users details.</flux:text>
                                        </div>

                                        <flux:input label="Name" placeholder="Name" />

                                        <flux:input label="Email" type="text" placeholder=" Email" />
                                        <flux:input label="Password" type="password" placeholder=" New Password" />
                                        <flux:input label="Role" type="text" placeholder="Role" />

                                        <div class="flex">
                                            <flux:spacer />

                                            <flux:button type="submit" variant="primary">Save changes</flux:button>
                                        </div>
                                    </div>
                                </flux:modal>

                            </form>
                            <flux:separator vertical class="m-2" />
                            <flux:button variant="danger" class="m-2" size="sm">Delete</flux:button>

                        </td>
                        {{-- <td class="py-4 px-6 text-sm text-zinc-300 border-b border border-zinc-700">{{ $user->created_at->format('d/m/Y') }}</td> --}}
                    </tr>
                    @endforeach

                </tbody>
        </table>
        <div class="mt-4 flex justify-end">
            {{ $users->links() }}
        </div>
    </div>
</div>
