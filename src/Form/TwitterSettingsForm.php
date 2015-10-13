<?php

/**
 * @file
 * Contains Drupal\twitter_pull\Form\TwitterSettingsForm.
 */

namespace Drupal\twitter_pull\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class TwitterSettingsForm.
 *
 * @package Drupal\twitter_pull\Form
 */
class TwitterSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'twitter_pull.twittersettings_config'
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'twitter_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('twitter_pull.twittersettings_config');
    $form['oauth_access_token'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Oauth Access Token'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('oauth_access_token'),
    );
    $form['oauth_access_token_secret'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Oauth Access Token Secret'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('oauth_access_token_secret'),
    );
    $form['consumer_key'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Consumer Key'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('consumer_key'),
    );
    $form['consumer_secret'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Consumer Secret'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('consumer_secret'),
    );
    $form['screen_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Screen Name'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('screen_name'),
    );
    $form['tweet_count'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Tweet Count'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('tweet_count'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('twitter_pull.twittersettings_config')
      ->set('oauth_access_token', $form_state->getValue('oauth_access_token'))
      ->set('oauth_access_token_secret', $form_state->getValue('oauth_access_token_secret'))
      ->set('consumer_key', $form_state->getValue('consumer_key'))
      ->set('consumer_secret', $form_state->getValue('consumer_secret'))
      ->set('screen_name', $form_state->getValue('screen_name'))
      ->set('tweet_count', $form_state->getValue('tweet_count'))
      ->save();
  }

}
