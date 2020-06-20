@if($errors->has('confirm_password'))
    <div class="invalid-feedback">
        {{ $errors->first('confirm_password') }}
    </div>
@endif