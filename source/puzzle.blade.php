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

    <h2> NOTE </h2>
    <ul>
    <li>For Clues: (Hints)</li>
    <ul><li>
	The SPOC will email the CodeHunt Team using the following format for hints.<br>
	<b>Subject:</b> [Clue#] - [Team Name]<br>
	<b>Message Body:</b> [Keep it empty]<br>
	
	<b>Example:</b> Clue 1 - Apocalypse 
    </li></ul>
	
	<li>For Bonus Puzzle: (Submissions)</li>
    <ul><li>
	The SPOC will email the CodeHunt Team using the following format for submissions.<br>
	<b>Subject:</b> [BonusPuzzle#] - [Team Name]<br>
	<b>Message Body:</b> [Keep it empty]<br>
	
	<b>Example:</b> Bonus Puzzle 1 - Apocalypse</li></ul>

    <li><i>CODEHUNT TEAM: Kunal Shah, Harshal Patani, Kapil Kumar Trivedi</i></li>
    </ul>
    Any format apart from this won't be considered or evaluated.

@endsection
