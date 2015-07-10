<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 18:43
 */

namespace Practica\Controllers;


class EventController {

    public function createAction($request,$app){
        $data = array(
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'remarks' => 'Remarks',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('start_date')
            ->add('end_date')
            ->add('remarks','text')
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            // do something with the data
            // redirect somewhere
            //return $app->redirect('...');
        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }
    public function editAction($request,$app){
        return ('In StudentController');
    }
}