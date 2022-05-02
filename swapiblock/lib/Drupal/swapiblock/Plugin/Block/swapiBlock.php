<?php

namespace Drupal\swapiblock\Plugin\Block;

use Drupal\block\BlockBase;

/**
 * Provides a 'Star Wars API' block
 * 
 *  @Block(
 *  id= "swapi_block",
 *  admin_label = @Translation("swapibloc block"),
 *  category = @Translation("Custom blocks"),
 * )
 */
class SwapiBlock extends BlockBase {

 /**
  * {@inheritdoc}
  */
 public function build() {
 	return array(
 	 '#type' => 'markup',
 	 'markup' => 'Hello World',
 	);
 }

}