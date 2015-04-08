<?php

require_once('TwitterAPIExchange.php');

// Twitter OAuth settings
$settings = array(
    'oauth_access_token' => "342570779-K37bVILPfYQiPisQsEfPw2fRc7VTC5GtA1eK9bJx",
    'oauth_access_token_secret' => "LAfX0JSfkmaVQukKcxAnoXIlzcXFKOawuXYOfJR5lENNh",
    'consumer_key' => "xVyM8V7lQVluF9VjaTr4bKnKl",
    'consumer_secret' => "y5G3CFHklmvlMs08xNIR3ISEBs2EG2UpyOROWil0nRb43tiX6g"
	);

// Create a object from our TwitterAPIExchange.php class
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=' . htmlspecialchars($_POST["foo"]);
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

header('Content-type: application/json');
echo $response;

?>