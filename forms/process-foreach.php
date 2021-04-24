<?php
    function Elementary($sel){  
        $reactions = array(
            "Torbellino" => array("Ameno", "Pyro", "Cryo", "Hydro", "Electro"),
            "Cristalizado" => array("Geo", "Pyro", "Cryo", "Hydro", "Electro"),
            "Congelado" => array("Hydro", "Cryo"),
            "Electro-Carga" => array("Electro", "Hydro"),
            "Sobre-Carga" => array("Pyro", "Electro"),
            "Superconductor" => array("Electro", "Cryo"),
            "Vaporizado" => array("Pyro", "Hydro"),
            "Derretido" => array("Pyro", "Cryo"),
            "Quemadura" => array("Pyro", "Dendro")
        );
        $res = "Para hacer " . $sel . ' se necesitan los elementos "'; 
            foreach($reactions[$sel] as $value){
                $res = $res . $value . ' ';
            }
        $res = $res . '"';
        return $res;
    }  
    $errors = [];
    $data = [];

    if (!isset($_POST['selector'])) {
        $errors['number'] = 'No se selecciona ninguna acción';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
        $data['operation'] = Elementary($_POST['selector']);
    }

    echo json_encode($data);
?>