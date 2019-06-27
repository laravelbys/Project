@extends('app')
@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    @include('parts.errors')
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article -> id]]) !!}
        @include('parts.article-form-inputs', ['buttonText' => 'Update'])
    {!! Form::close() !!}
@endsection
