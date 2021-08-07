@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        class="border border-gray-200 w-full rounded p-2"
        {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>
