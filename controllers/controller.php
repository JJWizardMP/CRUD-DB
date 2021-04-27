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
            $html = $this->view->create_table($rows, 1);
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
            $record_per_page = 5;
            $rows = $this->model->filter_name($term);
            $total_records = count($rows);
            $total_pages = ceil($total_records/$record_per_page);
            $full_rows = $this->model->get_all_employees();
            $data = [
                "total_rows" => count($rows), 
                "total_records" => count($full_rows),
                "total_pages" => $total_pages,
                "page" => 1,
            ];
            $table = $this->view->create_table($rows, 1);
            $pagination = $this->view->create_pagination($data);
            return ["table" => $table, "pagination" => $pagination];
        }

        public function create_pagination($page){
            $record_per_page = 5;
            $start_from = ($page - 1)*$record_per_page;
            $limit_rows = $this->model->get_limit_employees($start_from, $record_per_page);
            $full_rows = $this->model->get_all_employees();
            $total_records = count($full_rows);
            $total_pages = ceil($total_records/$record_per_page);
            $data = [
                "total_rows" => count($limit_rows), 
                "total_records" => $total_records,
                "total_pages" => $total_pages,
                "page" => $page,
            ];
            $table = $this->view->create_table($limit_rows, $page);
            $pagination = $this->view->create_pagination($data);
            return ["table" => $table, "pagination" => $pagination];
        }
    }
?>