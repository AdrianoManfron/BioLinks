@props(['name', 'value'])

<textarea {{ $attributes }} name="{{ $name }}" class="textarea textarea-bordered">{{ $value }}</textarea>
@error($name)
<span>{{ $message }}</span>
@enderror
