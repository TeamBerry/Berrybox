<?php
include "db_connect.php";
$db = PDOFactory::getConnection();

$lang = $_POST["lang"];
$token = $_POST["token"];
// To reduce the stress on the client, messages from the last 30 minutes are loaded.
$now = date('Y-m-d H:i:s');
$limitDate = date('Y-m-d H:i:s', time() - 180 * 60);

$load = $db->query("SELECT *
						FROM roomChat_$token s
						LEFT JOIN user u ON s.message_author = u.user_token
						LEFT JOIN user_preferences up ON s.message_author=up.up_user_id
					WHERE message_time <= '$now' AND message_time > '$limitDate'
					ORDER BY message_time ASC");
$messageList = array();
while($message = $load->fetch(PDO::FETCH_ASSOC)){
	$m = array();
	$m["scope"] = $message["message_scope"];
	$m["author"] = $message["user_pseudo"];
	$permission = $db->query("SELECT room_user_state FROM roomUsers_$token
								WHERE room_user_token = '$message[user_token]'")->fetch(PDO::FETCH_ASSOC);
	$m["status"] = $permission["room_user_state"];
	$m["authorColor"] = $message["up_color"];
	if($message["message_destination"] != ''){
		$destination = $db->query("SELECT *
									FROM user u
									JOIN user_preferences up ON u.user_token = up.up_user_id
									WHERE user_token = '$message[message_destination]'")->fetch(PDO::FETCH_ASSOC);
		$m["destination"] = $destination["user_pseudo"];
		$m["destinationColor"] = $destination["up_color"];
	}
	$m["destinationToken"] = $message["message_destination"];
	$m["authorToken"] = $message["message_author"];
	$m["timestamp"] = date_create($message["message_time"])->format('H:i');

	$contentRaw = $message["message_contents"];
	$pattern = "#\{(.*?)\}#";
	if(preg_match($pattern, $contentRaw, $matches)){
		$translationToken = $db->query("SELECT expression_$lang FROM translation
							WHERE shortened_token = '$matches[1]'
							OR expression_en = '$matches[1]'
							OR expression_fr = '$matches[1]'
							OR expression_jp = '$matches[1]'")->fetch(PDO::FETCH_ASSOC);
		$messageInterpreted = preg_replace($pattern, $translationToken["expression_$lang"], $contentRaw);
		$m["content"] = stripslashes($messageInterpreted);
	} else {
		$m["content"] = stripslashes($message["message_contents"]);
	}
	array_push($messageList, $m);
}
echo json_encode($messageList);
?>
