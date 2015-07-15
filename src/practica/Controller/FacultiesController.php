<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/13/2015
 * Time: 1:45 AM
 */

namespace Practica\Controller;


class FacultiesController {
    public function createAction( $request ,  $app )
    {
        $data = array(
            'student' => 'Your Student',

        );
        $form = $app['form.factory']->createBuilder('form', $data)

            ->add('name', 'date', array(
                    'required' => false
                )
            )

            ->add('faculty_start_year', 'date', array(
                    'required' => false
                )
            )

            ->add('name')
            ->add('faculty_start_year')
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
}