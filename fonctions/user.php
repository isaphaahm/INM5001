<?php

/*
 * Une fonction pour tracker tous les utilisateurs qui sont intervenus dans une discussion de Wikipedia.
 * 
 * La fonction preg_match_all et une expression reguliere ($needle) permettent
 * de recuperes les noms a partir des balises [[User:]] de Wikipedia et les ajouter ensuite dans un array.
 * On utilise ensuite une fonction uniqueArray afin que les intervenants qui ont intervenu deux fois ou plus dans une
 * discussion n'apparaissent qu'une fois dans l'array retourne.
 * 
 * On peut soit prendre les noms telles qu'ecrits dans dans la balise [[User:NNNNNN|__]] en prenant $matches[1]
 * ou telles que signes dans les pages de discussion ([[User:____|NNNNNN]]) en prenant $matches2.
 * 
 * Auteur: Phannarat Horng
 */
 
$string1 = "[[User:Ahahaha|Ahahahaha]]efsfsrwere.4243gdf[[User:Ohahaha|Yeah]]";
$string2 = "\n\nWhere do people keep getting the idea of them being playable? Is it truth? or vandalism?[[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 18:04, 17 October 2008 (UTC)\n:Vandalism if you look at the copyright notices on the THQ pages, which confirms only the five series represented and no other series. [[User:Pikawil|Pikawil]] ([[User talk:Pikawil|talk]]) 04:41, 21 October 2008 (UTC)\n\nThen why the heck are people still murdering this page? The game's already out. [[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 22:21, 21 October 2008 (UTC)\n\nThen someone actually play and buy the game and stop this, ooh and an IP address keeps changing it if you look at the history\n[[User:KensouYagami|KensouYagami]] ([[User talk:KensouYagami|talk]]) 22 October 2008 (UTC)\n\nYa I'm getting it soon and i'll fix anything thats broken. [[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 02:44, 23 October 2008 (UTC)\n\nDo it soon because a annoing little twerpy IP address keeps changing it [[user:KensouYagami]]  &lt;span style=&quot;font-size: smaller;&quot; class=&quot;autosigned&quot;&gt;\u2014Preceding [[Wikipedia:Signatures|undated]] comment was added at 06:16, 25 October 2008 (UTC).&lt;/span&gt;&lt;!--Template:Undated--&gt; &lt;!--Autosigned by SineBot--&gt;\n\nWhy cant' the game have Bessie Higgenbottom?  &lt;span style=&quot;font-size: smaller;&quot; class=&quot;autosigned&quot;&gt;\u2014Preceding [[Wikipedia:Signatures|unsigned]] comment added by [[Special:Contributions/69.137.144.243|69.137.144.243]] ([[User talk:69.137.144.243|talk]]) 06:27, 25 October 2008 (UTC)&lt;/span&gt;&lt;!-- Template:UnsignedIP --&gt; &lt;!--Autosigned by SineBot--&gt;\n\nBecause it's out and she's not in it. Unfortuantely, I don't quite have it yet, so i can't finalize the page for awhile. [[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 06:40, 25 October 2008 (UTC)\n\nBesides, the Nick Jr. shows are better then the Mighty B. [[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 23:09, 26 October 2008 (UTC)\n\nThere should be more shows in this game like it was in Attack of the Toybots but all they did was replace the fairly odd parents with Invader Zim.  &lt;small&gt;&lt;span class=&quot;autosigned&quot;&gt;\u2014Preceding [[Wikipedia:Signatures|unsigned]] comment added by [[User:Takeacheer|Takeacheer]] ([[User talk:Takeacheer|talk]] \u2022 [[Special:Contributions/Takeacheer|contribs]]) 21:27, 28 October 2008 (UTC)&lt;/span&gt;&lt;/small&gt;&lt;!-- Template:Unsigned --&gt; &lt;!--Autosigned by SineBot--&gt;\n\nAaah maybe so HOWEVER, Zim was the perfct series to be in the game, and they did add villains who haven't been seen or mentioned before (Technus, Traloc and Beutiful Gorgeous) so theirs still veriaty. [[User:Majora999|Majora999]] ([[User talk:Majora999|talk]]) 02:48, 30 October 2008 (UTC)\n\n";
$string3 = "\n* In Upstate NY, the scoring is almost always doen with a 2 and a 3. the score is the number of pips shwoing. When the score is 5 or more the cards are turned into a V shape and then the score is 5 plus whatever is showing. The V is supposedly for the Roman numeral for 5. I have added this info to the article.[[User:Unklelemmy|Unklelemmy]] 20:42, 28 September 2005 (UTC)\n**In particularly superstitions upstate games, there is a variation of scoring called &quot;two on top,&quot; where the two card is never the bottom of the pair. This is done because the three would &quot;weigh down&quot; the two, stopping that teams score from increasing. --&lt;font style=&quot;color:#585768;&quot;&gt;[[User:Hd|horse]]&lt;/font&gt;&lt;font style=&quot;color:#A7A897;&quot;&gt;[[User_talk:Hd|dreamer]]&lt;/font&gt; 03:06, 27 April 2006 (UTC)\n* I'm from the Midwest (Wisconsin) and in terms of scorecards, we have always used a 6 and a 4 to score the game for each team. This, of course, eliminates the need to do any &quot;shaping&quot; (such as the 'V' mentioned above).  This is from personal experience, but the convention has remained consistent from family, to high school, and through college.\n** In Northern Michigan we just use two fives.   [[User:Vanis314|vanis314]] 05:26, 19 March 2007 (UTC)\n* I've never heard of giving a team 2 points for stealing the deal.  Someone caught stealing the deal simply gives up the cards to the proper dealer with no penalty.  Is this a regional variation?  Should it be marked as such?--[[User:Tsukata|TsuKata]] 06:44, 8 January 2006 (UTC)\n** [[User:Tsukata|TsuKata]]: When I learned to play euchre in central Illinois 20+ years ago, we didn't consider stealing the deal to be part of the game; it was either a sign of alcohol-induced memory loss, or a wilful desire to cheat.  In the former case, it helped to be more sober than one's opponents, so one could detect and correct a mistaken notion of the proper dealer.  In the latter case, cheating was ''not'' tolerated by many of the hardcore euchre players I've played with; the miscreant would surely have been ordered to leave the table if not worse.  I have never played euchre with anyone who considered stealing the deal as a routine part of the game which scored or lost points.\n** In a related vein, we scored a ''renege'' (failure to follow suit) as 2 points for the opponents, but if the reneger noticed his error before the next player threw a card down, he was allowed to withdraw the improperly played card, leave it face up on the table until it could be legally played (to remind everyone of the reneger's stupidity!), and replace with the correct card &amp;mdash; all with no penalty.  &amp;mdash; [[User:JonRoma|JonRoma]] 07:46, 8 January 2006 (UTC)\n*** When I played at college, we did the same thing. It lead to a few interesting discussions on reneging during an opponent's &quot;alone&quot; to net them 2 points instead of 4, but the issue never actually came up during game play. We never accurately decided on how such a situation played out. We allowed new players to take a card back, but anyone else we held to the renege; if they pointed their mistake out before the next card was played they still gave up 2 points. [[User:Ialsoagree|ialsoagree]] ([[User talk:Ialsoagree|talk]]) 20:59, 23 November 2009 (UTC)\n**Related to stealing the deal, I've never heard of it relating at all to scoring. For reference, I play upstate. The way we play is when the kitty is flipped, the deal is official. A misdeal may be recalled and redealt before the kitty is flipped, and once the kitty is flipped on a stolen deal, the stealing dealer keeps the deal. If the proper dealer notices the error before this occurs, they claim the deal back. Maybe it's just esoteric, but that's how we play.--&lt;font style=&quot;color:#585768;&quot;&gt;[[User:Hd|horse]]&lt;/font&gt;&lt;font style=&quot;color:#A7A897;&quot;&gt;[[User_talk:Hd|dreamer]]&lt;/font&gt; 03:06, 27 April 2006 (UTC)\n\n";
$needle = '/\[\[User:(.+?)\|(.+?)\]\]/u';

echo "<h3>Soit le nom dans la balise [[User:NNNNNNNN]] telle que vue dans la source d'une page:</h3>";
preg_match_all($needle, $string1, $matches);
$unique = uniqueArray($matches[1]);
var_dump($unique);

echo "<h3>Soit la signature telle qu'affiche sur la page de discussion:</h3>";
preg_match_all($needle, $string1, $matches);
$unique = uniqueArray($matches[2]);
var_dump($unique);

function uniqueArray($array)
{
	array_walk($array,
		create_function('&$value,$key', '$value = json_encode($value);')
	);
	$array = array_unique($array);
	array_walk($array,
		create_function('&$value,$key', '$value = json_decode($value, true);')
	);
	$array = array_unique_ignore_keys($array);
	return $array;
}

function array_unique_ignore_keys(&$array, $sort_flags = SORT_STRING) {
    return array_values(array_unique($array, $sort_flags));
}
?>
