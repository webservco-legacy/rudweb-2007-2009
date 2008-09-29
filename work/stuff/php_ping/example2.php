<html>
<head></head>
<body>

<?php
if (!$_POST['submit'])
{
	// form not yet submitted
	// display fields for user input

?>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	Host: <input type="text" name="host"> Times: <input type="text" name="count" size="2">
	<input type="submit" name="submit">
	</form>
<?php
}
else
{
	// include class
	require ("Net/Ping.php");
	
	// create object
	$ping = Net_Ping::factory();
	
	// ping host and get response object
	if(!PEAR::isError($ping)) 
	{
		// set ping parameters based on user input
		$ping->setArgs(array('size' => 32, 'count' => $_POST['count']));

		// start pinging
		$response = $ping->ping($_POST['host']);
	}
?>
	<!-- print host name and IP address -->
	<b><?=$_POST['host']?> (IP address <?=$response->getTargetIp()?>)</b>
	<p>
	<!-- print round trip times min/max/avg -->
	Round-trip time in ms
	<br>
	Minimum: <?=$response->getMin()?>
	<br>
	Maximum: <?=$response->getMax()?>
	<br>
	Average: <?=$response->getAvg()?>
	<p>
	<!-- print packet stats -->
	Packets transmitted: <?=$response->getTransmitted()?>
	<br>
	Packets received: <?=$response->getReceived()?>
	<br>
	Packets lost: <?=$response->getLoss()?>
	<p>
	<!-- print byte stats and TTL -->
	Bytes per request: <?=$response->getBytesPerRequest()?>
	<br>
	Total bytes: <?=$response->getBytesTotal()?>
	<p>
	TTL: <?=$response->getTTL()?> 
	<!-- print raw messages -->
	<p>
	Raw data: <?=join('<br>', $response->getRawData())?>
<?
}
?>
</body>
</html>