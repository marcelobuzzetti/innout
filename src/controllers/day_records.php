<?php
session_start();
requireValidSession();

/* Deprecated */
/* $date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date); */

$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$today = $formatter->format(time());

loadTemplateView('day_records', ['today' => $today]);