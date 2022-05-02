<?php

namespace Drupal\swapiblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Star Wars API' block
 * 
 * @Block(
 *  id= "swapi_block_block",
 *  admin_label = @Translation("swapiblock block"),
 *  category = @Translation("Custom blocks"),
 * )
 */
$jsonData = json_decode(file_get_contents("https://swapi.dev/api/films/2/"));

class swapiblock extends BlockBase {

 /**
  * {@inheritdoc}
  */
 public function build() {
     $jsondata = json_decode($data);
      echo "<h1> ${json.title}</h1>
         <p><strong>Directed by:</strong> ${json.director}</p> 
         <p><strong>Produced by:</strong> ${json.producer}</p>
         <p><strong>Release Date:</strong> ${json.release_date}</p>";
 }
}
?>
