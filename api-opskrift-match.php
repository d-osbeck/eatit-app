<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header ('content-type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Eatit") {
    $sql = "
        SELECT * FROM opskrift_ingredienser_con
        INNER JOIN opskrift ON opskrift.opskId = conOpskId
    ";
    $bind = [];

    if(!empty($data["ingredientMatch"])) {
        $sql .= " WHERE opskrift_ingredienser_con.conIngrId IN (:ingrId)";
        $bind[":ingrId"] = $data["ingredientMatch"];
    }

    $sql .= "GROUP BY opskId";

    $opskrift = $db->sql($sql,$bind);
    header ("HTTP/1.1 200 Access");
    echo json_encode($opskrift);

} else {
    header ("HTTP/1.1 401 Access denied");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>