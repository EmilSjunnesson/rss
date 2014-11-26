RSS wrapper
==========
This is a Simple Pie wrapper that makes it easy to display RSS feeds. You can even merge 
multiple feeds into one.
Installation
-------------
Using Composer and Packagist, it's easy to get started. Simply add the following to 
your composer.json file:
```
"require": {
    "emsf14/rss": "dev-master"
},
```
After using Compser to install the package, you can find it in your vendor directory, read for use.
In the webroot subfolder you'll find a simple working example. Important! The cache-folder needs 
to be writeable.

All you need to do to display a feed is to instantiate the CRSS class with an array of one 
or more RSS feed URls. Then call the metod "printFeed", it returns a string containing the feed.
```
$feed = new \Emsf14\library\CRSS([
	'http://feeds.bbci.co.uk/news/rss.xml'
]);

echo $feed->printFeed();
```

