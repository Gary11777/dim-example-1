@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-3 h-3 bg-white rounded-sm inline-block"></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
