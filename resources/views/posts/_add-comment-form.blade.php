@auth()
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="avatar" width="40"
                     height="40"
                     class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <x-form.textarea name="body"/>

            <x-form.button>Submit</x-form.button>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">login</a> to leave a comment
    </p>
@endauth
