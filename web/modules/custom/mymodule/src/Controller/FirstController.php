<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * First controller extends controller base.
 */
class FirstController extends ControllerBase {

  /**
   * Content return array of value.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => t('This is my menu custom linked page'),
    ];
  }

}
