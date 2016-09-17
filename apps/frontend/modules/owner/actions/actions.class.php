<?php

/**
 * owner actions.
 *
 * @package    rentman
 * @subpackage owner
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ownerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->owners = Doctrine_Core::getTable('Owner')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->owner = Doctrine_Core::getTable('Owner')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->owner);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OwnerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new OwnerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($owner = Doctrine_Core::getTable('Owner')->find(array($request->getParameter('id'))), sprintf('Object owner does not exist (%s).', $request->getParameter('id')));
    $this->form = new OwnerForm($owner);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($owner = Doctrine_Core::getTable('Owner')->find(array($request->getParameter('id'))), sprintf('Object owner does not exist (%s).', $request->getParameter('id')));
    $this->form = new OwnerForm($owner);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($owner = Doctrine_Core::getTable('Owner')->find(array($request->getParameter('id'))), sprintf('Object owner does not exist (%s).', $request->getParameter('id')));
    $owner->delete();

    $this->redirect('owner/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $owner = $form->save();

      $this->redirect('owner/edit?id='.$owner->getId());
    }
  }
}
