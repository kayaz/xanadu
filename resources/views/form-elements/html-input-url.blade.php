<div class="form-group row">
    @isset($required)
        {!! Form::label($name, '<div class="text-right">'.$label.' <span class="text-danger d-inline">*</span></div>', ['class' => 'col-3 col-form-label control-label required'], false) !!}
    @else
        {!! Form::label($name, '<div class="text-right">'.$label.'</div>', ['class' => 'col-3 col-form-label control-label required'], false) !!}
    @endisset
    <div class="@isset($class) {{ $class }} @else {{ 'col-4' }} @endisset">
        <div class="input-group input-url">
        @isset($value)
            {!! Form::text($name, old($name, $value), ['class' => 'form-control']) !!}
        @else
            {!! Form::text($name, null, ['class' => 'form-control']) !!}
        @endisset
        @if($errors->first($name))<div class="invalid-feedback d-block">{{ $errors->first($name) }}</div>@endif
            <div class="input-group-append d-none">
                <button class="btn btn-primary" type="button">Otwórz link</button>
            </div>
        </div>
    </div>
</div>

