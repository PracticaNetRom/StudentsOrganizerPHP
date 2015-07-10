<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 18:25
 */

namespace Practica\Controllers;


class StudentController {

    public function createAction($request,$app){
        $data = array(
            'first_name' => 'Your First Name',
            'last_name' => 'Your Last Name',
            'email' => 'Your email',
            'first_name' => 'Your First Name',
        );
        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name')
            ->add('last_name')
            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' => false
            ))
            ->add('birth_date','date',array('required' => false))
            ->add('email','email')
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            // do something with the data
            // redirect somewhere
            //return $app->redirect('...');
        }

        var_dump($data);
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }
    public function editAction($request,$app){
        return ('In StudentController');
    }




}