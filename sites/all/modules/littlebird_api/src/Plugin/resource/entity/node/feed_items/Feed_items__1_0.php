<?php
/**
 * @file
 * Contains \Drupal\littlebird_api\Plugin\resource\entity\node\feeds\Feed_items__1_0
*/

namespace Drupal\littlebird_api\Plugin\resource\entity\node\feed_items;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
* Class feed_items__1_0
* @package Druapal\littlebird_api\Plugin\resource\entity\node\feed_items {
* @Resource(
*   name = "feed_items:1.0",
*   resource = "feed_items",
*   label = "Items",
*   description = "Export the feed items with all authentication providers.",
*   authenticationTypes = TRUE,
*   authenticationOptional = TRUE,
*   dataProvider = {
*     "entityType": "node",
*     "bundles": {
*       "feed_item",
*     },
*   },
*   majorVersion = 1,
*   minorVersion = 0
* )
*/


class Feed_Items__1_0 extends ResourceNode {
  /**
  * {@inheritdoc}
  */

  protected function publicFields() {
    $public_fields = parent::publicFields();

    // Rename label to nane.
    $public_fields['name'] = $public_fields['label'];
    unset($public_fields['label']);
    return $public_fields;
print("dfdd");
}
}
