#!/usr/bin/php
<?PHP
while (1)
{
	print "Enter a number: ";
	$s = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		print "^D\n";
		break ;
	}
	if (is_numeric($s))
	{
		if (($i = intval($s)) % 2 == 1 || $i % 2 == -1)
			print "The number $i is odd\n";
		else
			print "The number $i is even\n";
	}
	else
		print "'$s' is not a number\n";
}
?>
