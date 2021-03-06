<?php

/**
 * Object form base class.
 *
 * @method Object getObject() Returns the current form's model object
 *
 * @package    rentman
 * @subpackage form
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'street'        => new sfWidgetFormInputText(),
      'postcode'      => new sfWidgetFormInputText(),
      'city'          => new sfWidgetFormInputText(),
      'objecttype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Objecttype'), 'add_empty' => false)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_by'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Editor'), 'add_empty' => true)),
      'version'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'street'        => new sfValidatorPass(),
      'postcode'      => new sfValidatorPass(),
      'city'          => new sfValidatorPass(),
      'objecttype_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Objecttype'))),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'created_by'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Editor'), 'required' => false)),
      'version'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Object';
  }

}
