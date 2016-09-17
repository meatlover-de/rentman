<?php

/**
 * infrastructure actions.
 *
 * @package    rentman
 * @subpackage infrastructure
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class infrastructureActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->infrastructures = Doctrine_Core::getTable('Infrastructure')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->infrastructure = Doctrine_Core::getTable('Infrastructure')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->infrastructure);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InfrastructureForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new InfrastructureForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($infrastructure = Doctrine_Core::getTable('Infrastructure')->find(array($request->getParameter('id'))), sprintf('Object infrastructure does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfrastructureForm($infrastructure);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($infrastructure = Doctrine_Core::getTable('Infrastructure')->find(array($request->getParameter('id'))), sprintf('Object infrastructure does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfrastructureForm($infrastructure);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($infrastructure = Doctrine_Core::getTable('Infrastructure')->find(array($request->getParameter('id'))), sprintf('Object infrastructure does not exist (%s).', $request->getParameter('id')));
    $infrastructure->delete();

    $this->redirect('infrastructure/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $infrastructure = $form->save();

      $this->redirect('infrastructure/edit?id='.$infrastructure->getId());
    }
  }
}
