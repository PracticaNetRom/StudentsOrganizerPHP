<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 13.07.2015
 * Time: 11:19
 */

namespace Practica\Controllers;


use Practica\Model\Tasks;
use Practica\Model\TasksTable;

class TaskController {

    public function createAction($request,$app){
        $data = array(
            'remarks' => 'Remarks',
        );

        $form = $app['form.factory']->createBuilder('form', $data)
            ->add('name')
            ->add('description','text')
            ->add('events_id','integer')
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();

            $task=new Tasks();
            $task->setName($data['name']);
            $task->setDescription($data['description']);
            $task->setEventsId($data['events_id']);

            $taskTable=new TasksTable();
            $taskTable->insert($task);

        }
        return $app['twig']->render('index.twig', array('form' => $form->createView()));
    }

}