<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('object', 'object_objecttype_id_objecttype_id', array(
             'name' => 'object_objecttype_id_objecttype_id',
             'local' => 'objecttype_id',
             'foreign' => 'id',
             'foreignTable' => 'objecttype',
             ));
        $this->createForeignKey('objecttype', 'objecttype_updated_by_sf_guard_user_id', array(
             'name' => 'objecttype_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('objecttype', 'objecttype_created_by_sf_guard_user_id', array(
             'name' => 'objecttype_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('objecttype_version', 'objecttype_version_id_objecttype_id', array(
             'name' => 'objecttype_version_id_objecttype_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'objecttype',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('object', 'object_objecttype_id', array(
             'fields' => 
             array(
              0 => 'objecttype_id',
             ),
             ));
        $this->addIndex('objecttype', 'objecttype_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('objecttype', 'objecttype_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('objecttype_version', 'objecttype_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('object', 'object_objecttype_id_objecttype_id');
        $this->dropForeignKey('objecttype', 'objecttype_updated_by_sf_guard_user_id');
        $this->dropForeignKey('objecttype', 'objecttype_created_by_sf_guard_user_id');
        $this->dropForeignKey('objecttype_version', 'objecttype_version_id_objecttype_id');
        $this->removeIndex('object', 'object_objecttype_id', array(
             'fields' => 
             array(
              0 => 'objecttype_id',
             ),
             ));
        $this->removeIndex('objecttype', 'objecttype_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('objecttype', 'objecttype_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('objecttype_version', 'objecttype_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }
}