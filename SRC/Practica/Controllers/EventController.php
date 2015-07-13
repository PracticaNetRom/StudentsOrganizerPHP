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
            'remarks'=> 'Type Remarks Here!'
        );

        $form = $app['form.factory']->createBuilder('form',$data)
            ->add('start_date','date')
            ->add('end_date','date')
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