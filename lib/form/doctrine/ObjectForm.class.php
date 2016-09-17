<?php

/**
 * Object form.
 *
 * @package    rentman
 * @subpackage form
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObjectForm extends BaseObjectForm {

    public function configure() {
        unset($this['created_at'], $this['updated_at']);
        unset($this['created_by'], $this['updated_by']);
        unset($this['version']);
		
		$choices = array();
		$ots = Doctrine_Core::getTable("Objecttype")->createQuery("ot")->orderBy("ot.objecttype")->execute();
		foreach ($ots as $ot) {
			$choices[$ot->getId()] = $ot->getObjecttype();
		}
		$this->setWidget("objecttype_id", new sfWidgetFormChoice(
		    array("choices" => $choices)
		));
    }

}
