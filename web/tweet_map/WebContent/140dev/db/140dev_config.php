<?php
/**
* 140dev_config.php
* Constants for the entire 140dev Twitter framework
* You MUST modify these to match your server setup when installing the framework
* 
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.30
*/

// OAuth settings for connecting to the Twitter streaming API
// Fill in the values for a valid Twitter app
define('TWITTER_CONSUMER_KEY','UwLA9LUOD3fXIvbRH5fQixfqE');
define('TWITTER_CONSUMER_SECRET','3VWIyplDeCVjSiIbiPty8PtnCyOuavzAG0nWMu8urppkHhbuin');
define('OAUTH_TOKEN','69182610-5KQxymFYNDYQKI8aPNLxKypFIs3Rt4nVvYt4kiLro');
define('OAUTH_SECRET','cX9LJnioQuWmSMFiehlPMw56BTQs5SqQ6qip40jehLoDX');

// Settings for monitor_tweets.php
define('TWEET_ERROR_INTERVAL',10);
// Fill in the email address for error messages
define('TWEET_ERROR_ADDRESS','mikeschappel@gmail.com');
?>