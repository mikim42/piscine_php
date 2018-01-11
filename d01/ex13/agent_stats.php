#!/usr/bin/php
<?php
if ($argc != 2)
	return (0);

$grade = array();

$read = fopen('php://stdin', 'r');
fgets($read);
while ($read && !feof($read))
{
	$tmp = explode(";", fgets($read));
	$grade[] = $tmp;
}

if ($argv[1] === "average")
{
	$total = 0;
	$count = 0;
	foreach ($grade as $i)
	{
		$total += intval($i[1]);
		$count += 1;
	}
	print $total / $count;
	print "\n";
}
else if ($argv[1] === "average_user")
{
	$user = array();
	foreach ($grade as $i)
	{
		if (!empty($i[0]) && $i[2] !== "moulinette")
		{
			$user[$i[0]]['name'] = $i[0];
			$user[$i[0]]['total'] += intval($i[1]);
			$user[$i[0]]['count']++;
		}
	}
	foreach ($user as $i)
	{
		print $i['name'];
		print ":";
		print $i['total'] / $i['count'];
   		print "\n";
	}
}
else if ($argv[1] === "moulinette_variance")
{
	$user = array();
	foreach ($grade as $i)
	{
		if (!empty($i[0]))
		{
			$user[$i[0]]['name'] = $i[0];
			$user[$i[0]]['total'] += intval($i[1]);
			$user[$i[0]]['count']++;
		}
	}
	foreach ($user as $i)
	{
		print $i['name'];
		print ":";
		print $i['total'] / $i['count'];
		print "\n";
	}
}
?>
