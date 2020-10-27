@extends('_layouts.master')

@section('content')
<h3>Summary</h3>
<ul>
<li>Background</li>
<ul>
Welcome Teams,
Your team is part of the most popular startup, "Laxmi Chit Fund". 
There are 5 employees working as front liners and supporting the business. They visit the work places to carry critical tasks. 
In this situation there are govt and company guidelines to keep everyone safe. 
It is important to keep track of employees so we can identify the danger.
There's one… or multiple… challenges, however. 
Logging and communication are ALL OVER THE PLACE.  No one stores their data in the same place. 
So your job is going to be, to start pulling this information together from different data sources. Help us find the COVIDIOT
</ul>
<li>Problem</li>
<ul>
For CODE HUNT,  your team will need to use data from various databases to solve the puzzle. 
To solve the puzzle you are given 4 clues (check puzzle tab)
Solving each clue will give you a unique secret key. Using the secret key you will get database information from VAULT. This information will help connect to database and pull below information regarding the following 

<ul>
<li>Employee</li>
<li>Location</li> 
<li>Transport</li>
<li>Relation between Employee, location, transport. </li>
</ul>
Each clue has only one unique solution, and each can be solved using simple logical processes (i.e. educated guesses are not required).
Clues can either provide you and your team a valid association (the subjects are linked) or dissociation (the subjects are not linked).
</ul>
</ul>
<li>Expected Solution</li>
<ul>
We expect an Automated/Programmed solution that would take input as the values of relation table and return all the relation between Employee, Transport and Zone.
</ul>

<li>Just in Time Bonus Challenge.</li>
<ul>
Code Hunt team will email you bonus questions in between the hunt to improve your scores. The solution will be a key, use this key to fetch the "unwrap token".
Take the token and go retrieve the value from <b>go/unwrap</b>.
The Token is a one time use, so only one team will be able to claim the points. If you’re not in time, <b>go/unwrap</b> will give you an error.
First team to use the unwrap token and provide the value to the Code Hunt Team will earn bonus points!

</ul>
<li> Disclaimer: The Codehunt team will be unbiased while selecting podiums in case of close calls or even ties and the Code Hunt committee's call will be the final one. </li>
</ul>
</ul>
@endsection
