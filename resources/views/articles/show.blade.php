@extends('layout.app')
@section('content')
    <div class="flex flex-col gap-4">
        <div class="text-2xl font-medium">{{ $article->title }}</div>
        <div>{{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y') }}</div>
        <div> {{ $article->body }} </div>
    </div>
@endsection
