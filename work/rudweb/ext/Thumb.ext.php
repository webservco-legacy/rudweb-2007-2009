<?php
/**
* Thumb
*
* <I> ./ext/Thumb.ext.php</I>
* <BR>Create image thumbnails
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    14:55 2009-01-24
* @since      14:06 2009-01-19
* @access     public
* @package    RudWEb
* @subpackage Extensions
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

class rw_Ext_Thumb extends rw_Ext_global implements rw_iExt
{
  public $cacheDir;
  public $maxSize = '80';
  /**
  * Constructor
  * Set extension information and call parent constructor
  *
  */
  function __construct()
  {
   $about['name'] = 'Thumb';
   $about['desc'] = 'Create image thumbnails.';
   $about['ver']  = '14:54 2009-01-24';
   $about['auth'] = 'Radu Maier';
   $about['web']  = 'http://www.rudisoft.net';
   $about['mail'] = 'rudisoft@rudisoft.net';
   $about['deps'] = array();
   $about['deps'][]  = 'dep1';
   $about['deps'][]  = 'dep2';
   parent::__construct($about);
  }
  /**
  * Main extension functionality
  * 
  * @return mixed result
  */
  function thumb($img=NULL)
  {
    if($img == NULL) {trigger_error('Image file not specified', E_USER_ERROR); exit;}
    else if(!is_file($img)) {trigger_error('Image file not found', E_USER_ERROR); exit;}
    
    $newimage_name= md5_file($img);
    $cached = $this->cacheDir.$newimage_name;
    if(!is_readable($cached)) {
      // start buffering
      ob_start();
      // main functionality
      list($old_width, $old_height, $old_type) = getimagesize($img);
      switch ($old_type) {
        case "1": {$new_image = imagecreatefromgif($img) ; break;}
        case "2": {$new_image = imagecreatefromjpeg($img); break;}
        case "3": {$new_image = imagecreatefrompng($img); break;}
        default: {trigger_error('Image type not supported', E_USER_ERROR); break;}
      }
      // resize math
      if ($old_width > $old_height) { // landscape
        $new_width  = $this->maxSize;
        $new_height = ($old_height * $this->maxSize) / $old_width;
      }
      else if ($old_width < $old_height) { // portrait
        $new_width  = ($old_width * $this->maxSize) / $old_height;
        $new_height = $this->maxSize;
      }
      else if ($old_width == $old_height) { //square
        $new_width  = $this->maxSize;
        $new_height = $this->maxSize;
      }
      $newsizeimage = imagecreatetruecolor($new_width, $new_height);
      imagecopyresampled($newsizeimage, $new_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
      //header("Content-type: image/png");
      imagejpeg($newsizeimage);
      
      // capture output to string
      $image = ob_get_contents();
      // end capture
      ob_end_clean();
      
      imagedestroy($newsizeimage);
      
      $fh = fopen($cached, "wb");
      fwrite($fh, $image);
      fclose($fh);
    }
    return $newimage_name;
  }
  /**
  * Set cache directory
  * 
  * @return mixed result
  */
  public function set_cacheDir($cacheDir)
  {
    $this->cacheDir = $cacheDir;
  }
  /**
  * Set max thumbnail size
  * 
  * @return mixed result
  */
  public function set_maxSize($maxSize)
  {
    $this->maxSize = $maxSize;
  }
}
?>