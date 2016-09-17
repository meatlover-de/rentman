<?php

/**
 * ObjectVersion form base class.
 *
 * @method ObjectVersion getObject() Returns the current form's model object
 *
 * @package    rentman
 * @subpackage form
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObjectVersionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'street'        => new sfWidgetFormInputText(),
      'postcode'      => new sfWidgetFormInputText(),
      'city'          => new sfWidgetFormInputText(),
      'objecttype_id' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_by'    => new sfWidgetFormInputText(),
      'updated_by'    => new sfWidgetFormInputText(),
      'version'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'street'        => new sfValidatorPass(),
      'postcode'      => new sfValidatorPass(),
      'city'          => new sfValidatorPass(),
      'objecttype_id' => new sfValidatorPass(),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'created_by'    => new sfValidatorInteger(array('required' => false)),
      'updated_by'    => new sfValidatorInteger(array('required' => false)),
      'version'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('version')), 'empty_value' => $this->getObject()->get('version'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('object_version[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ObjectVersion';
  }

}
