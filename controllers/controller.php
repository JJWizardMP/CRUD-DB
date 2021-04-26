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

        public function Close_Connection(){
            $this->model->close();
        }

        public function create_view_fulltable(){
            $rows = $this->model->get_all_employees();
            $html = $this->view->create_table($rows);
            return $html;
        }

        public function search_row($id){
            $row = $this->model->search_byid($id);
            return $row;
        }

        public function add_new_record($data){
            $this->model->add_row($data);
            return $this->create_view_fulltable();
        }

        public function update_record($data){
            $this->model->update_row($data);
            return $this->create_view_fulltable();
        }

        public function delete_record($id){
            $this->model->delete_row($id);
            return $this->create_view_fulltable();
        }

        public function filter_by_name($term){
            $rows = $this->model->filter_name($term);
            return $this->view->create_table($rows);
        }
    }
?>