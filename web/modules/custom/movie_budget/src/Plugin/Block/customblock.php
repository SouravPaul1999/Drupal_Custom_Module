<?php

namespace Drupal\movie_budget\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "my_custom_block",
 *   admin_label = @Translation("Custom block"),
 *   category = @Translation("programmatically created block"),
 * )
 */

class customblock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'my_custom_block',
      '#data' => ['age' => '31', 'DOB' => '2 May 2000'],
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
