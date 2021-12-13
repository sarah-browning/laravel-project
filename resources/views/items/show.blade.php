@extends('layouts.public')

@section('content')
    @php
        // dd($items);
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Items</div>

                    <div class="card-body">
                        @php
                            //dd($items);
                        @endphp
                        <h1 class="pull-right"><a href='/items/' class='btn btn-info' role='button'>All Items</a></h1>
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category ID</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>SKU</th>
                                <th>Picture</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->category_id }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->sku }}</td>
                                    <td>{{ $item->picture }}</td>
                                    <td>
                                        <div style="float:left;"><a href="{{ route('items.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a></div>
                                        <div style="float:left; margin-left:5px">
                                            {!! Form::open([
                                                                'route'=> ['items.destroy', $item->id], 
                                                                'method' => 'DELETE', 
                                                                'onsubmit' => 'return confirm("Delete Item? Are you sure?")'
                                                            ]) !!}
                                                {{ Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) }}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection

@section('css')
    
@endsection