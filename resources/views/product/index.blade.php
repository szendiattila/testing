@extends('layouts.app')

@section('content')
    @if(count($products) > 0)
        <div class="pull-right">
            <a href="{{ url('dashboard/products/create') }}">Új termék hozzáadása</a>
        </div>
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
                        <td>
                            {{ Form::open(['url' => 'dashboard/products/' . $product->id, 'method' => 'delete']) }}
                            <div class="btn-group">
                                <a href="{{ url('dashboard/products/' . $product->id . '/edit') }}"
                                   class="btn btn-primary">Módosítás</a>
                                    {{ Form::submit('Törlés', ['class' => 'btn btn-danger']) }}
                            </div>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop