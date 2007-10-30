<?php
/*
nfo.php
13:34 28.10.2007
*/


[*] to avoid strange things happening in the menus please note:
--- when more menu links point to the same page, the _lowest_ menu level and _greatest_ menu id from the _first_ menu group counts!

[*] user pictures
--- pictures ignore current language. the same picture will be displayed for any language

[*] sessions
--- a session is not destroyed until the user closes the page even if she/he is not logged in [good for a shopping cart :-)]

[*] keywords, description
--- taken from db content. if empty, taken from config

[*] how to make a local user level restricted link:
restrictedLocalLink("default", "Link Title", "index.php", $_SESSION[_UBWS_PRE.'usr_level'], 0, $ubws_lnWinStatOver, $ubws_lnWinStatOut, "_self");

[*] div bug
--- to fix a div bug i haven't had time to study, the height attribute for content,pictures,featured and copyright divs is ignored.
?>