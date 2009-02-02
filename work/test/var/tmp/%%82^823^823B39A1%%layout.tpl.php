<?php /* Smarty version 2.6.21, created on 2009-02-01 13:24:24
         compiled from layout.tpl */ ?>
<?php if (@_APP_CFG_SESSIONS): ?>
<?php $this->assign('app_pre', @_APP_PRE); ?>
<?php $this->assign('usr_lang_suf', '_usr_lang'); ?>
<?php $this->assign('app_lang', ($this->_tpl_vars['app_pre']).($this->_tpl_vars['usr_lang_suf'])); ?>
<?php $this->assign('usr_lang', $_SESSION[$this->_tpl_vars['app_lang']]); ?>
<?php $this->assign('app_skin_suf', '_skin_url'); ?>
<?php $this->assign('app_skin_ses', ($this->_tpl_vars['app_pre']).($this->_tpl_vars['app_skin_suf'])); ?>
<?php $this->assign('app_skin_url', $_SESSION[$this->_tpl_vars['app_skin_ses']]); ?>
<?php $this->assign('app_tpl', @_APP_TPL); ?>
<?php else: ?>
<?php $this->assign('app_skin_url', @_APP_SKIN_URL); ?>
<?php $this->assign('usr_lang', @_APP_LANG); ?>
<?php endif; ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8" standalone="no"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['usr_lang']; ?>
" lang="<?php echo $this->_tpl_vars['usr_lang']; ?>
">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['usr_lang']; ?>
" />
  <link rel="icon" type="image/ico" href="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/favicon.ico" />
  <link rel="shortcut icon" type="image/ico" href="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/favicon.ico" />
  <title><?php echo $this->_tpl_vars['title']; ?>
 .:. <?php echo @_APP_NAME; ?>
</title>
  <meta name="title" content="<?php echo @_APP_NAME; ?>
 <?php echo $this->_tpl_vars['title']; ?>
" />
  <meta name="subject" content="<?php echo @_APP_NAME; ?>
 <?php echo $this->_tpl_vars['title']; ?>
" />
  <meta name="description" content="<?php echo @_APP_NAME; ?>
 <?php echo $this->_tpl_vars['title']; ?>
" />
  <meta name="keywords" content="<?php echo @_APP_NAME; ?>
, <?php echo $this->_tpl_vars['title']; ?>
" />
  <meta name="copyright" content="<?php echo @_APP_AUTH; ?>
" />
  <meta name="designer" content="<?php echo @_APP_AUTH; ?>
" />
  <meta name="publisher" content="<?php echo @_APP_AUTH; ?>
" />
  <meta name="author" content="<?php echo @_APP_AUTH; ?>
" />
  <meta name="rating" content="General" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="Index, Follow" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="stylesheet" type="text/css" charset="utf-8" href="<?php echo $this->_tpl_vars['app_skin_url']; ?>
styles/style.css" />
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
scripts/script.js"></script>
</head>
<body>
<div id="layout">
  <div id="container">
    <div id="left">
      <div id="left1">
        <div id="sigla">
          <a href="<?php echo @_APP_WWW; ?>
"><img src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/mc_sigla.png" alt="<?php echo @_APP_NAME; ?>
" longdesc="<?php echo @_APP_NAME; ?>
" /></a>
        </div>
        <div id="left_blank1">&#160;</div>
        <div id="menu"><?php echo $this->_tpl_vars['menu']; ?>
</div>
      </div>
      <div id="left2">
        <div id="logo">
          <a href="<?php echo @_APP_WWW; ?>
"><img src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/mc_logo.png" alt="<?php echo @_APP_NAME; ?>
" longdesc="<?php echo @_APP_NAME; ?>
" /></a>
        </div>
        <div id="left_blank2">&#160;</div>
        <div id="page_title"><h1><?php echo $this->_tpl_vars['title']; ?>
</h1></div>
      </div>
    </div>
    <div id="center">
      <div id="redline">&#160;</div>
      <div id="page_content"><?php echo $this->_tpl_vars['content']; ?>
</div>
      <script type="text/javascript">var div_scroll1 = new TextScroll('div_scroll1', 'page_content', 'scroll_up', 'scroll_down');</script>
    </div>
    <div id="footer"><?php echo $this->_tpl_vars['footer']; ?>
</div>
  </div>
</div>
</body>
</html>