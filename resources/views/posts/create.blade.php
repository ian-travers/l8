@php /** @var \App\Models\Post $post */ @endphp

<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <x-panel>
            <form action="/admin/post" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Title
                    </label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        value="{{ old('title') }}"
                        class="border border-gray-400 w-full p-2"
                        autofocus
                    >
                    @error('title')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Slug
                    </label>
                    <input
                        id="slug"
                        name="slug"
                        type="text"
                        value="{{ old('slug') }}"
                        class="border border-gray-400 w-full p-2"
                    >
                    @error('slug')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Thumbnail
                    </label>
                    <input
                        id="thumbnail"
                        name="thumbnail"
                        type="file"
                        value="{{ old('thumbnail') }}"
                        class="border border-gray-400 w-full p-2"
                    >
                    @error('thumbnail')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Excerpt
                    </label>
                    <textarea
                        id="excerpt"
                        name="excerpt"
                        class="border border-gray-400 w-full p-2"
                    >{{ old('excerpt') }}</textarea>
                    @error('excerpt')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Body
                    </label>
                    <textarea
                        id="body"
                        name="body"
                        class="border border-gray-400 w-full p-2"
                    >{{ old('body') }}</textarea>
                    @error('body')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>


                <div class="mb-6">
                    <label for="category_id" class="block font-bold text-xs text-gray-700 uppercase mb-2">
                        Category
                    </label>
                    <select name="category_id" id="category_id" class="w-full p-2">
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
