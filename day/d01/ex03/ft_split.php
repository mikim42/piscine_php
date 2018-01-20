<?PHP
function ft_split($s)
{
	$arr = preg_split('/\s+/', $s);
	sort($arr);
	print_r($arr);
}
?>
