<?php

/**
 * @file
 * Contains Drupal\twitter_pull\Plugin\Block\TweetsBlock.
 */

namespace Drupal\twitter_pull\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Abraham\TwitterOAuth\TwitterOAuth;

/**
 * Provides a 'TweetsBlock' block.
 *
 * @Block(
 *  id = "tweets_block",
 *  admin_label = @Translation("Tweets block"),
 * )
 */
class TweetsBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('twitter_pull.twittersettings_config');
    $settings = array();
    $settings['oauth_access_token'] = $config->get('oauth_access_token');
    $settings['oauth_access_token_secret'] = $config->get('oauth_access_token_secret');
    $settings['consumer_key'] = $config->get('consumer_key');
    $settings['consumer_secret'] = $config->get('consumer_secret');

    $screen_name = $config->get('screen_name');
    $tweet_count = $config->get('tweet_count');

    $twitter = new TwitterOAuth($settings['consumer_key'], $settings['consumer_secret'], $settings['oauth_access_token'], $settings['oauth_access_token_secret']);

    $tweets = $twitter
      ->get("statuses/user_timeline", array("screen_name" => $screen_name, "count" => $tweet_count));

    foreach ($tweets as $tweet) {
      $tweet->text = check_markup($tweet->text, 'full_html');
      $cleanTweets[] = $tweet;
    }

    $params = array('tweets' => $cleanTweets);
    $tweet_template = array('#theme' => 'twitter_pull_tweet_listing', '#params' => $params);
    return $tweet_template;
  }

}
