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

    // Re name label to name.
    $public_fields['item title'] = $public_fields['label'];
    unset($public_fields['label']);

    $public_fields['id']['methods'] = array();

    $public_fields['related_feed'] = array(
      'property' => 'field_item_feed',
      'resource' => array(
        'name' => 'feeds',
        'majorVersion' => 1,
        'minorVersion' => 0,
    )
  );

    $public_fields['description'] = array (
      'property' => 'field_feed_item_description',
      'sub_property' => 'value',
      'process_callbacks' => array (
        'strip_tags',
      ),
    );

    return $public_fields;
}

  public function field_item($item) {
    $node = $item[0];
    return [
      'id' => $node->nid,
      'title' => $node->title,
      'updated' => $node->changed,
    ];
  }
}
