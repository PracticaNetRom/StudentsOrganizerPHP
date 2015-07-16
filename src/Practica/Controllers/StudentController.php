<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controllers;


use Practica\Model\Student;
use Practica\Model\StudentTable;

class StudentController {

    public function createAction( $request ,  $app )
    {
        $data = array(
            'first_name' => '',
            'last_name' => '',
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
        'required' => false, 'years'=> range(1990,2020)
    )
               )
               ->add('email', 'email')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();


            // do something with the data

            $StudentTable= new StudentTable;

            $Student=new Student();
            $Student->setFirstName($data['first_name']);
            $Student->setLastName($data['last_name']);
            $Student->setGender($data['gender']);
            $Student->setBirthDate($data['birth_date']);
            $Student->setEmail($data['email']);

            $StudentTable->insert($Student);


            // redirect somewhere

        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }



    public function editAction( $request ,  $app )
    {
        return 'In StudentController';
    }

    public function listAction($request ,  $app ){
        $StudentTable = new StudentTable();

        $data= $StudentTable->findAll();

        return $app['twig']->render('list.twig', array('data'=> $data));
    }
}