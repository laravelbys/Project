@extends('app')

@section('content')
    <h1>Articles</h1>
    @foreach ($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article -> title }}</a>
            </h2>
            <div class="body">{{ $article -> body }}</div>
            <p>{{ date('d-m-Y', strtotime($article -> published_at)) }}</p>
        </article>
    @endforeach
@endsection
