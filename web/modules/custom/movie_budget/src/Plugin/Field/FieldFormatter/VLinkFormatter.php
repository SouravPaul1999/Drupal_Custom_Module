<?php

namespace Drupal\movie_budget\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'v_link_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "movie_budget_v_link_formatter",
 *   label = @Translation("video link formatter"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class VLinkFormatter extends FormatterBase {

  // /**
  //  * {@inheritdoc}
  //  */
  // public static function defaultSettings() {
  //   return [
  //     'foo' => 'bar',
  //   ] + parent::defaultSettings();
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function settingsForm(array $form, FormStateInterface $form_state) {

  //   $elements['foo'] = [
  //     '#type' => 'textfield',
  //     '#title' => $this->t('Foo'),
  //     '#default_value' => $this->getSetting('foo'),
  //   ];

  //   return $elements;
  // }

  // /**
  //  * {@inheritdoc}
  //  */
  // public function settingsSummary() {
  //   $summary[] = $this->t('Foo: @foo', ['@foo' => $this->getSetting('foo')]);
  //   return $summary;
  // }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $url =$item->getUrl();
      $elements[$delta] = array(
          '#theme' => 'v_link_formatter',
          '#url' => $url,
      );
  }

    return $element;
  }

}
