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
            'remarks' => 'Remarks',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('start_date','datetime')
            ->add('end_date','datetime')
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