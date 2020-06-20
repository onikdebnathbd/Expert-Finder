@if($errors->has('message'))
    <div class="invalid-feedback">
        {{ $errors->first('message') }}
    </div>
@endif