<?php
    function Tree($num){  
        $res = "";
        $c = 1;
        while($c <= $num){
            $d =1;
            while($d <= $c){
                $res = $res . '*';
                $d++;
            }
            $c++;
            $res = $res . '<br>';
        }
        return $res;
    }  

    $errors = [];
    $data = [];

    if (empty($_POST['number'])) {
        $errors['number'] = 'No ingreso ningún número';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = Tree($_POST['number']);
    }

    echo json_encode($data);
?>