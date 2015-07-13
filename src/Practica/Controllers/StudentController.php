<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 18:25
 */

namespace Practica\Controllers;


use Practica\Model\Students;
use Practica\Model\StudentsTable;

class StudentController {

    public function createAction($request,$app){
        $data = array(
            'first_name' => 'Your First Name',
            'last_name' => 'Your Last Name',
            'email' => 'Your email',
            'first_name' => 'Your First Name',
        );
        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name','text',array('attr'=>array('class'=>'form-control')))
            ->add('last_name','text',array('attr'=>array('class'=>'form-control')))
            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' => false,
                'attr'=>array('class'=>'radio')
            ))
            ->add('birth_date','date',array('required' => false,
                'years' => range(1990,2000),
                'attr'=>array('class'=>'form-control')
            ))
            ->add('email','email',array('attr'=>array('class'=>'form-control')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
        var_export($data);

            $student=new Students();
            $student->setFirstName($data['first_name']);
            $student->setLastName($data['last_name']);
            $student->setGender($data['gender']);
            $student->setBirthDate($data['birth_date']);
            $student->setEmail($data['email']);

            $studentTable=new StudentsTable();
            $studentTable->insert($student);

        }


        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }




    public function editAction($request,$app){
        return ('In StudentController');
    }



    public function listAction($request,$app){

        $studentsTable=new StudentsTable();

        $data=$studentsTable->findAll();

        return $app['twig']->render('list.twig', array('data' => $data));


    }

}