#!/usr/bin/php
<?php
if ($argc < 3)
	exit(0);
$key = $argv[1];
for ($i = $argc - 1; $i > 1; --$i)
{
	$tmp = explode(":", $argv[$i]);
	if ($key === $tmp[0])
	{
		print "$tmp[1]\n";
		break ;
	}
}
?>
