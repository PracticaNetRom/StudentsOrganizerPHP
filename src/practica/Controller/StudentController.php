<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controller;


class StudentController {
    public function createAction($request,$app)
    {
        $data = array(
            'name' => 'Your name',
            'email' => 'Your email',
        );
        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name')
            ->add('last_name')
            ->add('email', 'email')
            ->add('birth_day', 'date', array('required'=>false))

            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' =>false
            ))
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
    public function editAction($request,$app)
    {
        return 'In Student Controller';

    }

}