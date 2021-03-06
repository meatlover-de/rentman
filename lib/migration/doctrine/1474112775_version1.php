<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('objecttype', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'objecttype' => 
             array(
              'type' => 'text',
              'notnull' => '1',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'created_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'updated_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'version' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('objecttype_version', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'primary' => '1',
             ),
             'objecttype' => 
             array(
              'type' => 'text',
              'notnull' => '1',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'created_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'updated_by' => 
             array(
              'type' => 'integer',
              'length' => '8',
             ),
             'version' => 
             array(
              'primary' => '1',
              'type' => 'integer',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
              1 => 'version',
             ),
             ));
        $this->addColumn('object', 'objecttype_id', 'int', '10', array(
             'notnull' => '1',
             ));
        $this->addColumn('object_version', 'objecttype_id', 'int', '10', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->dropTable('objecttype');
        $this->dropTable('objecttype_version');
        $this->removeColumn('object', 'objecttype_id');
        $this->removeColumn('object_version', 'objecttype_id');
    }
}