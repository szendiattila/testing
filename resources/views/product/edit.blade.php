@extends('layouts.app')

@section('content')
    <h1 class="box-title">Termék módosítása</h1>
    {{ Form::model($product, ['url' => ['dashboard/products', $product], 'method' => 'patch']) }}

    @include('product.partials._form', ['submitButton' => 'Módosítás'])
@stop