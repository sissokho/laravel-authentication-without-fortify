@props(['name', 'label', 'type' => 'text'])

<x-form.label :name="$name">{{ $label ?? ucwords($name) }}</x-form.label>
<input type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">
<x-form.error :name="$name" />
