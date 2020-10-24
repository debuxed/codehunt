@extends('_layouts.master')

@section('title', 'Puzzle')

@section('content')
    <h1>Puzzle</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
