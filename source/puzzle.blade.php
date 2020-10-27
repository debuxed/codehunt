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
    <li>For Clues:</li>
    <ul><li>
	The SPOC will email the CodeHunt Team using the following format. <br>
	<b>Subject:</b> [Clue#] - [Team Name]<br>
	<b>Message Body:</b> [Keep it empty]<br>
	
	<b>Example:</b> Clue 1 - Apocalypse 
    </li></ul>
	
	<li>For Bonus Puzzle: </li>
    <ul><li>
	The SPOC will email the CodeHunt Team using the following format.<br>
	<b>Subject:</b> [BonusPuzzle#] - [Team Name]<br>
	<b>Message Body:</b> [Keep it empty]<br>
	
	<b>Example:</b> Bonus Puzzle 1 - Apocalypse</li></ul>

    <li><i>CODEHUNT TEAM: Kunal Shah, Harshal Patani, Kapil Kumar Trivedi</i></li>
    </ul>
    Any format apart from this won't be considered or evaluated.

@endsection
