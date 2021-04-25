<?php
// directorio actual
chdir('./controllers');
require('./../models/model.php');
require('./../views/view.php');
chdir("../");

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

    public function add_new($data){
        $this->model->add_row($data);
        return $this->create_view_fulltable();
    }
}
?>