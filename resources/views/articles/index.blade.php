@extends('layout.app')
@section('content')
    <div class="flex gap-8">
        <div class="flex flex-col gap-4 w-full">
            @forelse ($articles as $article)
                <x-card title="{{ $article->title }}"
                    subtitle="{{ \Carbon\Carbon::parse($article->created_at)->format('d M, Y') }}"
                    body="{{ $article->body }}">
                    <a class="text-white bg-blue-500 p-2 rounded-md" href="{{ route('articles.show', $article) }}">Detail</a>
                    <a class="text-white bg-green-500 p-2 rounded-md" href="{{ route('articles.edit', $article) }}">Edit</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="text-white bg-red-500 p-2 rounded-md" type="submit">Hapus</button>
                    </form>
                </x-card>
            @empty
                <div>Tidak ada Data</div>
            @endforelse
        </div>
        <div class="w-1/4">
            <a href="{{ route('articles.create') }}">
                <div class="w-full bg-blue-500 p-4 rounded-md text-center text-white">
                    Tambah
                </div>
            </a>
        </div>
    </div>
@endsection
