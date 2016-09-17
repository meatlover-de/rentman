<?php

/**
 * search actions.
 *
 * @package    rentman
 * @subpackage search
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class searchActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $search = $request->getParameter("search");
      
      $this->objects = Doctrine_Core::getTable("Object")->createQuery("o")
          ->where("o.street like '%" . $search . "%'")
              ->orWhere("o.city like '%" . $search . "%'")
              ->execute();
  }
}
