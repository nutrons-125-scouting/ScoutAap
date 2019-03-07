<?php
include 'verifySession.php';
if(!isset($_REQUEST['requestType']) || $_REQUEST['requestType'] == null){
	echo 'FALSE';
	die();
}
global $userTeam, $userID, $userTeam, $admin, $competition;
$requestType = $_REQUEST['requestType'];
if(strtolower($requestType) != 'competitionlist' && strtolower($requestType) != 'eventlist'){
	if(verifySession() == false){
		echo false;
		die();
	}
}
date_default_timezone_set('America/Los_Angeles');
$blueAllianceAPIid = 'jygtpJ1Ts9ynL5No3xSRz6FHIfSsSdCsJRGc1StIljhXOWz99BkiOkBvmJJurDrb';
// Create Http context details
$contextData = array(
    'header' => "X-TBA-Auth-Key: $blueAllianceAPIid\r\n".
              "Content-Length: 0"."\r\n",
    /* This is really bad and should be changed */
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    )
);

// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
$baseURL = 'http://www.thebluealliance.com/api/v3/event/';
if(strtolower($requestType) == 'rankings' || strtolower($requestType) == 'standings') {
	$blueAllianceURL = 'http://www.thebluealliance.com/api/v3/event/' . $competition . '/rankings';
	$response = file_get_contents($blueAllianceURL, false, $context);
	echo $response;
}
elseif(strtolower($requestType) == 'teamname' && $_REQUEST['teamNumber'] != '*'){
	$blueAllianceURL = 'http://www.thebluealliance.com/api/v3/team/frc'.$_REQUEST['teamNumber'].'/'.date('Y');
	$response = file_get_contents($blueAllianceURL, false, $context);
	$responseObject = JSON_decode($response);
	echo $responseObject->nickname;
}
elseif(strtolower($requestType) == 'competitionlist' || strtolower($requestType) == 'eventlist'){
	$blueAllianceURL = 'http://www.thebluealliance.com/api/v3/events/'.date('Y');
	$response = file_get_contents($blueAllianceURL, false, $context);
	$responseObject = JSON_decode($response, true);
	$competitionsOutput = array();
	foreach($responseObject as $competition){
		$competitionsOutput[$competition['key']] = $competition['name'];
	}
	echo JSON_encode($competitionsOutput);
}
elseif(strtolower($requestType) == 'matchlist' || strtolower($requestType) == 'schedule'){
	$blueAllianceURL = $baseURL.$competition.'/matches';
	$response = file_get_contents($blueAllianceURL, false, $context);
	echo $response;
}
elseif(strtolower($requestType) == 'teamlist'){
	$blueAllianceURL = $baseURL.$competition.'/teams';
	$response = file_get_contents($blueAllianceURL, false, $context);
	$teamsArray = JSON_decode($response);
	$outputArray = array(); // in the format ['teamNumber', 'teamName']
	foreach($teamsArray as $team){
		$outputArray[] = array($team->team_number, $team->nickname);
	}
	echo JSON_encode($outputArray);
}
elseif(strtolower($requestType) == 'eventdata' || strtolower($requestType) == 'event'){
	$blueAllianceURL = $baseURL.$competition;
	$response = file_get_contents($blueAllianceURL, false, $context);
	echo $response;
}
?>
