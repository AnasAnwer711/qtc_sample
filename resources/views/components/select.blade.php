@props(['name', 'placeholder', 'options', 'selected' => null, 'class' => ''])

<select {{ $attributes->merge(['class' => 'form-select ' . $class]) }} name="{{ $name }}" id="{{ $name }}">
    <option value="" selected>Select {{ $placeholder }}</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
