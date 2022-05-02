<?php

namespace Drupal\swapiblock\Controller;

class swapiblockController {
	public function hello(){
		return array(
			'#title' => 'Hello World',
			'#markup' => 'This is some content'
		);
	}
}