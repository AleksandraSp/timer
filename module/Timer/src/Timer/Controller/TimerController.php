<?php

namespace Timer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TimerController extends AbstractActionController
{
  public function indexAction()
  {
    return new ViewModel(array(
      'timer' => 'aleksandra',
    ));
  }
  public function addAction()
  {
  }
  public function editAction()
  {
  }
  public function deleteAction()
  {
  }
}
