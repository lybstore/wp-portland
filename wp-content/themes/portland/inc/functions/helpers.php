<?php

/*********************
  WOODCHIPPR: Helper Functions

  BREAK IT DOWN:
  - Get content without gallery shortcodes
 *********************/

function  strip_shortcode_gallery( $content ) {
    preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );
    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if ($pos !== false)
                    return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
            }
        }
    }
    return $content;
}

function render_tweet(array $tweet) {
    $text = $tweet['text'];

    // hastags
    $linkified = array();
    foreach ($tweet['entities']['hashtags'] as $hashtag) {
        $hash = $hashtag['text'];

        if (in_array($hash, $linkified)) {
            continue; // do not process same hash twice or more
        }
        $linkified[] = $hash;

        // replace single words only, so looking for #Google we wont linkify >#Google<Reader
        $text = preg_replace('/#\b' . $hash . '\b/', sprintf('<a href="https://twitter.com/search?q=%%23%2$s&src=hash">#%1$s</a>', $hash, urlencode($hash)), $text);
    }

    // user_mentions
    $linkified = array();
    foreach ($tweet['entities']['user_mentions'] as $userMention) {
        $name = $userMention['name'];
        $screenName = $userMention['screen_name'];

        if (in_array($screenName, $linkified)) {
            continue; // do not process same user mention twice or more
        }
        $linkified[] = $screenName;

        // replace single words only, so looking for @John we wont linkify >@John<Snow
        $text = preg_replace('/@\b' . $screenName . '\b/', sprintf('<a href="https://www.twitter.com/%1$s" title="%2$s">@%1$s</a>', $screenName, $name), $text);
    }

    // urls
    $linkified = array();
    foreach ($tweet['entities']['urls'] as $url) {
        $url = $url['url'];

        if (in_array($url, $linkified)) {
            continue; // do not process same url twice or more
        }
        $linkified[] = $url;

        $text = str_replace($url, sprintf('<a href="%1$s">%1$s</a>', $url), $text);
    }

    return $text;
}
?>
