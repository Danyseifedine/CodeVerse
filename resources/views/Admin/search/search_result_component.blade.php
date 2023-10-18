
    @foreach ($snippets as $snippet)
        <a href="{{ route('GetSnippet', ['name' => $snippet->user->name, 'id' => $snippet->id]) }}"
            class="transform duration-500 hover:scale-105 mt-12 p-4">
            <div class="col-span-1 outsideDiv py-3 px-0 cursor-pointer rounded-md">
                <div class="lg:relative relaDiv changeColor lg:h-72 w-full px-3 rounded-md">
                    <div class="insideDiv lg:absolute lg:grid -top-5 -left-5 gap-3 w-full">

                        <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded"
                            style="height: 300px !important;    background-image: url('{{ asset('Snippet_file/' . $snippet->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                            class="h-full w-full object-fill rounded-md"> --}}
                        </div>
                        <div class="flex justify-between gap-2 mt-5 lg:mt-0">
                            <div class="flex items-center text-white gap-2">
                                @if ($snippet->user->image)
                                    <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded-full"
                                        style="height: 50px !important;width:50px;background-image: url('{{ asset('Profile_img/' . $snippet->user->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                        {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                            class="h-full w-full object-fill rounded-md"> --}}
                                    </div>
                                @else
                                    <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded-full"
                                        style="height: 40px !important;width:40px;background-image: url('{{ asset('images/default.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                        {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                        class="h-full w-full object-fill rounded-md"> --}}
                                    </div>
                                @endif
                                <div>
                                    <p>{{ $snippet->user->name }}</p>
                                    <p class="text-gray-300 opacity-70">{{ $snippet->title }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="text-gray-300 opacity-70">{{ $snippet->created_at->diffForHumans() }}
                                </div>
                                <div class="text-white opacity-90 text-right">{{ $snippet->description }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach



</div>
