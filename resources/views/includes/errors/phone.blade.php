@if($errors->has('phone'))
    <div class="invalid-feedback">
        {{ $errors->first('phone') }}
    </div>
@endif