<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/13/2015
 * Time: 1:35 AM
 */

namespace Practica\Controller;


class TaskController {
    public function createAction( $request ,  $app )
    {
        $data = array(
            'events' => 'Your Events',

        );
        $form = $app['form.factory']->createBuilder('form', $data)

            ->add('name', 'data', array(
                    'required' => false
                )
            )

            ->add('description', 'data', array(
                    'required' => false
                )
            )


            ->add('name')
            ->add('description')
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