@if($errors->has('password'))
    <div class="invalid-feedback">
        {{ $errors->first('password') }}
    </div>
@endif