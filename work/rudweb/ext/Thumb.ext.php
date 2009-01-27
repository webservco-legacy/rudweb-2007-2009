<?php
/**
* Thumb
*
* <I> ./ext/Thumb.ext.php</I>
* <BR>Create image thumbnails.
* <BR>Reads an image and creates a thumbnail
* <BR>in the specified directory.
* <BR>If the thumbnail already exists,
* <BR>it doesn't create it again.
* <BR>Returns thumbnail name.
* <BR>This class doesn't output the actual thumbnail.
* <BR>Input formats: gif, jpeg, png.
* <BR>Output format: jpeg.
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:45 2009-01-27
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
    /**
    * Extension info
    */
    $about['name'] = 'Thumb';
    $about['desc'] = 'Create image thumbnails.';
    $about['ver']  = '15:45 2009-01-27';
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
    /**
    * No image specified
    */
    if($img == NULL) {trigger_error('Image file not specified', E_USER_ERROR); exit;}
    /**
    * File not found
    */
    else if(!is_file($img)) {trigger_error('Image file not found', E_USER_ERROR); exit;}
    /**
    * Set new image name
    */
    $newimage_name= md5_file($img);
    /**
    * Set new image full path
    */
    $cached = $this->cacheDir.$newimage_name;
    /**
    * If thumbnail doesn't already exist, attempt to create it.
    */
    if(!is_readable($cached)) {
      /**
      * Start output buffering
      */
      ob_start();
      /**
      * Get original image info
      */
      list($old_width, $old_height, $old_type) = getimagesize($img);
      /**
      * Create raw image from original source
      */
      switch ($old_type) {
        case "1": {$new_image = imagecreatefromgif($img) ; break;}
        case "2": {$new_image = imagecreatefromjpeg($img); break;}
        case "3": {$new_image = imagecreatefrompng($img); break;}
        default: {trigger_error('Image type not supported', E_USER_ERROR); break;}
      }
      /**
      * Resize functionality
      */
      if ($old_width > $old_height) {
        /**
        * Landscape image
        */
        $new_width  = $this->maxSize;
        $new_height = ($old_height * $this->maxSize) / $old_width;
      }
      else if ($old_width < $old_height) {
        /**
        * Portrait image
        */
        $new_width  = ($old_width * $this->maxSize) / $old_height;
        $new_height = $this->maxSize;
      }
      else if ($old_width == $old_height) {
        /**
        * Square image
        */
        $new_width  = $this->maxSize;
        $new_height = $this->maxSize;
      }
      /**
      * Create a new blank image with the new dimensions
      */
      $newsizeimage = imagecreatetruecolor($new_width, $new_height);
      /**
      * Copy raw image to new resized one
      */
      imagecopyresampled($newsizeimage, $new_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
      /**
      * Output image.
      * We're not really outputting it as we are in a buffer.
      * If you want to output it, remove the buffer lines and put this on the next line:
      * header("Content-type: image/jpeg");
      */
      imagejpeg($newsizeimage);
      /**
      * Capture output to string
      */
      $image = ob_get_contents();
      /**
      * End capture
      */
      ob_end_clean();
      /**
      * Remove created image from memory (we still have it in the $image string)
      */
      imagedestroy($newsizeimage);
      /**
      * Create new thumbnail file, write the image from the string, and close the file.
      * "w" = open for writing only, place the file pointer at the beginning of the file, truncate the file to zero length,
      * try to create the file if not exist.
      * "b" = force binary mode
      */
      $fh = fopen($cached, "wb");
      fwrite($fh, $image);
      fclose($fh);
    }
    /**
    * If everything is ok, return the thumbnail name.
    */
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