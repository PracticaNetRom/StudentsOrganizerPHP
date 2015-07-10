<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controllers;


use Practica\Model\Student\Student;

class StudentController {

public $student;

    
$student->setFirstName($data['first_name']);

var_dump($student->getFirstName());


    public function createAction($request,$app){
        $data = array(
            'first_name' => 'Your First Name',
            'last_name' => 'Your Last Name',
            'email' => 'Your email',
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




        return $app['twig']->render('index.twig', array('form' => $form->createView()));

    }
    public function editAction($request,$app){
        return ('In StudentController');

    }

}