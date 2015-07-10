<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/8/2015
 * Time: 3:25 PM
 */

namespace Practica\Controller;


use Practica\Model\Student\Student;
use Practica\Model\Student\StudentTable;

class StudentController
{
    public function createAction($request, $app)
    {
        $data = array(
            'name' => 'Your name',
            'email' => 'Your email',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('first_name')
            ->add('last_name')
            ->add('birth_date', 'date', array('required' => false,
                'years' => range(1980, 2020)))
            ->add('email', 'email')
            ->add('gender', 'choice', array(
                'choices' => array(1 => 'male', 2 => 'female'),
                'expanded' => true,
                'required' => false
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $studentTable = new StudentTable();
            $student=new Student();
            $student->setFirstName($data['first_name']);
            $student->setLastName($data['last_name']);
            $student->setBirthDate($data['birth_date']);
            $student->setgender($data['gender']);
            $student->setEmail($data['email']);
            $studentTable->insert($student);

            // redirect somewhere
            //return $app->redirect('...');
        }

        return $app['twig']->render('index.twig', array('form' => $form->createView()));

    }

    public function listAction($request, $app)
    {
        $StudentTable = new StudentTable();
        $data = $StudentTable->findAll();
        return $app['twig']->render('list.twig', array('data' => $data));
    }

}