<?php

/**  
 * @file  
 * Contains Drupal\welcome\Form\MessagesForm.  
 */

namespace Drupal\movie_budget\controller;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class MessagesForm extends ConfigFormBase
{

  /**  
   * {@inheritdoc}  
   */
  protected function getEditableConfigNames()
  {
    return [
      'movie_budget.adminsettings',
    ];
  }

  /**  
   * {@inheritdoc}  
   */
  public function getFormId()
  {
    return 'movie_budget';
  }

  /**  
   * {@inheritdoc}  
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('movie_budget.adminsettings');

    $form['movie_budget'] = [
      '#type' => 'number',
      '#title' => $this->t('Movie Budget'),
      '#description' => $this->t('set expected movie budget'),
      '#default_value' => $config->get('movie_budget') ?? 201,
      // '#default_value' => $config->get('movie_budget')['value'] ?? 201,
      '#required' => TRUE,
    ];


    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    if ( (($form_state->getValue('movie_budget')) <= 0) || empty($form_state->getValue('movie_budget')) ) {
      $form_state->setErrorByName('movie_budget', $this->t('Set the expected movie budget greater than Zero, movie budget shouldnot be blank. '));
    }
  }

  /**  
   * {@inheritdoc}  
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    parent::submitForm($form, $form_state);

    $this->config('movie_budget.adminsettings')
      ->set('movie_budget', $form_state->getValue('movie_budget'))
      ->save();

      //Invalidate cache
      \Drupal\Core\Cache\Cache::invalidateTags(array('MY_CUSTOM_UNIQUE_TAG'));

  }
}
