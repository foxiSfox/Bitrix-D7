<?php

use Bitrix\Main\Type\DateTime;

// current time
$objDateTime = new DateTime();

// from the line in the form of the current site
$objDateTime = new DateTime('21.01.2018 23:30:00');

// from the line indicating the format
$objDateTime = new DateTime('2007-05-14 12:10:00', 'Y-m-d H:i:s');

// get timestamp
$objDateTime->getTimestamp();

// get a line in the format of the current site
$objDateTime->toString();

// get free format
$objDateTime->format('Y-m-d H:i:s');

// change dates
// years, months, days, weeks, hours, minutes, seconds, +/-
$objDateTime->add('1 day');
$objDateTime->add('-1 day');
$objDateTime->add('1 months - 1 days + 1 minutes');
