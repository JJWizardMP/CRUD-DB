<?php
require('models/model.php');
require('views/view.php');

class Controller{
    private $model;
    private $view;
 
    public function __construct(){
        $this->model = new EmployeesModel();
        $this->view = new View();
    }

    public function create_view_fulltable(){
        $rows = $this->model->get_all_employees();
        $html = $this->view->create_table($rows);
        return $html;
    }
/*
    public function insert_new($data){
        $this->model->insert_row($data);
        return $this->create_view_fulltable();
    }*/
}
?>