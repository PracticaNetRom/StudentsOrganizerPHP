<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/9/2015
 * Time: 10:58 AM
 */

namespace Practica\Controllers;


class EventController {


    public function createAction( $request ,  $app )
    {
        $data = array(
            'remarks' => 'Your Remarks',

        );
        $form = $app['form.factory']->createBuilder('form', $data)

            ->add('start_date', 'date', array(
                    'required' => false
                )
            )

            ->add('end_date', 'date', array(
                    'required' => false
                )
            )

            ->add('remarks')
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