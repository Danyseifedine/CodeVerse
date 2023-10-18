<table class="min-w-max w-full table-auto">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Author</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-center">Created-At</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
    </thead>

    <tbody class="text-gray-600 text-sm font-light">

        @foreach ($posts as $post)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center">
                        <p class="font-bold">{{ ++$iteration }}</p>
                    </div>
                </td>
                <td class="py-3 px-6 text-left">
                    <p class="font-bold">{{ $post->user->name }}</p>
                </td>
                <td class="py-3 px-6 ">
                    <p class="font-bold">{{ $post->title }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <p class="font-bold">{{ $post->created_at }}</p>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center gap-5">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('EditBlog', $post->id) }}">
                                <i class="ri-edit-fill" style="font-size: 30px;"></i> </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <form method="POST" action="{{ route('DeleteBlogPost', $post->id) }}">
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
