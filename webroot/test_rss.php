<?php
require '../src/library/CRSS.php';

$feed = new \Emsf14\RSS\CRSS([
	'http://dailycatdrawings.tumblr.com/rss'
]);
?>

<!doctype html>
<meta charset=utf8>
<title>RSS Example</title>
<h1>RSS Example</h1>
<?=$feed->printFeed()?>