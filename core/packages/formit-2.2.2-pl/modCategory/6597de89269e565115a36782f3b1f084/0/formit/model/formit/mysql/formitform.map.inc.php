<?php
/**
 * @package formit
 */
$xpdo_meta_map['FormItForm']= array (
  'package' => 'formit',
  'version' => NULL,
  'table' => 'formit_forms',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'form' => '',
    'context_key' => '',
    'values' => '',
    'ip' => '',
    'date' => 0,
  ),
  'fieldMeta' => 
  array (
    'form' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'context_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'values' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'json',
      'null' => false,
      'default' => '',
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '15',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'date' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
