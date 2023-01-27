<?php
 echo "<h1>PHP function for check capacity</h1>";
function check_capacity( $capacity, $attendees = 0 ) {
	if ( $attendees < $capacity ) {
		return 'There are still tickets available.';
	}

	return 'This event is sold out.';
}

// Array: key => [capacity, attendees];
$venues = array( 
	'Milano' => [80, 50],
	'Sarajevo' => [50, 50], 
	'Berlin'=> [75, 30], 
	'Seoul' => [200, 99],
	'New York' => [50, 69],
);

foreach ( $venues as $name => $numbers ) {
	echo $name . ' - ' . check_capacity($numbers[0], $numbers[1]) . '<br/>';
}