<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controllers;


use Practica\Model\Student\Student;
use Practica\Model\Student\StudentTable;

class StudentController {
    public function createAction($request,$app){
        $data = array(
            'first_name' => 'Your First Name!',
            'last_name' => 'Your Last Name!',
            'email' => 'your_email@exemple.com',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name','text',array('attr'=>array('class'=>'form-control')))
            ->add('last_name','text',array('attr'=>array('class'=>'form-control')))
            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' => false
            ))
            ->add('birth_date','date',array('required' => false,'years'=>range(1950,2015),'attr'=>array('class'=>'form-control')))

            ->add('email','email',array('attr'=>array('class'=>'form-control')))

            ->getForm();

        $form->handleRequest($request);

        //if ($form->isValid()) {
         $data = $form->getData();

            $StudentTable=new StudentTable();
            $Student= new Student();
            $Student->setFirstName($data['first_name']);
            $Student->setLastName($data['last_name']);
            $Student->setGender($data['gender']);
            $Student->setBirthDate($data['birth_date']);
            $Student->setEmail($data['email']);
            $StudentTable->insert($Student);

            // redirect somewhere
            //return $app->redirect('...');
        //}
        return $app['twig']->render('index.twig', array('form' => $form->createView()));

    }

    public function listAction($request,$app){

        $StudentTable= new StudentTable();
        $data= $StudentTable->findAll();
        return $app['twig']->render('list.twig', array('data' => $data));
    }



    public function editAction($request,$app){
        return ('In StudentController');

    }

}