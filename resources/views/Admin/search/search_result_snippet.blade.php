<table class="min-w-max w-full table-auto">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Publisher</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Category</th>
            <th class="py-3 px-6 text-cemter">Status</th>
            <th class="py-3 px-6 text-center">Created-At</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
    </thead>

    <tbody class="text-gray-600 text-sm font-light">

        @foreach ($snippets as $snippet)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center text-center">
                        <p class="font-bold">{{ ++$iteration }}</p>
                    </div>
                </td>
                <td class="py-3 px-6 text-left">
                    <p class="font-bold">{{ $snippet->user->name }}</p>
                </td>
                <td class="py-3 px-6 ">
                    <p class="font-bold">{{ $snippet->title }}</p>
                </td>
                <td class="py-3 px-6 ">
                    <p class="font-bold">{{ $snippet->category }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    @if ($snippet->status == 'pending')
                        <p class="text-yellow-500 p-1 rounded-full text-sm font-bold">
                            {{ $snippet->status }}</p>
                    @endif

                    @if ($snippet->status == 'published')
                        <p class="text-green-500 p-1 rounded-full text-sm font-bold">
                            {{ $snippet->status }}</p>
                    @endif

                    @if ($snippet->status == 'rejected')
                        <p class="text-red-500 p-1 rounded-full text-sm font-bold">
                            {{ $snippet->status }}</p>
                    @endif

                </td>
                <td class="py-3 px-6 text-center">
                    <p class="font-bold">{{ $snippet->created_at->diffForHumans() }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center gap-5">
                        <div class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                            <a href="{{ route('SnippetEdit', $snippet->id) }}">
                                <i class="ri-edit-fill" style="font-size: 30px;"></i> </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                            <form method="POST" action="{{ route('SnippetDelete', $snippet->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="ri-delete-bin-fill" style="font-size: 30px;"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
