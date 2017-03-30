@extends('layouts.app')

@section('content')
    @if(count($products) > 0)
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td><a href="{{ url('dashboard/products/' . $product->id . '/edit') }}">Módosítás</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop