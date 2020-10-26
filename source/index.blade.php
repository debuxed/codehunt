@extends('_layouts.master')

@section('content')
<h3>Welcome to CodeHunt </h3>
<ul>
<li>Summary</li>
<ul>
<li>Background</li>
<ul>
<li>Welcome Teams,</li>
<li>Your team is part of the most popular startup, "Laxmi Chit Fund". </li>
<li>There are 5 employees working as front liners and supporting the business. They visit the work places to carry critical tasks. </li>
<li>In this situation there are govt and company guidelines to keep everyone safe. </li>
<li>It is important to keep track of employees so we can identify the danger.</li>
<li>There's one… or multiple… challenges, however. </li>
<li>Logging and communication are ALL OVER THE PLACE.  No one stores their data in the same place. </li>
<li>So your job is going to be to start pulling this information together from different data sources. Help us find the COVIDIOT</li>
</ul>
<li>Problem</li>
<ul>
<li>For CODE HUNT,  your team will need to use data from various databases to solve the puzzle. </li>
<li>To solve the puzzle you are given 4 clues (check puzzle tab)</li>
<li>Solving each clue will give you a unique secret key. Using the secret key you will get database information from VAULT. This information will help connect to database and pull below information regarding the following </li>
<li>Employee</li>
<li>Location </li>
<li>Transport </li>
<li>Relation between Employee, location, transport.</li>
<li>Each clue has only one unique solution, and each can be solved using simple logical processes (i.e. educated guesses are not required).</li>
<li>Clues can either provide you and your team a valid association (the subjects are linked) or dissociation (the subjects are not linked).</li>
</ul>
<li>Expected Solution</li>
<ul>
<li>We expect an Automated/Programed solution that would take input as relation and output the covidiot.</li>
<li>Just in Time Bonus Challenge</li>
<li>Every 30 minutes code hunt team will email you bonus question. </li>
<li>Take the solution to the question and go retrieve a go/unwrap token.</li>
<li>The Token is a one time use, so only one team will be able to claim the points. If you’re not in time, go/unwrap will give you an error.</li>
<li>First team to use the unwrap token and provide the value to the Code Hunt Team will earn bonus points!</li>
</ul>
</ul>
@endsection
