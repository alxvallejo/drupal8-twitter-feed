# Drupal 8 Twitter Feed

Installs a block that displays the most recent Tweets from a username. This module requires `abraham/twitteroauth` PHP library.

# Installation

* Clone this repository into your site's `/modules` directory.

* Install the `abraham/twitteroauth` composer package in your Drupal 8 site with the following command:

```sh
$ composer require abraham/twitteroauth
```

* Create an application in your [twitter developer console](https://apps.twitter.com/). Create a new app. If you want to use this for local testing, use 'http://127.0.0.1' for the URL.

* Then generate the Access Token and copy and paste the information into the Configuration page at /admin/config/twitter_pull/twittersettings in your Drupal site.

* Enable the Twitter Pull module and navigate to /admin/structure/block. Select **Place block** in a region and search for Tweets block.
