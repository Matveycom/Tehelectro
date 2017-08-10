<?php

/**
 * @file
 * Provide views data that isn't tied to any other module.
 */

function common_views_data_alter(&$data) {
  $b = '';

  $data['taxonomy_term_field_data']['term_node_link'] = [
    'title' => t('Custom link'),
    'help' => t('Relate nodes to taxonomy terms, specifying which vocabulary or vocabularies to use. This relationship will cause duplicated records if there are multiple terms.'),
    'field' => [
      'real field' => 'tid',
      'title' => t('Custom link 111'),
      'help' => t('Display all taxonomy terms associated with a node from specified vocabularies.'),
      'id' => 'taxonomy_tid_link',
      'no group by' => TRUE,
      'click sortable' => FALSE,
    ],
  ];
}