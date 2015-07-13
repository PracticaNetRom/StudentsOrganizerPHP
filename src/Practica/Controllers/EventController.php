<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 18:43
 */

namespace Practica\Controllers;


use Practica\Model\Events;
use Practica\Model\EventsTable;

class EventController {

    public function createAction($request,$app){
        $data = array(
            'remarks' => 'Remarks',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('id','integer')
            ->add('start_date','datetime')
            ->add('end_date','datetime')
            ->add('remarks','text')
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();

            $event=new Events();
            $event->setId($data['id']);
            $event->setStartDate($data['start_date']);
            $event->setEndDate($data['end_date']);
            $event->setRemarks($data['remarks']);

            $eventsTable=new EventsTable();
            $eventsTable->insert($event);

        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }



    public function editAction($request,$app){
        return ('In StudentController');
    }



    public function listAction($request,$app){

        $eventsTable=new EventsTable();
        $data=$eventsTable->findAll();

        return $app['twig']->render('list.twig', array('data' => $data));


    }
}