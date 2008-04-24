<?php
/*
./inc/js/jsfunc.inc.php
14:07 2008-04-22
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}
?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
window.defaultStatus = "<?php echo $rudweb_ln['WinStatDef']; ?>";
var fileLoadingImage = "<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/loading.gif";		
var fileBottomNavCloseImage = "<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/close.gif";
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
				cur.filters.alpha.opacity=80
      }  
			else {
				cur.style.setProperty("-moz-opacity", .8, "");
      }
		}
	}
}
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
function addTag(newvalue,element_to) {
  element_to.value = element_to.value + newvalue + ', ';
}
</SCRIPT>