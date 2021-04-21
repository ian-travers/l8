<x-layout>
    <article>
        <h1>{{ optional($post)->title }}</h1>
        <div>
            {!! optional($post)->body !!}
        </div>
    </article>
    <a href="/">Go Back</a>
</x-layout>
