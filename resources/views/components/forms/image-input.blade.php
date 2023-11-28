<div class="mb-3">
    <label class="col-form-label" for="{{ $id }}">{{ $label }}</label>
    <input type="file" id="{{ $id }}" name="{{ $name }}" class="form-control" accept="image/*" @if($required) required @endif/>

    <img id="preview-{{ $name }}" class="image-preview mt-3" alt="foto" src="{{ Storage::url($value) }}"/>

    @error($name)
    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>
