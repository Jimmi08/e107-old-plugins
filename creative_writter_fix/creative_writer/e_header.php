<?php
if (e_QUERY)
{

#	var $stopwords_php = "|a|about|an|and|are|as|at|be|by|com|edu|for|from|how|i|in|is|it|of|on|or|that|the|this|to|was|what|when|where|who|will|with|the|www|";
#	var $stopwords_mysql = "|a|a's|able|about|above|according|accordingly|across|actually|after|afterwards|again|against|ain't|all|allow|allows|almost|alone|along|already|also|although|always|am|among|amongst|an|and|another|any|anybody|anyhow|anyone|anything|anyway|anyways|anywhere|apart|appear|appreciate|appropriate|are|aren't|around|as|aside|ask|asking|associated|at|available|away|awfully|be|became|because|become|becomes|becoming|been|before|beforehand|behind|being|believe|below|beside|besides|best|better|between|beyond|both|brief|but|by|c'mon|c's|came|can|can't|cannot|cant|cause|causes|certain|certainly|changes|clearly|co|com|come|comes|concerning|consequently|consider|considering|contain|containing|contains|corresponding|could|couldn't|course|currently|definitely|described|despite|did|didn't|different|do|does|doesn't|doing|don't|done|down|downwards|during|each|edu|eg|eight|either|else|elsewhere|enough|entirely|especially|et|etc|even|ever|every|everybody|everyone|everything|everywhere|ex|exactly|example|except|far|few|fifth|first|five|followed|following|follows|for|former|formerly|forth|four|from|further|furthermore|get|gets|getting|given|gives|go|goes|going|gone|got|gotten|greetings|had|hadn't|happens|hardly|has|hasn't|have|haven't|having|he|he's|hello|help|hence|her|here|here's|hereafter|hereby|herein|hereupon|hers|herself|hi|him|himself|his|hither|hopefully|how|howbeit|however|i|i'd|i'll|i'm|i've|ie|if|ignored|immediate|in|inasmuch|inc|indeed|indicate|indicated|indicates|inner|insofar|instead|into|inward|is|isn't|it|it'd|it'll|it's|its|itself|just|keep|keeps|kept|know|knows|known|last|lately|later|latter|latterly|least|less|lest|let|let's|like|liked|likely|little|look|looking|looks|ltd|mainly|many|may|maybe|me|mean|meanwhile|merely|might|more|moreover|most|mostly|much|must|my|myself|name|namely|nd|near|nearly|necessary|need|needs|neither|never|nevertheless|new|next|nine|no|nobody|non|none|noone|nor|normally|not|nothing|novel|now|nowhere|obviously|of|off|often|oh|ok|okay|old|on|once|one|ones|only|onto|or|other|others|otherwise|ought|our|ours|ourselves|out|outside|over|overall|own|particular|particularly|per|perhaps|php|placed|please|plus|possible|presumably|probably|provides|que|quite|qv|rather|rd|re|really|reasonably|regarding|regardless|regards|relatively|respectively|right|said|same|saw|say|saying|says|second|secondly|see|seeing|seem|seemed|seeming|seems|seen|self|selves|sensible|sent|serious|seriously|seven|several|shall|she|should|shouldn't|since|six|so|some|somebody|somehow|someone|something|sometime|sometimes|somewhat|somewhere|soon|sorry|specified|specify|specifying|still|sub|such|sup|sure|t's|take|taken|tell|tends|th|than|thank|thanks|thanx|that|that's|thats|the|their|theirs|them|themselves|then|thence|there|there's|thereafter|thereby|therefore|therein|theres|thereupon|these|they|they'd|they'll|they're|they've|think|third|this|thorough|thoroughly|those|though|three|through|throughout|thru|thus|to|together|too|took|toward|towards|tried|tries|truly|try|trying|twice|two|un|under|unfortunately|unless|unlikely|until|unto|up|upon|us|use|used|useful|uses|using|usually|value|various|very|via|viz|vs|want|wants|was|wasn't|way|we|we'd|we'll|we're|we've|welcome|well|went|were|weren't|what|what's|whatever|when|whence|whenever|where|where's|whereafter|whereas|whereby|wherein|whereupon|wherever|whether|which|while|whither|who|who's|whoever|whole|whom|whose|why|will|willing|wish|with|within|without|won't|wonder|would|would|wouldn't|yes|yet|you|you'd|you'll|you're|you've|your|yours|yourself|yourselves|zero|";


    e107::lan('creative_writer');
    
    $cwriter_temp = explode(".", e_QUERY);
    e107::getDB()->db_Select("cw_book", "*", "where cw_book_id=" . intval($cwriter_temp[2]), "nowhere", false);
    extract(e107::getDB()->db_Fetch());
    // create the desc meta tag
    $add_meta_description = $pref['cwriter_metad'] . ". " . CWRITER_74 . " " . e107::getParser()->toFORM($cw_book_title) . ". " . LAN_BOOK_035 . " " . e107::getParser()->toFORM($cw_book_summary);
    // create keyword meta tag
    $cwriter_kw = e107::getParser()->toFORM($cw_book_title) . "," . e107::getParser()->toFORM($cw_book_summary);
    // replace all spaces with ,
    $cwriter_kw = str_replace(" ", "," , $cwriter_kw);
    $cwriter_array=explode(",",$cwriter_kw);

    define("META_MERGE", true);
    define("META_DESCRIPTION", " " . $add_meta_description);

    define("META_KEYWORDS", " " . $add_meta_keywords);
}
  $path =  e_PLUGIN."creative_writer/";

   
if(USER_AREA) {
   e107::css('creative_writer', 'css/creative_writer.css' ); 
   
  if(defined("e_URL_LEGACY")) { echo "<link rel='canonical' href='".SITEURL.e_URL_LEGACY."' />\n"; } 
  else { echo "<link rel='canonical' href='".e_REQUEST_URL."'/>\n";  ; } 
 }   

// use multiselect only for frontend or admin 
if(USER_AREA AND  (strpos(e_REQUEST_URL, 'mybook') !== false) ) { 
 
  e107::css('creative_writer', 'css/multi-select.css' );  
  e107::css('creative_writer', 'css/custom-select.css' );  
  
  e107::js('creative_writer', 'js/jquery.quicksearch.js', 'jquery' );
  e107::js('footer', e_PLUGIN.'creative_writer/js/jquery.multi-select.js', 'jquery' );
  e107::js('footer', e_PLUGIN.'creative_writer/js/multi-select.custom.js', 'jquery' );  

} 

?>