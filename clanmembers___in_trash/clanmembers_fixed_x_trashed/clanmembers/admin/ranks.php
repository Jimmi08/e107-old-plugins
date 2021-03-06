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
	?>
	<script type="text/javascript" src="includes/jquery.tablednd.js"></script>
	<script type="text/javascript">
	clanm_jq(document).ready(function() {
	clanm_jq('#rankstable').tableDnD({
			onDrop: function(table, row) {
				document.getElementById('neworder').value = $.tableDnD.serialize();
				document.forms["rankform"].submit(); 				
			}
		});
	});
	
	function DelRank(id){
		var sure = confirm("<?php echo _SUREDELRANK;?>");
		if(sure){
			top.cmupdate.document.location = "admin_old.php?delrank&rid="+id;
			document.getElementById(id).style.display = "none";
		}
	}
	
	function CheckForm(){
		if(document.getElementById('rank').value !=""){
			return true;
		}else{
			alert("<?php echo _FILLINTITLE;?>");
			return false;
		}
	}
	function EnableGive(){
		document.getElementById('give1').disabled = false;
		document.getElementById('give2').disabled = false;
	}
	</script>
	
	<?php

	//Add Rank
	$text = "<form action='admin_old.php?addrank' method='post' enctype='multipart/form-data' onSubmit='return CheckForm();'>
	<table id='addranktable'  class='table adminform'><tbody>
		<tr>
			<td align='left'>"._TITLE.": </td>
			<td align='left'><input type='text' id='rank' name='rank' maxlength='85'></td>
		</tr>
		<tr>
			<td align='left'>"._IMG.": </td>
			<td align='left'><input type='file' name='rankimage'></td>
		</tr>
		<tr>
			<td align='left' colspan='2'><input type='submit' class='button' name='submit' value='"._ADDRANK."'></td>
		</tr>
	</table>	 
	<input type='hidden' name='e-token' value='".e_TOKEN."' />
	</tbody></form>
	</center>";
	
	$ns->tablerender(_ADDRANK, $text);
	
if($sql->db_Count("clan_members_ranks") > 0){
	
	//Ranks
	$text = "<form method='post' action='admin_old.php?giverank' name='giverank'>
	<div align='right'><input type='submit' class='button' value='"._GIVERANK."' title='"._CHECKRANKSTOGIVE."' id='give1' disabled style='margin-bottom:2px;'></div>";
	$text .= "<table id='rankstable'  class='fborder table adminlist table-striped'> ";
	$text .= "<thead><tr>
					<th class='fcaption'></th>
					<th class='fcaption'><b>"._TITLE."</b></th>
					<th class='fcaption'><b>"._IMG."</b></th>";
	$text .= "<th class='fcaption'><b>"._FUNCTIONS."</b></th>
				</tr> </thead>
				<tbody>";
				
	$sql->select("clan_members_ranks", "*", "ORDER BY rankorder ASC", "");
	while($row = $sql->fetch()){
		$rid = $row['rid'];
		$rank = $row['rank'];
		$rimage = $row['rimage'];
		$rankorder = $row['rankorder'];
		
		$img = "";
		if(file_exists("images/Ranks/$rimage") && $rimage !=""){
			$img = "<img src='images/Ranks/$rimage' class='showpointer'>";
		}

	$text .= "<tr id='$rid'>
			<td class='forumheader3' width='10'><input type='radio' name='rank' value='$rid' style='cursor:pointer;' onClick='EnableGive();'></td>
			<td class='forumheader3'>$rank</td>
			<td class='forumheader3'>$img</td>
			<td class='forumheader3' width='10' nowrap><input type='button' class='button' value='"._EDIT."' onclick=\"window.location='admin_old.php?EditRank&amp;rid=$rid'\">&nbsp;<input type='button' class='button' value='"._DEL."' onclick=\"DelRank('$rid');\"></td>

		</tr>";
	}
	$text .= "</tbody></table>";
	$text .= "<div align='right'>
		<input type='submit' class='button' value='"._GIVERANK."' title='"._CHECKRANKSTOGIVE."' id='give2' disabled style='margin-top:2px;'></div>
		<input type='hidden' name='e-token' value='".e_TOKEN."' />
		</form>";
	$text .= "<form id='rankform' method='post' action='admin_old.php?saverankorder' target='cmupdate'>
	<input type='hidden' name='neworder' id='neworder' value=''>
	<input type='hidden' name='e-token' value='".e_TOKEN."' />
	</form>";

	$ns->tablerender(_INFORanks, $text);
	
	echo '<iframe name="cmupdate" id="cmupdate" style="width:0;height:0;display:none;" src="#"></iframe>';
}
			
?>