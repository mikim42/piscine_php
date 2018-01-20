#!/usr/bin/php
<?php
if ($argc < 2)
	return (0);

$input = explode(" ", $argv[1]);

if (count($input) != 5 ||
	preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $input[1], $input[1]) === 0 ||
	preg_match("/^[0-9]{4}$/", $input[3], $input[3]) === 0 ||
	preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $input[4], $input[4]) === 0)
{
	print "Wrong Format\n";
	return (0);
}

$month;
$week;

switch($input[0])
{
case "Lundi":
	$week = 1;
	break ;
case "Mardi":
	$week = 2;
	break ;
case "Mercredi":
	$week = 3;
	break ;
case "Jeudi":
	$week = 4;
	break ;
case "Vendredi":
	$week = 5;
	break ;
case "Samedi":
	$week = 6;
	break ;
case "Dimanche":
	$week = 7;
	break ;
default:
	$week = 0;
	break ;
}
switch($input[2])
{
case "Janvier":
	$month = 1;
	break ;
case "Fevrier":
	$month = 2;
	break ;
case "Mars":
	$month = 3;
	break ;
case "Avril":
	$month = 4;
	break ;
case "Mai":
	$month = 5;
	break ;
case "Juin":
	$month = 6;
	break ;
case "Juillet":
	$month = 7;
	break ;
case "Aout":
	$month = 8;
	break ;
case "Septembre":
	$month = 9;
	break ;
case "Octobre":
	$month = 10;
	break ;
case "Novembre":
	$month = 11;
	break ;
case "Decembre":
	$month = 12;
	break ;
default:
	$month = 0;
	break;
}

if ($week == 0 || $month == 0)
{
	print "Wrong Formant\n";
	return (0);
}

$time = mktime($input[4][1], $input[4][2], $input[4][3], $month, $input[1][0], $input[3][0]);
if (date("N", $time) == $week)
	print $time."\n";
else
	print "Wrong Format\n";
?>
