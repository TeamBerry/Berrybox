<?php
include "db_connect.php";
$db = PDOFactory::getConnection();

$token = $_POST["roomToken"];
$load = $db->query("SELECT history_link FROM roomHistory_$token
					ORDER BY room_history_id DESC
					LIMIT 1");
if($load->rowCount() != 0){
	$loaded = $load->fetch(PDO::FETCH_ASSOC);
	echo $loaded["history_link"];
} else {
	echo 0;
}
?>