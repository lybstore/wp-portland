<?php
use Abraham\TwitterOAuth\TwitterOAuth;

function update_twittercache(){

  $consumer_key = "aumg8vl0dZtPSLBOJXUpokWjK"; //get_field('twitter_consumer_key', 'option');
  $consumer_secret = "pbuDhgyFCU7CKDQtLl50OniuNRoPwsaP5FCetVowKWfZxWce0o";
  //get_field('twitter_consumer_secret', 'option');
  $access_token = "202116639-njzwgoET5fxeRzWbxHUbT05DTg0TlEqViUrPEf6G";
  //get_field('twitter_access_token', 'option');
  $access_token_secret = "q3CWvB6H4Rqyb9aQASF28QJxwreIiu6YJqz5eErY8exTj"; //get_field('twitter_access_token_secret', 'option');

  $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
  $response = $connection->get("account/verify_credentials");
  $response = $connection->get("statuses/user_timeline", array("count" => 25, "exclude_replies" => true, "screen_name" => "PortlandDesign"));
  var_dump($response);
  if(!file_exists(get_stylesheet_directory() .'/inc/twittercache/results.json')){
    touch(get_stylesheet_directory() .'/inc/twittercache/results.json');
  }
  file_put_contents(get_stylesheet_directory() .'/inc/twittercache/results.json', json_encode($response));
}

// update_twittercache();

function add_every_ten_mins( $schedules ) {
  // add a 'weekly' schedule to the existing set
  $schedules['ten_mins'] = array(
    'interval' => 600,
    'display' => __('Once Every Ten Minutes')
  );
  return $schedules;
}
add_filter( 'cron_schedules', 'add_every_ten_mins' );

add_action( 'wp', 'prefix_setup_schedule' );

/**
 * On an early action hook, check if the hook is scheduled - if not, schedule it.
 */
function prefix_setup_schedule() {
  if ( ! wp_next_scheduled( 'update_twittercache' ) ) {
    wp_schedule_event( time(), 'ten_mins', 'update_twittercache');
  }
}
