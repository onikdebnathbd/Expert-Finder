@if($errors->has('sub_title'))
    <div class="invalid-feedback">
        {{ $errors->first('sub_title') }}
    </div>
@endif