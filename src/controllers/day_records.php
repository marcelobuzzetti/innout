<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

/* Deprecated */
/* $date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date); */

$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$today = $formatter->format(time());

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', [
    'today' => $today,
    'records' => $records
]);