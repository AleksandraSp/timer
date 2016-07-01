<?php
namespace Timer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TimerCreator extends AbstractActionController {
  public function indexAction()
  {
      return new ViewModel(array(
          'aaa' => 1
      ));
    //TODO:
    echo 'Form with input fields';
  }
}
