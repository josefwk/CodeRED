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
define('TWITTER_CONSUMER_KEY','SefGmDaGFJ8RiWXFj71eRzHmq');
define('TWITTER_CONSUMER_SECRET','ySfY4bQSyP6eMa5Z2cEQbFOgETyyymvU0TpRG3a2ofYoihuQZs');
define('OAUTH_TOKEN','69182610-ABw6ShmM5vFVPzU1gYGa2GioCwU7owsVqGD3Uq9kg');
define('OAUTH_SECRET','bwFdGixGFmaglhsC7VKwfOgCLXWtMR67azUz8dCuei0kw');

// Settings for monitor_tweets.php
define('TWEET_ERROR_INTERVAL',10);
// Fill in the email address for error messages
define('TWEET_ERROR_ADDRESS','mikeschappel@gmail.com');
?>