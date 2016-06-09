<?php

namespace Timer\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TimerController extends AbstractActionController
{

    protected $timerTable;

    public function indexAction()
    {
        return new ViewModel(array(
            'timer' => $this->getTimerTable()->fetchAll(),
        ));
    }

    public function getTimerTable(){
        if (!$this->timerTable) {
            $sm = $this->getServiceLocator();
            $this->timerTable = $sm->get('Timer\Model\TimerTable');
        }
        return $this->timerTable;
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
