<?php
/*
+---------------------------------------------------------------+
|        Reviewer Plugin for e107 v7xx - by Father Barry
|
|        This module for the e107 .7+ website system
|        Copyright Barry Keal 2004-2008
|
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
+---------------------------------------------------------------+
*/
if (!defined('e107_INIT'))
{
    exit;
}
include_lan(e_PLUGIN . "reviewer/languages/" . e_LANGUAGE . ".php");
global $tp, $REVIEWER_PREF, $reviewer_obj , $e107cache;
if ($cacheData = $e107cache->retrieve("nq_reviewer_top_menu"))
{
    echo $cacheData;
    return;
}

if (!is_object($reviewer_obj))
{
    require_once(e_PLUGIN . "reviewer/includes/reviewer_class.php");
    $reviewer_obj = new reviewer;
}

if (!is_object($gen)) $gen = new convert;
$reviewermenu_catcount = $sql->db_Count("reviewer_category", "(*)", "");
$reviewermenu_reviewercount = $sql->db_Count("reviewer_reviewer", "(*)", "");
$reviewermenu_text = REVIEWER_L02 . " " . $reviewermenu_reviewercount . " " . REVIEWER_L03 . " " . REVIEWER_L04 . " $reviewermenu_catcount " . REVIEWER_L05 . "<br />" . REVIEWER_L17 ;
$reviewer_arg = "select count(reviewer_reviewer_id) as numitems,reviewer_items_name,reviewer_category_id,reviewer_items_id,reviewer_reviewer_posted from #reviewer_items
left join #reviewer_reviewer on reviewer_reviewer_itemid=reviewer_items_id
left join #reviewer_category on reviewer_items_catid=reviewer_category_id
where reviewer_items_approved=1
group by reviewer_items_id
order by numitems desc,reviewer_items_name
limit 0," . $REVIEWER_PREF['reviewer_menu_inmenu'];
$sql->db_Select_gen($reviewer_arg, false);

while ($reviewermenu_row = $sql->db_Fetch())
{
    extract($reviewermenu_row);
    if ($numitems > 0)
    {
        $reviewermenu_posted = $gen->convert_date($reviewer_reviewer_posted, "short");
        $reviewermenu_text .= "<br /><br /><img src='" . THEME . "images/bullet2.gif' alt='' /> <span class='smalltext'>
	<strong>
		<a href='" . e_PLUGIN . "reviewer/reviewer.php?0.item.$reviewer_items_id'>" . $tp->toHTML($tp->html_truncate($reviewer_items_name, 20), false) . "</a>
	</strong><br />" . REVIEWER_L14 . " $numitems " . ($numitems == 1?REVIEWER_L15:REVIEWER_L16) . "</span>";
    }
} // while;
ob_start(); // Set up a new output buffer
$reviewer_obj->tablerender(REVIEWER_L13, $reviewermenu_text, 'reviewer_top'); // Render the menu
$cache_data = ob_get_flush(); // Get the menu content, and display it
$e107cache->set("nq_reviewer_top_menu", $cache_data); // Save to cache
