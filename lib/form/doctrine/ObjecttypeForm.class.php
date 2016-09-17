<?php

/**
 * Objecttype form.
 *
 * @package    rentman
 * @subpackage form
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObjecttypeForm extends BaseObjecttypeForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      unset($this['created_by'], $this['updated_by']);
      unset($this['version']);
  }
}
