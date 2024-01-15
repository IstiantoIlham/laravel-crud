@extends('layout.app')
@section('content')
    <div class="space-y-4 p-4 border rounded-md w-1/2">
        <div class="text-2xl font-medium">Tambah Data</div>
        <form action="{{ route('articles.store') }}" method="post" class="flex flex-col gap-4 ">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                    class="border rounded @error('title') border-red-500 @enderror">
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="body">Body</label>
                <textarea class="border rounded @error('body') border-red-500 @enderror" type="text" name="body" id="body"
                    rows="3"></textarea>
                @error('body')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="p-2 bg-blue-500 text-white rounded-md">Create</button>
        </form>
    </div>
@endsection
