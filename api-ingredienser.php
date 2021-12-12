<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: Skal udfyldes og være Eatit
 * ingrediensSearch: Søg efter ingredienser
 * opskriftSearch: Søg efter opskrifter
 */

header ('content-type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Eatit") {
    $sql = "SELECT * FROM ingredienser WHERE 1=1";
    $bind = [];

    if(!empty($data["ingrediensSearch"])) {
        $sql .= " AND ingredienser.ingrNavn LIKE CONCAT('%', :ingrNavn, '%')";
        $bind[":ingrNavn"] = $data["ingrediensSearch"];
    }

    $ingredienser = $db->sql($sql,$bind);
    header ("HTTP/1.1 200 OK");
    echo json_encode($ingredienser);

} else {
    header ("HTTP/1.1 401 Access denied");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>
