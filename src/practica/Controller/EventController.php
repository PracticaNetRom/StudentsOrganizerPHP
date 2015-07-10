<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/10/2015
 * Time: 12:26 AM
 */

namespace Practica\Controller;


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

            ->add('period_days', 'date', array(
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