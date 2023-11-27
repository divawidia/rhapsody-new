<div class="mb-3">
    @if($label) <label for="{{ $id }}" class="form-label">{{ $label }}</label>   @endif
    <select class="form-select select2 @error($name) is-invalid @enderror"
            name="{{ $name }}"
            id="{{ $id }}"
            @if($required) required @endif >
        {{ $slot }}
    </select>

    @error($name)
    <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
    @enderror
</div>
