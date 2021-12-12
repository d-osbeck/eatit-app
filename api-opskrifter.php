<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header ('content-type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "Eatit") {
    $sql = "SELECT * FROM opskrift WHERE 1=1";
    $bind = [];

    if(!empty($data["nameSearch"])) {
        $sql .= " AND opskNavn LIKE CONCAT('%', :opskNavn, '%')";
        $bind[":opskNavn"] = $data["nameSearch"];
    }

    $sql .= " ORDER BY opskNavn ASC";

    $opskrift = $db->sql($sql,$bind);
    header ("HTTP/1.1 200 Access");
    echo json_encode($opskrift);

} else {
    header ("HTTP/1.1 401 Access denied");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}
?>