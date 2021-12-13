@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create an Item</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'items.store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form']) !!}
                            {{ Form::label('title', 'Title', ['class' => 'label']) }}
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('description', 'Description', ['class' => 'label']) }}
                            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('category_id', 'Category ID', ['class' => 'label']) }}
                            {{ Form::text('category_id', null, ['class' => 'form-control']) }}
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('price', 'Price', ['class' => 'label']) }}
                            {{ Form::number('price', null, ['step'=>'any', 'class' => 'form-control']) }}
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('quantity', 'Quantity', ['class' => 'label']) }}
                            {{ Form::number('quantity', null, ['class' => 'form-control']) }}
                            @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('sku', 'Item SKU', ['class' => 'label']) }}
                            {{ Form::text('sku', null, ['class' => 'form-control']) }}
                            @error('sku')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::label('picture', 'Picture', ['class' => 'label']) }}
                            {{ Form::file('picture', ['class'=>'form-control']) }}
                            @error('picture')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::submit('Add Item', ['class'=> 'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px'])}}
                        {!! Form::close() !!}
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