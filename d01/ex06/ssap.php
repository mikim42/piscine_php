#!/usr/bin/php
<?PHP
$i = 0;
$arr = array();
while ($argv[++$i])
{
	$s = ltrim($argv[$i]);
	$s = rtrim($s);
	$tmp = preg_split('/\s+/', $s);
	$arr = array_merge($arr, $tmp);
}
sort($arr);
$x = -1;
while ($arr[++$x])
	print "$arr[$x]\n";
?>
