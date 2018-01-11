#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$arr = array_filter(explode(' ', $argv[1]));
	$s = "";
	foreach ($arr as $elem)
		$s .= $elem." ";
	print($s);
	print("\n");
}
?>
