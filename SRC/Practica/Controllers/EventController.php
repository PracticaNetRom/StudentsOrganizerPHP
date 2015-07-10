<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 5:56 PM
 */

namespace Practica\Controllers;


class EventController {

    public function createAction($request,$app){
        $data = array(
            'start_date' => 'Select Start Data',
            'end_date' => 'Select End Data',
            'remarks'=> 'Type Remarks Here!'
        );

        $form = $app['form.factory']->createBuilder('form',$data)
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
        return ('In EventController');

    }


}