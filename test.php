<?php
include "functions/db_connect.php";
$db = PDOFactory::getConnection();
$roomToken = "FYRNDGIXQ08B4VW";
$prev = "8ySIhxJL2Fg";
$next = $db->query("SELECT history_link FROM roomHistory_$roomToken
					WHERE room_history_id > (SELECT MAX(room_history_id) AS most_recent_id
					FROM roomHistory_$roomToken
					WHERE history_link = '$prev')
					ORDER BY room_history_id ASC
					LIMIT 1")->fetch(PDO::FETCH_ASSOC);
$n = array();
$n["link"] = $next["history_link"];
$n["title"] = $next["video_name"];
echo json_encode($n);
?>

