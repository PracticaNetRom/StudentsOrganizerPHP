<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/12/2015
 * Time: 10:50 PM
 */

namespace Practica\Controller;


use Practica\Model\Departaments;

class DepartamentsController {
    public function createAction( $request ,  $app )
    {
        $data = array(
            'events' => 'Your events',
            'departament' => 'Your departament'

        );
        $form = $app['form.factory']->createBuilder('form', $data)

            ->add('name', 'data', array(
                    'required' => false
                )
            )

            ->add('name')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            // do something with the data

            //return $app->redirect('...');

        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));


    }



    public function editAction( $request ,  $app )
    {
        return 'In StudentController';
    }

}