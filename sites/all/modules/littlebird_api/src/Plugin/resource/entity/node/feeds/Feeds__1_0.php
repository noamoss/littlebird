<?php
/**
 * @file
 * Contains \Drupal\littlebird_api\Plugin\resource\entity\node\feeds\Feeds__1_0
*/

namespace Drupal\littlebird_api\Plugin\resource\entity\node\feeds;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
* Class feeds__1_0
* @package Druapal\littlebird_api\Plugin\resource\entity\node\feeds {
* @Resource(
*   name = "feeds:1.0",
*   resource = "feeds",
*   label = "Feeds",
*   description = "Export the feeds with all authentication providers.",
*   authenticationTypes = TRUE,
*   authenticationOptional = TRUE,
*   dataProvider = {
*     "entityType": "node",
*     "bundles": {
*       "feed",
*     },
*   },
*   majorVersion = 1,
*   minorVersion = 0
* )
*/

class Feeds__1_0 extends ResourceNode {
  /**
  * {@inheritdoc}
  */

  protected function publicFields() {
    $public_fields = parent::publicFields();

    // Rename label to name.
    $public_fields['id']['methods'] = array();
    $public_fields['name'] = $public_fields['label'];
    // update date.
    $public_fields['last update'] = array(
      'property' => 'changed',
    );

    return $public_fields;

}
}
