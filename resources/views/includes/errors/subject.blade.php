@if($errors->has('subject'))
    <div class="invalid-feedback">
        {{ $errors->first('subject') }}
    </div>
@endif