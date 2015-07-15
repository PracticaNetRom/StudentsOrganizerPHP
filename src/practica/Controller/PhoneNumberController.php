<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/13/2015
 * Time: 12:06 AM
 */

namespace Practica\Controller;


class PhoneNumberController {
    public function createAction( $request ,  $app )
    {
        $data = array(
            'students' => 'Your Students'
        );
        $form = $app['form.factory']->createBuilder('form', $data)


            ->add('number', 'datetype', array(
                    'required' => false
                )
            )

            ->add('number')
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