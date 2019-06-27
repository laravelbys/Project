@extends('app')
@section('content')
    <h1>Write a New Article</h1>
    <hr/>
    @include('parts.errors')
    {!! Form::open(['url' => 'articles/store']) !!}
        @include('parts.article-form-inputs', ['buttonText' => 'Create'])
    {!! Form::close() !!}
@endsection
