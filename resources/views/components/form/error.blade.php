@props(['name'])

@error($name)
    <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
@enderror
