@extends('_layouts.master')

@section('title', 'Puzzle')

@section('content')
    <h3>Puzzle</h3>

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
