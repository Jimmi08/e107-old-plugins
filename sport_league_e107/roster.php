﻿<?php
/*
+---------------------------------------------------------------+
|        e107 website system
|       
|        ©Steve Dunstan 2001-2002
|        http://e107.org
|        jalist@e107.org
|
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
|		$Source: ../e107_plugins/sport_league_e107/roster.php,v $
|		$Revision: 0.84 $
|		$Date: 2010/02/04 $
|		$Author: ***RuSsE*** $
+---------------------------------------------------------------+
*/
require_once("../../class2.php");
require_once(HEADERF);
$lan_file = e_PLUGIN."sport_league_e107/languages/".e_LANGUAGE."/league_roster_lan.php";
require_once(file_exists($lan_file) ? $lan_file :  e_PLUGIN."sport_league_e107/languages/German/league_roster_lan.php");
require_once("".e_PLUGIN."sport_league_e107/functionen.php");
// ============= START OF THE BODY ====================================
if($_GET['team']){$team=$_GET['team'];}else{$team=$pref['lique_my_team'];}
$z['games']=0;
 		$sql -> db_Select("league_games", "*", "game_home_id=".$team." OR game_gast_id=".$team." ");
 		while($row = $sql-> db_Fetch()){
 		$z['games']++;
		}

	  $qry1="
   	SELECT a.*, ae.* FROM ".MPREFIX."league_leagueteams AS a 
   	LEFT JOIN ".MPREFIX."league_teams AS ae ON ae.team_id=a.leagueteam_team_id   
   	WHERE a.leagueteam_id =".$team."  LIMIT 1
   			";
		$sql->db_Select_gen($qry1);
  	$row = $sql-> db_Fetch();

		$mannschaft_ID=$row['leagueteam_id'];
		$Liga_ID=$row['leagueteam_league_id'];
 		$team_ID=$row['team_id'];
 		$team_Name=$row['team_name'];
 		$team_admin=$row['team_admin_id'];
 		$team_url=$row['team_url'];
 		$team_icon=$row['team_icon'];
 		$team_description=$row['team_description'];

if($_GET['Saison']){$Saison=$_GET['Saison'];}else{$Saison=$Liga_ID;}
$z['players']=0;
 		$sql -> db_Select("league_roster", "*", "roster_team_id=".$team."");
 		while($row = $sql-> db_Fetch()){
 		$z['players']++;
		}
///////////////////////////////////
$expand_autohide = "display:none; ";
$text ="<script type=\"text/javascript\" src=\"".e_PLUGIN."sport_league_e107/handler/wz_tooltip.js\"></script>";
$text .= "<div style='width:100%; text-align: center;'>";
$text .= "
				<table style='width:100%' cellspacing='0' cellpadding='0'>
		  		<tr>
						<td style='text-align: center; width: 40%; vertical-align: top;'><img border='0' src='".e_PLUGIN."sport_league_e107/logos/big/".$team_icon."' height='140'/></td>
						<td style='text-align: left; width: 50%; vertical-align: top;'>
							<table style='width:100%' cellspacing='0' cellpadding='0'>
		  					<tr>
		  					<td style='text-align: left; padding: 4px; font-size: 16px; font-weight: bold;'>".LAN_LEAGUE_ROSTER_26."<br/>";		  					
		 $text .= team_links_H($team, $team_Name, $Saison);	
		 $text .= "</td>
		  					</tr>
		  					<tr>
		  						<td>
		  					</td></tr>
						</table>
				</td>
				<td style='text-align: rigth; width: 10%; vertical-align: top;'>";
		$text .= druckansicht("roster.php", 0, $team);
			if(ADMIN){
		$text .="<a target='_blank' href='".e_PLUGIN."sport_league_e107/admin/admin_roster_config.php?list.".$mannschaft_ID."' title='".LAN_LEAGUE_ROSTER_17."'>
						<img border='0' src='".e_PLUGIN."sport_league_e107/images/system/edit_16.png'></a>";
					}			
		$text .="</td>
				</tr>
			</table>
";
$value_list_arry[3]['text']="2 min";
$value_list_arry[4]['text']="5 min";
$value_list_arry[5]['text']="10 min";
$value_list_arry[6]['text']="20 min";
$value_list_arry[7]['text']="2 min";
$value_list_arry[8]['text']="";

$value_list_arry[3]['value']=2;
$value_list_arry[4]['value']=5;
$value_list_arry[5]['value']=10;
$value_list_arry[6]['value']=20;
$value_list_arry[7]['value']=2;
$value_list_arry[8]['value']=0;		
////////////////+++++++++++++++++++++++++////////////////////////////////+++++++++++++++++++++++++////////////////+++++++++++++++++++++++++
$sql -> db_Select("league_roster", "*", "roster_team_id=".$team."");
if(!($row = $sql-> db_Fetch()))
  {
  $title = "<b>".LAN_LEAGUE_ROSTER_02." ".$team_Name." </b>";	
 	$text .= "</br></br></br><b><p align='center'>".LAN_LEAGUE_ROSTER_03."</b></br></br></br>";		
 	}
else
 {
   $qry1="
   SELECT a.*, ae.*, ab.* FROM ".MPREFIX."league_roster AS a 
   LEFT JOIN ".MPREFIX."league_players AS ae ON ae.players_id=a.roster_player_id
   LEFT JOIN ".MPREFIX."league_leagueteams AS ab ON ab.leagueteam_id=a.roster_league_id
   WHERE a.roster_team_id =".$team." AND a.roster_status!='5' ORDER BY a.roster_position, a.roster_jersy
   		";
	$sql->db_Select_gen($qry1);
	$count1=0;
  while($row = $sql-> db_Fetch())
  		{
 			$player[$count1]=$row;
			$count1++;   		
     	}
$Summegoals=0;$Summeassis=0;$Summepunkte=0;$Summestraffen=0;
for($i=0; $i < $count1 ;$i++)
		{
		if($player[$i]['roster_image']!=""){$player[$i]['players_image']=$player[$i]['roster_image'];}
		$player[$i]['games']=player_games_count($player[$i]['roster_id']);// Spiele gespielt
		$player[$i]['goals']=player_goals_count($player[$i]['roster_id']);// Tore geschoßen							
		$player[$i]['assis']=player_assist_count($player[$i]['roster_id']);// Assis gemacht	
		$player[$i]['strafen']=player_strafe_count($player[$i]['roster_id']);// Strafen gemacht
		
		$Points_aus_archiv=get_archiv_data($player[$i]['roster_id']);		
		if($Points_aus_archiv['player_points_1'] > $player[$i]['games']){$player[$i]['games']=$Points_aus_archiv['player_points_1'];}
		if($Points_aus_archiv['player_points_2'] > $player[$i]['goals']){$player[$i]['goals']=$Points_aus_archiv['player_points_2'];}
		if($Points_aus_archiv['player_points_3'] > $player[$i]['assis']){$player[$i]['assis']=$Points_aus_archiv['player_points_3'];}
		
		$Summegoals=$Summegoals+$player[$i]['goals'];
		$Summeassis=$Summeassis+$player[$i]['assis'];
		$Summepunkte=$Summeassis+$Summegoals;
		$Summestraffen=$Summestraffen+$player[$i]['strafen'];
		$player[$i]['Points']=$player[$i]['goals']+$player[$i]['assis'];
		}
$straffe_D=$Summestraffen/$count1;
for($i=0; $i < $count1 ;$i++)
	{
	if($player[$i]['roster_position']>6)
		{
		$player[$i]['Points']="-/-";
		$player[$i]['color']="-/-";
		continue;
		}	
	if($player[$i]['strafen']>$straffe_D)	
		{
		$player[$i]['color']="<font style='color:#CC0000'>".$player[$i]['strafen']." min</font>";
		}
	else
		{
		$player[$i]['color']=$player[$i]['strafen']."  min";
		}
	}
/////////////////////////////////////////////////////////		
$text .= "<div style='width:100%; text-align: center;'><table style='width:100%' class='fborder' cellspacing='0' cellpadding='0'>";

$STATIS[]="";
$STATIS[1]="<div style='color:#22aa22'>".LAN_LEAGUE_ROSTER_39."</div>";
$STATIS[2]="<div style='color:#aaaa00'>".LAN_LEAGUE_ROSTER_40."</div>";
$STATIS[3]="<div style='color:#ff0000'>".LAN_LEAGUE_ROSTER_41."</div>";
$STATIS[4]="<div style='color:#ff0000'>".LAN_LEAGUE_ROSTER_41a."</div>";
$STATIS[5]="<div style='color:#ff0000'>".LAN_LEAGUE_ROSTER_41b."</div>";
$STATIS[6]="<div style='color:#22aa22'>".LAN_LEAGUE_ROSTER_41c."</div>";

$POSTEXT[1]['text']=LAN_LEAGUE_ROSTER_10;
$POSTEXT[1]['zaehler']=0;
$POSTEXT[2]['text']=LAN_LEAGUE_ROSTER_11;
$POSTEXT[2]['zaehler']=0;
$POSTEXT[3]['text']=LAN_LEAGUE_ROSTER_13;
$POSTEXT[3]['zaehler']=0;
$POSTEXT[4]['text']=LAN_LEAGUE_ROSTER_12;
$POSTEXT[4]['zaehler']=0;
$POSTEXT[9]['text']=LAN_LEAGUE_ROSTER_14;
$POSTEXT[9]['zaehler']=0;
$POSTEXT[10]['text']=LAN_LEAGUE_ROSTER_14a;
$POSTEXT[10]['zaehler']=0;
$POSTEXT[11]['text']=LAN_LEAGUE_ROSTER_15;
$POSTEXT[11]['zaehler']=0;
$POSTEXT[12]['zaehler']=0;
for($i=0;$i < $count1; $i++)     	
   {
   	$POSTEXT[$player[$i]['roster_position']]['zaehler']++;
  } 
$text .= "<tr>
		<td class='fcaption' style='width: 5%; text-align: center'><b>".LAN_LEAGUE_ROSTER_04."</b></td>
		<td class='fcaption'5><b>".LAN_LEAGUE_ROSTER_05."</b></td>
		<td class='fcaption' style='width: 15%; text-align: center'><b>".LAN_LEAGUE_ROSTER_38."</b></td>
		<td class='fcaption' style='width: 10%; text-align: center'><b>".LAN_LEAGUE_ROSTER_07."</b></td>
		<td class='fcaption' style='width: 10%; text-align: center'><b>".LAN_LEAGUE_ROSTER_08."</b></td>
		<td class='fcaption' style='width: 15%; text-align: center'><b>".LAN_LEAGUE_ROSTER_09."</b></td>
	</tr>";
	if(ADMIN){$ADM=true;}else{$ADM=false;}
	for($ZPOS=1;$ZPOS<12;$ZPOS++)
	{
	if($POSTEXT[$ZPOS]['zaehler']!=0)
	{
	$text .= "<tr>
		<td class='forumheader' colSpan='6'><b>".$POSTEXT[$ZPOS]['text']."</b></td>
	</tr>";
  for($i=0;$i < $count1; $i++)     	
    {
  if($player[$i]['roster_position']==$ZPOS)
     	{
     	$text .=player_row($player[$i]['roster_jersy'], $player[$i]['roster_id'], $player[$i]['players_name'], $STATIS[$player[$i]['roster_status']], $player[$i]['games'], $player[$i]['Points'],$player[$i]['color'],$mannschaft_ID,$ADM,$player[$i]['players_image']);
     	}
   else{continue;}
    } 	     	
   }
  else {continue;}
  }
/*
$Lose=0;
for($i=0;$i < $count1; $i++)
 {if(!$player[7][$i]){$Lose++;}}
if($Lose >=1)
  {
   $text .= "<tr>
  				<td class='forumheader' colSpan='6'><b>".LAN_LEAGUE_ROSTER_23."</b></td>
  			 </tr>";
  for($i=0;$i < $count1; $i++)     	
    { 	    	
  if(!$player[$i]['roster_position'])
     	{
     	$text .=player_row($player[$i]['roster_jersy'],$player[$i]['roster_id'],$player[$i]['players_name'],$STATIS[$player[$i]['roster_status']],$player[$i]['games'],$player[$i]['Points'],$player[$i]['color'],$mannschaft_ID,$ADM,$player[$i]['players_image']);
     	}
   else{continue;}
    }
 }
*/   
$text .="</table></div>";
$Saison_liga=saison_liga_name($Liga_ID);
$title = "<b>".LAN_LEAGUE_ROSTER_02." ".$team_Name."  - ".$Saison_liga."</b>";

$text .= "<br /><div style='text-align:center'>
<div style='cursor:pointer' onclick=\"javascript:history.back()\"><b>".LAN_LEAGUE_ROSTER_16."</b></div><br/>";
}
/// Respektiere fremde Arbeit und lasse diesen Text mit dem Link auf die Seite der Entwickler. 
/// Denn nicht nur Du solltest von diese Arbeit profitieren, mach diese Arbeit Bekannt. 
/// Nur so kann eine vernünftige und stabile Entwicklung/Support aufgebaut werden! Danke!!!
$text .=powered_by();
/// =========================================================================================
$text .="</div>";
$ns -> tablerender($title, $text);
require_once(FOOTERF);
////////////////////////  Functionen ////////////////////////////////////////////////////////////////////////////
function player_row($NUMMBER,$PLAYERID,$PLAYERNAME,$PLAYERFIELD1,$GAMES,$PLAYERPOINTS,$PLAYERPENALTY,$TEAMID,$ADM,$PLAYERIMG)
	{
 	$ROWTEXT = "<tr>"; 
 	$ROWTEXT .= "<td class='forumheader3' style='width:5%; text-align:right;'><b>&nbsp;".$NUMMBER."</b></td>"; 
 	$ROWTEXT .= "<td class='forumheader3'>";
	if($ADM){
	$ROWTEXT .="<a target='_blank' href='".e_PLUGIN."sport_league_e107/admin/admin_roster_config.php?edit.".$PLAYERID.".".$TEAMID."' title='".LAN_LEAGUE_ROSTER_42."'>
						<img border='0' src='".e_PLUGIN."sport_league_e107/images/system/edit_16.png'></a>  ";
			}	
$ROWTEXT.="<a href=\"".e_PLUGIN."sport_league_e107/profil.php?player_id=".$PLAYERID."\" onmouseover=\"Tip('<table cellpadding=\'0\' cellspacing=\'0\'><tr><td style=\'width:17px;height:14px;background:transparent url(".e_PLUGIN."sport_league_e107/images/tl.png) no-repeat;\'></td><td style=\'height:14px;background:transparent url(".e_PLUGIN."sport_league_e107/images/tc.png) repeat-x;\'></td><td style=\'width:17px;height:14px;background:transparent url(".e_PLUGIN."sport_league_e107/images/tr.png) no-repeat;\'></td></tr><tr><td style=\'width:17px;background:transparent url(".e_PLUGIN."sport_league_e107/images/bl.png) no-repeat;background-position:bottom;\'></td><td style=\'background:transparent url(".e_PLUGIN."sport_league_e107/images/bc.png) repeat-x;background-position:bottom;padding-bottom:10px;font-weight:bold;\'><img src=\'".e_PLUGIN."sport_league_e107/fotos/".$PLAYERIMG."\' width=\'120\'><br/>".$PLAYERNAME."</td><td style=\'width:17px;background:transparent url(".e_PLUGIN."sport_league_e107/images/br.png) no-repeat;background-position:bottom;\'></td></tr></table>')\" onmouseout=\"UnTip()\"> ".$PLAYERNAME."</a>";
$ROWTEXT.="&nbsp;";	
 	
$ROWTEXT .= "</td>"; 
 	$ROWTEXT .= "<td class='forumheader3' style='width:15%; text-align:center;'>".$PLAYERFIELD1."</td>"; 
 	$ROWTEXT .= "<td class='forumheader3' style='width:10%; text-align:center;'>".$GAMES."</td>"; 
 	$ROWTEXT .= "<td class='forumheader3' style='width:10%; text-align:center;'>".$PLAYERPOINTS."</td>"; 
 	$ROWTEXT .= "<td class='forumheader3' style='width:10%; text-align:center;'>".$PLAYERPENALTY."</td>"; 
 	$ROWTEXT .= "</tr>"; 
	return $ROWTEXT;	
	}
//////////////////////////////////////////////////

?>