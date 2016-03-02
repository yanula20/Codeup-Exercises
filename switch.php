<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)


$dayOfWeek = date('N');

switch($dayOfWeek) {
	case 1:
	echo "mon\n\n";
	break;

	case 2:
	echo "tue\n\n";
	break;

	case 3:
	echo "wed\n\n";
	break;

	case 4:
	echo "thurs\n\n";
	break;

	case 5:
	echo "fri\n\n";
	break;

	case 6:
	echo "sat\n\n";
	break;

	case 7:
	echo "sun\n\n";
	break;

	case 8:
	echo "not a day of the week";

}