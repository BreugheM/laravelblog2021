@extends('layouts.admin')
@section('title')
    Category toevoegen
@endsection
@section('content')
    <div class="col-12">
        <h1>Category toevoegen</h1>
    </div>
    <div class="col-8 offset-2">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store','files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('name', 'Category:') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create category', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>


@endsection
