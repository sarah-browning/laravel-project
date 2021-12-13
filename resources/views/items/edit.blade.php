@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Item</div>

                    <div class="card-body">
                        {!! Form::model($item, ['route' => ['items.update', $item->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form']) !!}
                            {{ Form::label('title', 'Title', ['class' => 'label']) }}
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                            {{ Form::label('description', 'Description', ['class' => 'label']) }}
                            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                            {{ Form::label('category_id', 'Category ID', ['class' => 'label']) }}
                            {{ Form::text('category_id', null, ['class' => 'form-control']) }}
                            {{ Form::label('price', 'Price', ['class' => 'label']) }}
                            {{ Form::number('price', null, ['step'=>'any', 'class' => 'form-control']) }}
                            {{ Form::label('quantity', 'Quantity', ['class' => 'label']) }}
                            {{ Form::number('quantity', null, ['class' => 'form-control']) }}
                            {{ Form::label('sku', 'Item SKU', ['class' => 'label']) }}
                            {{ Form::text('sku', null, ['class' => 'form-control']) }}
                            {{ Form::label('picture', 'Picture', ['class' => 'label']) }}
                            {{ Form::file('picture', ['class'=>'form-control']) }} 
                            {{ Form::submit('Save Item', ['class'=> 'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px'])}}
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