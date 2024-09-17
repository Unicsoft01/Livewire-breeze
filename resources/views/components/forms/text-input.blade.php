@props([
    'name',
    'message',
])

<div class="col-md-12">
    <label for="{{ $name }}" class="form-label">{{ Str::ucfirst($name) }}</label>
    <input class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" {{ $attributes }}>
</div>


