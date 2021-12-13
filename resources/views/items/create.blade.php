@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a Item</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'items.store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form']) !!}
                            {{ Form::label('id', 'Item ID', ['class' => 'label']) }}
                            {{ Form::text('id', '', ['class' => 'form-control']) }}
                            {{ Form::label('category_id', 'Category ID', ['class' => 'label']) }}
                            {{ Form::text('category_id', '', ['class' => 'form-control']) }}
                            {{ Form::label('title', '', ['class' => 'label']) }}
                            {{ Form::text('title', '', ['class' => 'form-control']) }}
                            {{ Form::label('description', '', ['class' => 'label']) }}
                            {{ Form::text('description', '', ['class' => 'form-control']) }}
                            {{ Form::label('price', '', ['class' => 'label']) }}
                            {{ Form::number('price', '', ['class' => 'form-control']) }}
                            {{ Form::label('quantity', '', ['class' => 'label']) }}
                            {{ Form::number('quantity', '', ['class' => 'form-control']) }}
                            {{ Form::label('sku', '', ['class' => 'label']) }}
                            {{ Form::text('sku', '', ['class' => 'form-control']) }}
                            {{ Form::label('picture', '', ['class' => 'label']) }}
                            {{ Form::file('picture', ['class'=>'form-control']) }}
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