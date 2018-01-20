#!/usr/bin/php
<?PHP
function opt($a, $b, $op)
{
	if ($op == "+")
		return ($a + $b);
	else if ($op == "-")
		return ($a - $b);
	else if ($op == "/" && $b != 0)
		return ($a / $b);
	else if ($op == "*")
		return ($a * $b);
	else if ($op == "%" && $b != 0)
		return ($a % $b);
	print "Syntax Error\n";
	exit(2);
}

function split_op($s)
{
}

if ($argc != 2)
{
	print "Incorrect Parameters\n";
	return ;
}
$s = str_replace(' ', '', $argv[1]);
$s = str_replace('\t', '', $s);

$a = intval($s);
$op = substr($s, strlen((string)$a), 1);
$b = substr($s, strlen((string)$a) + 1);

if (!is_numeric($a) || !is_numeric($b))
{
	print "Syntax Error\n";
	exit(2);
}
$r = opt($a, $b, $op);
print "$r\n";
?>
