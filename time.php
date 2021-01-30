<?php
date_default_timezone_set('Europe/Belgrade');
$today = strtotime('today 20:00');
$tomorrow = strtotime('tomorrow 20:00');
$now = time();
$timeLeft = ($now > $today ? $tomorrow : $today) - $now;
printf("Remaining: %s\n", gmdate("H:i:s", $timeLeft));

?>
