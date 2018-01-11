#!/usr/bin/php
<?PHP
function ssap2($s1, $s2)
{
	$a = str_split(strtolower(($s1)));
	$b = str_split(strtolower(($s2)));
	$i = -1;
	while ($a[++$i] && $b[$i])
	{
		if (ctype_alpha($a[$i]))
		{
			if (ctype_alpha($b[$i]) && $a[$i] != $b[$i])
				return ($a[$i] > $b[$i]);
			else if (!ctype_alpha($b[$i]))
				return 0;
		}
		else if (is_numeric($a[$i]))
		{
			if (ctype_alpha($b[$i]))
				return 1;
			if (is_numeric($b[$i]) && $a[$i] != $b[$i])
				return ($a[$i] > $b[$i]);
			else if (!is_numeric($b[$i]))
				return 0;
		}
		else
		{
			if (ctype_alpha($b[$i]) || is_numeric($b[$i]))
				return 1;
			if ($a[$i] > $b[$i])
				return 1;
		}
	}
	if ($a[$i] && !$b[$i])
		return 1;
	return 0;
}

$i = 0;
$arr = array();

while ($argv[++$i])
{
	$s = ltrim($argv[$i]);
	$s = rtrim($s);
	$tmp = preg_split('/\s+/', $s);
	$arr = array_merge($arr, $tmp);
}
usort($arr, 'ssap2');
$x = -1;
while ($arr[++$x])
	print "$arr[$x]\n";
?>
