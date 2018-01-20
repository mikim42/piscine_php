#!/usr/bin/php
<?php
if ($argc < 2)
	return (0);
print trim(preg_replace("/[ \t\r]+/", " ", $argv[1]))."\n";
?>
