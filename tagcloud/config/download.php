<?php


if (!defined('e107_INIT')) { exit; }

include_lan(e_LANGUAGEDIR.e_LANGUAGE.'/lan_download.php');

$id_field = 'download_id';
$return_fields = 'd.download_id, d.download_category, download_category_id, d.download_name, d.download_description, d.download_author, d.download_author_website, d.download_datestamp, d.download_class, c.download_category_name, c.download_category_class';
$search_fields = array('download_name', 'download_url', 'download_description', 'download_author', 'download_author_website');
$weights = array('1.2', '0.9', '0.6', '0.6', '0.4');
$no_results = LAN_198;

$where = "download_active > '0' AND d.download_visible IN (".USERCLASS_LIST.") AND c.download_category_class IN (".USERCLASS_LIST.")";
$order = "download_datestamp DESC";
$table = "download AS d LEFT JOIN #download_category AS c ON d.download_category = c.download_category_id";

function search_download($row) {
	global $con;
	$datestamp = $con -> convert_date($row['download_datestamp'], "long");
	$res['link'] = "download.php?view.".$row['download_id'];
	$res['pre_title'] = $row['download_category_name']." | ";
	$res['title'] = $row['download_name'];
	$res['pre_summary'] = "<div class='smalltext'><a href='download.php'>".LAN_197."</a> -> <a href='download.php?list.".$row['download_category_id']."'>".$row['download_category_name']."</a></div>";
	$res['summary'] = $row['download_description'];
	$res['detail'] = LAN_SEARCH_15." ".$row['download_author']." | ".LAN_SEARCH_66.": ".$datestamp;
	return $res;
}
?>