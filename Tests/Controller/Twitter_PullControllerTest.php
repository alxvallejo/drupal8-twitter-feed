<?php

/**
 * @file
 * Contains Drupal\twitter_pull\Tests\Twitter_PullController.
 */

namespace Drupal\twitter_pull\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the twitter_pull module.
 */
class Twitter_PullControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "twitter_pull Twitter_PullController's controller functionality",
      'description' => 'Test Unit for module twitter_pull and controller Twitter_PullController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests twitter_pull functionality.
   */
  public function testTwitter_PullController() {
    // Check that the basic functions of module twitter_pull.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
