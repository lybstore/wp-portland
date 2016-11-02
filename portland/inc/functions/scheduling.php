<?php

require_once ABSPATH."../vendor/autoload.php";


function update_twittercache(){

  $consumer_key = "aumg8vl0dZtPSLBOJXUpokWjK"; //get_field('twitter_consumer_key', 'option');
  $consumer_secret = "pbuDhgyFCU7CKDQtLl50OniuNRoPwsaP5FCetVowKWfZxWce0o";
  //get_field('twitter_consumer_secret', 'option');

  $client = new Freebird\Services\freebird\Client();
  $client->init_bearer_token($consumer_key, $consumer_secret);
  $response = $client->api_request('statuses/user_timeline.json', array('screen_name' => 'PortlandDesign', 'count' => 1));

  if(!file_exists(get_stylesheet_directory() .'/inc/twittercache/results.json')){
    touch(get_stylesheet_directory() .'/inc/twittercache/results.json');
  }
  file_put_contents(get_stylesheet_directory() .'/inc/twittercache/results.json', json_encode($response));
}

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
