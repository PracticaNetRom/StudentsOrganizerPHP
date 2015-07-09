<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/10/2015
 * Time: 12:31 AM
 */

namespace Practica\Controller;


class Task {
    public function createAction( $request ,  $app )
    {
        $data = array(
            'events' => 'Your Events',

        );
        $form = $app['form.factory']->createBuilder('form', $data)

            ->add('name', 'varchar', array(
                    'required' => false
                )
            )

            ->add('description', 'text', array(
                    'required' => false
                )
            )

            ->add('events')
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
}