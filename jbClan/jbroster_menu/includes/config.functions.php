<?php
/*
+--------------------------------------------------------------------------------+
|   jbRoster - by Jesse Burns aka jburns131 aka Jakle (jburns131@jbwebware.com)
|
|   Plugin Support Site: www.jbwebware.com
|
|   A plugin designed for the e107 Website System
|   http://e107.org
|
|   For more plugins visit:
|   http://plugins.e107.org
|   http://www.e107coders.org
|
|   Released under the terms and conditions of the
|   GNU General Public License (http://gnu.org).
|
+--------------------------------------------------------------------------------+
*/

function tokenizeArray($array) {

    unset($GLOBALS['tokens']);

    $delims = DELIMITER_1;
    $word = strtok( $array, $delims );
    while ( is_string( $word ) ) {
        if ( $word ) {
            global $tokens;
            $tokens[] = $word;
        }
        $word = strtok ( $delims );
    }
}

function calc_age($age) {
    $diff = (date("Y") - date("Y",$age));
    if (mktime(0,0,0,date("m",$age),date("j",$age),date("Y")) <= time()) {
        return $diff;
    } else {
        return $diff -1;
    }
}
?>