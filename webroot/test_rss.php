<?php
require '../src/library/CRSS.php';

$feed = new CRSS([
	'http://dailycatdrawings.tumblr.com/rss'
]);

echo $feed->printFeed();