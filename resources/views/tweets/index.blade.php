@extends('layouts.app')

@section('content')
@foreach($tweets as $tweet)
<div id="contents" class="row">
    <div class="content_post" style=" background-image: url({{ $tweet->image_url }}); ">
        <div class="more">
          <h1>{{ $tweet->title }}</h1>
    </div>
    <form method="post" action="/destroy/{{ $tweet->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit" class="btn" for="_method">DELETE</button>
    </form>
</div>
@endforeach
@endsection
