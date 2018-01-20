#!/usr/bin/php
<?PHP
function opt($a, $b, $o)
{
	if ($b == 0 && ($o == "/" || $o == "%"))
	{
		print "Can't divide/modulo by 0\n";
		exit(0);
	}
	if ($o == "+")
		return ($a + $b);
	if ($o == "-")
		return ($a - $b);
	if ($o == "/")
		return ($a / $b);
	if ($o == "*")
		return ($a * $b);
	if ($o == "%")
		return ($a % $b);
}

if ($argc != 4)
{
	print "Incorrect Parameters\n";
	return ;
}
$a = trim($argv[1], ' \s\t');
$b = trim($argv[3], ' \s\t');
$o = trim($argv[2], ' \s\t');
$r = opt($a, $b, $o);
print "$r\n";
?>
