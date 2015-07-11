<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/10/2015
 * Time: 12:25 AM
 */

namespace Practica\Controller;


class StudentController {

    public function createAction( $request ,  $app )
    {
        $data = array(
            'first_name' => 'Your name',
            'last_name' => 'Your email',
        );
        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name')
            ->add('last_name')
            ->add('gender', 'choice', array(
                    'choices' => array(1 => 'male', 2 => 'female'),
                    'expanded' => true,
                    'required'  => false,

                )
            )
            ->add('birth_date', 'date', array(
                    'required' => false
                )
            )
            ->add('email', 'email')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            // do something with the data

            // redirect somewhere

        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }



    public function editAction( $request ,  $app )
    {
        return 'In StudentController';
    }

