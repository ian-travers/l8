@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger--}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    {{-- Links--}}
    <div
        x-show="show"
        style="display: none"
        class="py-2 absolute w-full z-50 bg-gray-100 mt-2 rounded-xl overflow-auto max-h-52"
    >
        {{ $slot }}
    </div>
</div>
