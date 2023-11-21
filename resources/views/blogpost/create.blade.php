<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Post Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('blogpost.store')}}" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input type="text" name="name" class="block w-full mt-1 rounded-md" placeholder=""
                                    value="" />
                            </label>
                            @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Title</span>
                                <input type="text" name="title" class="block w-full mt-1 rounded-md" placeholder=""
                                    value="" />
                            </label>
                            @error('title')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Content</span>
                                <textarea id="editor" class="block w-full mt-1 rounded-md" name="content" rows="3"></textarea>
                            </label>
                            @error('content')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Choose image</span>
                                <input type="file" name="image" class="block w-full"/>
                            </label>
                            </div>
                            @error('image')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror

                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Meta Keyword</span>
                                <input type="text" name="meta_keyword" class="block w-full mt-1 rounded-md" placeholder=""
                                    value="" />
                            </label>
                            @error('meta_keyword')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Meta Description</span>
                                <input type="text" name="meta_description" class="block w-full mt-1 rounded-md" placeholder=""
                                    value="" />
                            </label>
                            @error('meta_description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <x-primary-button type="submit">
                            Submit
                        </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>