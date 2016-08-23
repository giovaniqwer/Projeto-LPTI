<?php

	function db_connect()
	{
		$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8' , DB_USER, DB_PASS);
		return $PDO;
	}
	function dateConvert($date)

{
	if(!strstr($date, '/'))
{
	sscanf($date, '%d-%d-%d' , $y, $m, $d);
	return sprintf ('%02d/%02d/%04d', $d, $m, $y);
}
else
{
	sscanf($date, '%d/%d/%d', $d, $m, $y);
	return sprintf('%04d-%02d-%02d' , $y, $m, $d);
	
}

return false;
}
?>
