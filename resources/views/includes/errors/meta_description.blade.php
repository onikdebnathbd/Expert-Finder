@if($errors->has('meta_description'))
    <div class="invalid-feedback">
        {{ $errors->first('meta_description') }}
    </div>
@endif