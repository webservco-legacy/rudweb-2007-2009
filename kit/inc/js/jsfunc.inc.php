<?php
/*
./inc/js/jsfunc.inc.php
16:28 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../../lib/404.php';}
?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
window.defaultStatus = "<?php echo $rsweb_ln['WinStatDef']; ?>";
var fileLoadingImage = "<?php echo _RSWEB_THEME_URL . $_SESSION[_RSWEB_PRE.'usr_theme_dir']?>/graphics/loading.gif";		
var fileBottomNavCloseImage = "<?php echo _RSWEB_THEME_URL . $_SESSION[_RSWEB_PRE.'usr_theme_dir']?>/graphics/close.gif";
function toggleLayer( whichLayer ) {
  var elem, vis;
  if( document.getElementById ) // this is the way the standards work
    elem = document.getElementById( whichLayer );
  else if( document.all ) // this is the way old msie versions work
      elem = document.all[whichLayer];
  else if( document.layers ) // this is the way nn4 works
    elem = document.layers[whichLayer];
  vis = elem.style;
  // if the style.display value is blank we try to figure it out here
  if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)
    vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';
  vis.display = (vis.display==''||vis.display=='block')?'none':'block';
}
function copyvalue(element_from,element_to) {
  element_to.value = element_from.value
}
/*
http://image-opacity.4wsearch.com/
the JS code
*/
function bevisible(cur,which)	{
	if(document.getElementById) {
		if (which==0) {
			if(document.all) {
				cur.filters.alpha.opacity=100
      }
			else {
				cur.style.setProperty("-moz-opacity", 1, "");
      }
		}
		else {
			if(document.all) {
				cur.filters.alpha.opacity=50
      }  
			else {
				cur.style.setProperty("-moz-opacity", .5, "");
      }
		}
	}
}
</SCRIPT>