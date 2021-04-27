<?php
    class View{

        public function create_table($rows, $page){
            $html = "";
            $i = (((int)$page) * 5) - 5;
            foreach($rows as $row){
                $html .= "<tr>";
                $html .= "<td>" . ((int)$i) + 1 . "</td>";
                $html .= "<td>" . $row["Name"] . "</td>";
                $html .= "<td>" . $row["Email"] . "</td>";
                $html .= "<td>" . $row["Address"] . "</td>";
                $html .= "<td>" . $row["Phone"] . "</td>";
                $html .= "<td>";
                $html .= '<a class="edit cursor-pointer" data-id="' .$row["ID"] . '">
                                    <i class="fas fa-pencil-alt" data-toggle="tooltip" 
                                    title="Edit"></i></a>';
                $html .= '<a class="delete cursor-pointer" data-id="' .$row["ID"] . '">
                                    <i class="fas fa-trash" data-toggle="tooltip" 
                                    title="Delete"></i></a>';
                $html .= "</td>";
                $html .= "</tr>";
                $i++;
            }
            return $html;
        }

        public function create_showing($total_rows, $total_records){
            $html = "<div class='hint-text'>Showing <b>". $total_rows . "</b> out of 
                        <b>" . $total_records . "</b> entries</div>";
            return $html;
        }

        public function create_pagination($data){
            $html = "";
            $html .= $this->create_showing($data["total_rows"], $data["total_records"]);
            $html .= '<ul class="pagination">';
            for($i=1; $i<=$data["total_pages"]; $i++) {
                if($i == $data["page"]){
                    $html .= "<li id='" .$i. "' class='cursor-pointer page-link active'>
                        <span> " . $i . "</span></li>"; 
                }else{
                    $html .= "<li id='" .$i. "' class='cursor-pointer page-link'>
                        <span> " . $i . "</span></li>";
                }
            }  
            $html .= '</ul>';
            return $html;
        }
    }
?>