<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100 rounded-xl border border-gray-200 p-6 mt-10">
            <h1 class="text-2xl font-bold text-center">Login</h1>

            <form action="/login" method="post" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-xs text-gray-700">
                        Email
                    </label>
                    <input
                        type="email"
                        class="border border-gray-400 p-2 w-full"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase text-xs text-gray-700">
                        Password
                    </label>
                    <input
                        type="password"
                        class="border border-gray-400 p-2 w-full"
                        id="password"
                        name="password"
                        required
                    >
                    @error('password')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2">
                        Login
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>