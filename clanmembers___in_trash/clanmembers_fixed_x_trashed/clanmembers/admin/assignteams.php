<?php
/*
+ -----------------------------------------------------------------+
| e107: Clan Members 1.0                                           |
| ===========================                                      |
|                                                                  |
| Copyright (c) 2011 Untergang                                     |
| http://www.udesigns.be/                                          |
|                                                                  |
| This file may not be redistributed in whole or significant part. |
+------------------------------------------------------------------+
*/

if (!defined('CM_ADMIN')) {
	die ("Access Denied");
}

$teams = $_POST['teams'];

$text = "<form method='post' action='admin_old.php?assign&type=Teams'>";	

if(count($teams) == 0){
	header("Location: admin_old.php?teams");
}

for($i=0;$i<count($teams);$i++){
	$text .= "<input type='hidden' name='teams[]' value='$teams[$i]'>";
}

$result = $sql->gen("SELECT u.user_name, i.userid from #clan_members_info i, #user u WHERE u.user_id=i.userid order by u.user_name");
	while($row = $sql->fetch()){
		$memberid = $row['userid'];
		$member = $row['user_name'];
		
		$text .= "<label><input type='checkbox' name='cmnames[]' value='$memberid'> $member</label><br />";
	}

$text .= "<br /><input type='submit' class='button' value='"._ASSIGNTEAMS."'>
<input type='hidden' name='e-token' value='".e_TOKEN."' />
</form>";

$ns->tablerender(_ASSIGNTEAMSTO, $text);
		
?>