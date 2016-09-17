<?php

/**
 * objecttype actions.
 *
 * @package    rentman
 * @subpackage objecttype
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objecttypeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->objecttypes = Doctrine_Core::getTable('Objecttype')
      ->createQuery('a')
		  ->orderBy("a.objecttype")
      ->execute();
  }

  public function executeList(sfWebRequest $request) {

      if ($request->isXmlHttpRequest()) {
          return $this->renderPartial("list", array("objecttypes" => $this->objecttypes));
      }
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->objecttype = Doctrine_Core::getTable('Objecttype')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->objecttype);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ObjecttypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ObjecttypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($objecttype = Doctrine_Core::getTable('Objecttype')->find(array($request->getParameter('id'))), sprintf('Object objecttype does not exist (%s).', $request->getParameter('id')));
    $this->form = new ObjecttypeForm($objecttype);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($objecttype = Doctrine_Core::getTable('Objecttype')->find(array($request->getParameter('id'))), sprintf('Object objecttype does not exist (%s).', $request->getParameter('id')));
    $this->form = new ObjecttypeForm($objecttype);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($objecttype = Doctrine_Core::getTable('Objecttype')->find(array($request->getParameter('id'))), sprintf('Object objecttype does not exist (%s).', $request->getParameter('id')));
    $objecttype->delete();

    $this->redirect('objecttype/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $objecttype = $form->save();

      $this->redirect('objecttype/list');
    }
  }
}
