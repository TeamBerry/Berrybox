<?php
include "db_connect.php";
$db = PDOFactory::getConnection();

$roomToken = $_POST["roomToken"];

$queryList = $db->query("SELECT * FROM roomHistory_$roomToken
					ORDER BY room_history_id ASC");
$songList = array();
while($song = $queryList->fetch(PDO::FETCH_ASSOC)){
	$s = array();
	$s["entry"] = $song["room_history_id"];
	$s["videoLink"] = $song["history_link"];
	$s["videoName"] = $song["video_name"];
	$s["submitter"] = $song["history_user"];
	$s["submitTime"] = $song["history_time"];
	array_push($songList, $s);
}
echo json_encode($songList);
?>