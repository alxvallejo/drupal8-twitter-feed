<?php

/**
 * @file
 * Contains Drupal\twitter_pull\Controller\Twitter_PullController.
 */

namespace Drupal\twitter_pull\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Twitter_PullController.
 *
 * @package Drupal\twitter_pull\Controller
 */
class Twitter_PullController extends ControllerBase {
  /**
   * Content.
   *
   * @return string
   *   Return Hello string.
   */
  public function content() {
    return array('#markup' => 'hello world');
  }

}
