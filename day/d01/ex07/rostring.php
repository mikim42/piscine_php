#!/usr/bin/php
<?PHP
$arr = preg_split('/\s+/', $argv[1]);
$len = count($arr);
$i = 0;
while (++$i < $len)
	print "$arr[$i] ";
print "$arr[0]\n";
?>
