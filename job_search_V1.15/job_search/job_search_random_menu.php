<?php
/*
+---------------------------------------------------------------+
|	Job Search Plugin for e107
|
|	Copyright (C) Fathr Barry Keal 2003 - 2008
|	http://www.keal.me.uk
|
|	Released under the terms and conditions of the
|	GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/
if (!defined('e107_INIT'))
{
    exit;
}
require_once(e_PLUGIN . "job_search/includes/jobsearch_class.php");
if (!is_object($jobsch_obj))
{
    $jobsch_obj = new job_search;
}
if ($jobsch_obj->jobsch_reader)
{
    $jobsch_conv = new convert;
    global $tp, $JOBSCH_PREFs, $sql;
    // print $jobsch_uc;
    $jobsch_text = "";
    $jobsch_today=mktime(0,0,0,date("m"),date("d"),date("Y"));
    if ($jobsch_obj->jobsch_subcats)
    {
        $arg = "select a.jobsch_cid,a.jobsch_postdate,a.jobsch_vacancy,c.jobsch_catname,a.jobsch_document,a.jobsch_salary,s.jobsch_subname,s.jobsch_categoryid,s.jobsch_subid from #jobsch_ads as a
		left join #jobsch_subcats as s
		on s.jobsch_subid = a.jobsch_category
		left join #jobsch_cats as c
		on s.jobsch_categoryid = c.jobsch_catid
		where find_in_set(jobsch_catclass,'" . USERCLASS_LIST . "')
		and jobsch_approved > 0
		and (jobsch_closedate>'" . $jobsch_today . "' or jobsch_closedate =0) order by rand() limit 0,".$jobsch_obj->jobsch_inrand ;
    }
    else
    {
        $arg = "select a.jobsch_cid,a.jobsch_postdate,a.jobsch_vacancy,c.jobsch_catname from #jobsch_ads as a
		left join #jobsch_cats as c
		on a.jobsch_category = c.jobsch_catid
		where find_in_set(jobsch_catclass,'" . USERCLASS_LIST . "')
		and jobsch_approved > 0
		and (jobsch_closedate>'" . $jobsch_today . "' or jobsch_closedate =0) order by rand() limit 0,".$jobsch_obj->jobsch_inrand  ;
    }

    if ($dsel = $sql->db_Select_gen($arg,false))
    {
        $jobsch_text .= "<div style='text-align:left;'>"; ;
        while ($jobsch_item = $sql->db_Fetch())
        {
            $jobsch_text .= "<strong><img src='" . e_PLUGIN . "job_search/images/icon_16.png' alt='' /> <a href='" . e_PLUGIN . "job_search/index.php?0.item." . $jobsch_item['jobsch_categoryid'] . "." . $jobsch_item['jobsch_subid'] . "." . $jobsch_item['jobsch_cid'] . "' >" . $tp->html_truncate($jobsch_item['jobsch_vacancy'], 30, JOBSCH_MENU_4) . "</a></strong><br />
		<span class='smalltext'>" . JOBSCH_MENU_8 . " " . $jobsch_conv->convert_date($jobsch_item['jobsch_postdate'], "short") . " <br />
		" . JOBSCH_MENU_9 . " " . $tp->html_truncate($jobsch_item['jobsch_catname'], 20) . "</span><br /><br />";
        }
    }
    $jobsch_text .= "</div>";
    $ns->tablerender(JOBSCH_MENU_1, $jobsch_text);
}

?>