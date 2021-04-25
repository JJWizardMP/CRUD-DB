<?php
class View{
    public function create_table($rows){
        $html = "";
        foreach(array_values($rows) as $i => $row){
            $html = $html . "<tr>";
            $html = $html . "<td>" . $i + 1 . "</td>";
            $html = $html . "<td hidden>" . $row["ID"] . "</td>";
            $html = $html . "<td>" . $row["Name"] . "</td>";
            $html = $html . "<td>" . $row["Email"] . "</td>";
            $html = $html . "<td>" . $row["Address"] . "</td>";
            $html = $html . "<td>" . $row["Phone"] . "</td>";
            $html = $html . "<td>";
            $html = $html . '<a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>';
            $html = $html . '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                <i class="fas fa-trash" data-toggle="tooltip" title="Delete"></i></a>';
            $html = $html . "</td>";
            $html = $html . "</tr>";
        }
        return $html;
    }
}
?>