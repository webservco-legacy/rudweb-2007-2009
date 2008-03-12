<?php
/* ********** ********** ********** START EDITING  ********** ********** ********** */
$dbhost = 'localhost';
$dbuser = 'dbuser';
$dbpass = 'dbpass';
$dbname = 'dbname';

// SITE ROOT
//define("SITE_ROOT","http://86.123.192.163:1980/");
define("SITE_ROOT","http://underbeat.homelinux.net:1980/");
define("SITE_DIR","d:/home/devel/server/htdocs/");

// CSS
$defaultBgColor              = "#000000";
$defaultFontColor            = "#FFFFFF";
$defaultLinkColor            = "#FFFFFF";
$defaultLinkHColor           = "#FFFFFF";
/* ********** ********** ********** STOP EDITING  ********** ********** ********** */
// HEADER STUFF
define("SITE_TITLE","The Underground Beat - Personal Server - http://underbeat.homelinux.net:1980");
define("SITE_DESCRIPTION","&nbsp;&nbsp;&nbsp;The Underground Beat (underbeat for short) is a group created to promote various creative activities, be it music, software, art. etc.<BR>&nbsp;&nbsp;&nbsp;We get involved in starting, supporting and promoting different projects, like D.I.Y. music, fanzines, drawings, open-source software, and others.");
define("SITE_KEYWORDS","The Underground Beat, underbeat, underground, projects, software, music, D.I.Y., Oi MoRoi, oi moroi, moroi, xampp, xampp cs, slackware, linux, underground art, horror, horror dub, free mp3, download, upload, webdesign, web hsoting, GNU/GPL, open-source, open source, music collection, music, punk, ska, reggae, rocksteady, dub, horror, horror dub");

// INCLUDES
define("INC_DIR",SITE_DIR . "_files/");
define("INC_URL",SITE_ROOT . "_files/");

// PICTURES
define("PIC_DIR",INC_DIR . "graphics/");
define("PIC_URL",INC_URL . "graphics/");

define("PRIVATE_URL",SITE_ROOT."private/");

define("PUB_URL",SITE_ROOT."pub/");

define("FTP_URL",PUB_URL."ftp/");

define("MIRRORS_URL",PUB_URL."mirrors/");

define("TEMP_URL",PUB_URL."temp/");

define("WORK_URL",SITE_ROOT."work/");