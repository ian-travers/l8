@props(['name', 'type' => 'test'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name) }}"
        class="border border-gray-400 w-full p-2"
        autofocus
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>
