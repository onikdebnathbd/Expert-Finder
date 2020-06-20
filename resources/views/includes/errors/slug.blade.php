@if($errors->has('slug'))
    <div class="invalid-feedback">
        {{ $errors->first('slug') }}
    </div>
@endif