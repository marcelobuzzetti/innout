<?php
//Controller temporario

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));

$workedIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workedIntervalString);
echo '<hr>';

$lunchIntervalString = $wh->getLunchInterval()->format('%H:%I:%S');
print_r($lunchIntervalString);
echo '<hr>';

print_r($wh->getExitTime());