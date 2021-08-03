<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-2xl font-bold text-center">Register!</h1>
                <form action="/register" method="post" class="mt-10">
                    @csrf

                    <x-form.input name="name" autocomplete="name" required/>
                    <x-form.input name="username" autocomplete="username"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="password" type="password"/>

                    <x-form.button>Submit</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
