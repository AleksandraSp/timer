<?php
return array(
  'controllers' => array(
    'invokables' => array(
      'Timer\Controller\Timer'  => 'Timer\Controller\TimerController',
      'Timer\Controller\New'    => 'Timer\Controller\TimerCreator',
    ),
  ),

  'view_manager' => array(
    'template_path_stack' => array(
      'timer' => __DIR__ . '/../view',
    ),
  ),

  'router' => array(
    'routes' => array(
      'timer' => array(
        'type'=> 'Segment',
        'options' => array(
          'route' => '/timer[/:action][/:id]',
          'constraints' => array(
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),

          'defaults' => array(
            '__NAMESPACE__' => 'Timer\Controller',
            'controller' => 'Timer\Controller\Timer',
            'action' => 'index',
          ),
        ),
      ),
      'new' => array(
        'type'=> 'Segment',
        'options' => array(
          'route' => '/new',
          'defaults' => array(
              'controller' => 'Timer\Controller\New',
              'action'     => 'index',
          ),
        ),
      ),
    ),
  ),
);
