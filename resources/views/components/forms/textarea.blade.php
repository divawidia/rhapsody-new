<div class="mb-3">
    @if($label) <label for="{{ $id }}" class="form-label">{{ $label }}</label>   @endif
    <textarea class="form-control ckeditor @error($name) is-invalid @enderror"
              name="{{ $name }}"
              id="{{ $id }}"
              placeholder="{{ $placeholder }}"
              @if($required) required @endif rows="5">

        {{ old($name, $value) }}

    </textarea>

    @error($name)
    <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
    @enderror
</div>
