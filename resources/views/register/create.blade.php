<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100 rounded-xl border border-gray-200 p-6 mt-10">
            <h1 class="text-2xl font-bold text-center">Register!</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase text-xs text-gray-700">
                        Name
                    </label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        id="name"
                        name="name"
                        required autofocus
                    >
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase text-xs text-gray-700">
                        Username
                    </label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        id="username"
                        name="username"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-xs text-gray-700">
                        Email
                    </label>
                    <input
                        type="email"
                        class="border border-gray-400 p-2 w-full"
                        id="email"
                        name="email"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase text-xs text-gray-700">
                        Username
                    </label>
                    <input
                        type="password"
                        class="border border-gray-400 p-2 w-full"
                        id="password"
                        name="password"
                        required
                    >
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
