<table class="min-w-max w-full table-auto">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Name</th>
            <th class="py-3 px-6 text-center">Email</th>
            <th class="py-3 px-6 text-center">Created-At</th>
            <th class="py-3 px-6 text-center">Role</th>
            <th class="py-3 px-6 text-center">Status</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">

        @foreach ($users as $user)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center">
                        <p>{{ ++$iteration }}</p>
                    </div>
                </td>
                <td class="py-3 px-6 text-left">
                    <p class="font-bold">{{ $user->name }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <p class="font-bold">{{ $user->email }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <p class="font-bold">{{ $user->created_at->diffForHumans() }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-sm font-bold">
                        @if ($user->role == '0')
                            User
                        @endif
                        @if ($user->role == '1')
                            Moderator
                        @endif
                        @if ($user->role == '2')
                            Admin
                        @endif
                    </span>
                </td>
                <td class="py-3 px-6 text-center">
                    <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-sm font-bold">
                        @if ($user->status == 'active')
                            active
                        @else
                            Inactive
                        @endif
                    </span>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center gap-5">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('UserEdit', $user->id) }}">
                                <i class="ri-pencil-line" style="font-size: 30px"></i>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <form method="POST" action="{{ route('updateUserStatus', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    @if ($user->status == 'active')
                                        <i class="ri-pause-circle-fill" style="font-size: 30px;"></i>
                                    @else
                                        <i class="ri-play-circle-fill" style="font-size: 30px;"></i>
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
