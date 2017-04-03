@extends('layouts.app')

@section('content')
    <h1>Új termék hozzáadása</h1>

    {{ Form::open(['url' => 'dashboard/products']) }}

    @include('product.partials._form', ['submitButton' => 'Mentés'])

@stop