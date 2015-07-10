<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controller;


use Practica\Model\Student;
use Practica\Model\StudentTable;

class StudentController {
    public function createAction($request,$app)
    {
        $data = array(
            'name' => 'Your name',
            'email' => 'Your email',
        );
        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name')
            ->add('last_name')
            ->add('email', 'email')
            ->add('birth_day', 'date', array('required'=>false,'years'=>range(1990,2015)))

            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' =>false
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $student = new Student();
            $student->setFirstName($data['first_name']);
            $student->setLastName($data['last_name']);
            $student->setBirthDay($data['birth_day']);
            $student->setGender($data['gender']);
            $student->setEmail(($data['email']));



            // do something with the data
            $studentTable=new StudentTable();
            $studentTable->insert($student);



            // redirect somewhere
            //return $app->redirect('...');
        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }
        public function listAction($request,$app){
            $studentTable=new StudentTable();
            $data=$studentTable->findAll();
            return $app['twig']->render('list.twig', array('data' => $data));
        }
    public function editAction($request,$app)
    {
        return 'In Student Controller';

    }

}