<?php
function verifySession($checkCompetition = true){
	if(!isset($_REQUEST['account']) || !isset($_REQUEST['admin']) || !isset($_REQUEST['team']) || !isset($_REQUEST['sessionID']) || !isset($_REQUEST['gameID'])){
		return false;
	}
	global $link;
	$link = mysqli_connect('localhost', 'scout', 'qaz.123', 'scouting', '3306');

	if($checkCompetition){
		if(!isset($_REQUEST['competition'])){
			return false;
		}
		else{
			$competition = mysqli_real_escape_string($link, $_REQUEST['competition']);
		}
	}
	$account = mysqli_real_escape_string($link, $_REQUEST['account']);
	$admin = mysqli_real_escape_string($link, $_REQUEST['admin']);
	$team = mysqli_real_escape_string($link, $_REQUEST['team']);
	$sessionID = mysqli_real_escape_string($link, $_REQUEST['sessionID']);
	$gameID = mysqli_real_escape_string($link, $_REQUEST['gameID']);
	$currentTime = time();
	$sessionSQL = "SELECT * FROM `sessions` LEFT JOIN `users` ON `sessions`.`account` = `users`.`primaryKey` WHERE `sessions`.`account`='$account' AND `sessions`.`sessionID`='$sessionID' AND `users`.`admin`='$admin' AND `sessions`.`expiration`>'$currentTime';";
	$sessionSQLResult = mysqli_query($link, $sessionSQL);

	if(mysqli_num_rows($sessionSQLResult) != 1){
		return false;
	}
	else{
		$GLOBALS['userID'] = $account;
		$GLOBALS['userTeam'] = $team;
		$GLOBALS['admin'] = $admin;
		$GLOBALS['gameID'] = $gameID;
		if($checkCompetition){
			$GLOBALS['competition'] = $competition;
		}
		else{
			$GLOBALS['competition'] = null;
		}
		return true;
	}
}
function adminLink(){
	$link = mysqli_connect('localhost', 'scoutAdmin', 'qaz.123', 'scouting', '3306');
	return $link;
}
function accountsLink(){
	$link = mysqli_connect('localhost', 'accounts', 'qaz.123', 'scouting', '3306');
	return $link;
}
function randomString($length){
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

?>
