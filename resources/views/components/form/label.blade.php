@props(['name'])

<label for="{{ $name }}" class="block font-bold text-xs text-gray-700 uppercase mb-2">
    {{ ucwords($name) }}
</label>
