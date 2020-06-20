@if($errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
@endif