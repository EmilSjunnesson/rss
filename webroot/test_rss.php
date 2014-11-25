<?php
require '../src/library/CRSS.php';

$feed = new \Emsf14\RSS\CRSS([
	'http://dailycatdrawings.tumblr.com/rss'
]);

echo $feed->printFeed();