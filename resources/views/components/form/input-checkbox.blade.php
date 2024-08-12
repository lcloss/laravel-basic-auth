@props(['name', 'label', 'class' => 'mb-4'])
<div class="{{ $class }}">
    <label class="flex items-center">
        <input type="checkbox" class="form-checkbox text-blue-600" id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>
        <span class="ml-2 text-gray-700">{{ $label }}{{ $slot }}</span>
    </label>
    @if( $errors->has($name) )
        <p class="text-red-500 text-sm mt-1">{{ $errors->first($name) }}</p>
    @endif
</div>
