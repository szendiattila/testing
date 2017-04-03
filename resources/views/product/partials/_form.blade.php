<div class="form-group">
    {{ Form::label('name', 'Megnevezés') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Termék megnevezése...']) }}
</div>

<div class="form-group">
    {{ Form::label('price', 'Ár') }}
    {{ Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Termék ára...']) }}
</div>

<div class="form-group">
    {{ Form::label('short_description', 'Rövid leírás') }}
    {{ Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'Termék rövid leírása...']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Hosszú leírás') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Termék hosszú leírása...']) }}
</div>

<div class="form-group">
    {{ Form::submit($submitButton, ['class' => 'form-control btn btn-primary']) }}
    <a class="btn btn-danger form-control" href="{{ url('/dashboard/products') }}">Mégse</a>
</div>
