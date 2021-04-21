@extends('layout')

@section('content')
    <article>
        <h1>{{ optional($post)->title }}</h1>
        <div>
            {!! optional($post)->body !!}
        </div>
    </article>
    <a href="/">Go Back</a>
@endsection
