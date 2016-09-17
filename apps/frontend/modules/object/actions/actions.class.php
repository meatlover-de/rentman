<?php

/**
 * object actions.
 *
 * @package    rentman
 * @subpackage object
 * @author     Udo Müller <info@cs-ol.de>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objectActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->objects = Doctrine_Core::getTable('Object')
                ->createQuery('a')
                ->execute();
    }

    public function executeList(sfWebRequest $request) {
        $this->objects = Doctrine_Core::getTable("Object")->findAll();

        if ($request->isXmlHttpRequest()) {
            return $this->renderPartial("list", array("objects" => $this->objects));
        }
    }

    public function executeShow(sfWebRequest $request) {
        $this->object = Doctrine_Core::getTable('Object')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->object);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new ObjectForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ObjectForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($object = Doctrine_Core::getTable('Object')->find(array($request->getParameter('id'))), sprintf('Object object does not exist (%s).', $request->getParameter('id')));
        $this->form = new ObjectForm($object);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($object = Doctrine_Core::getTable('Object')->find(array($request->getParameter('id'))), sprintf('Object object does not exist (%s).', $request->getParameter('id')));
        $this->form = new ObjectForm($object);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($object = Doctrine_Core::getTable('Object')->find(array($request->getParameter('id'))), sprintf('Object object does not exist (%s).', $request->getParameter('id')));
        $object->delete();

        $this->redirect('object/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $object = $form->save();

            $this->redirect('object/list');
        }
    }

}
