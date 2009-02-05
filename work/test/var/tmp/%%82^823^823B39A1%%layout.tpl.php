<?php /* Smarty version 2.6.21, created on 2009-02-05 13:56:26
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
    <div id="header">
      <div id="hdr1">
        <div id="logo">
          <a href="<?php echo @_APP_WWW; ?>
"><img src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/dasoft-logo-winter.gif" alt="logo" longdesc="logo" /></a>
        </div>
        <?php echo $this->_tpl_vars['menu']; ?>

      </div>
      <div id="hdr2">
        <img src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/hdr2.gif" alt="logo" longdesc="logo" />
        <br />
        <br />
        <br />
        <br />
        <br />
        <span class="normal">&#160;&#160;&#160;&#160;&#160;&#160;</span>
        <a class="menu2" href="<?php echo @_APP_WWW; ?>
">HOME</a><span class="normal">&#160;&#160;&#160;&#160;</span>
        <a class="menu2" href="<?php echo @_APP_URL; ?>
page/promotii">PROMO&#354;II</a><span class="normal">&#160;&#160;&#160;&#160;</span>
        <a class="menu2" href="<?php echo @_APP_URL; ?>
page/contact">CONTACT</a>
      </div>
    </div>
    <div id="left">
      &#160;
    </div>
    <div id="center">
      <div id="page_title">
      <h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
      </div>
      <div id="page_scroll">
        <script type="text/javascript">
          document.write('<img id="scroll_up" src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/scroll_up.png" alt="scroll_up" longdesc="scroll_up" />');
          document.write('<img id="scroll_down" src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/scroll_down.png" alt="scroll_down" longdesc="scroll_down" />');
        </script>
        <noscript>&#160;</noscript>
      </div>
      <div id="page_content"><?php echo $this->_tpl_vars['content']; ?>
</div>
      <script type="text/javascript">var div_scroll1 = new TextScroll('div_scroll1', 'page_content', 'scroll_up', 'scroll_down');</script>
    </div>
    <div id="right">
      <div id="right_cnt">
        &#160;
      </div>
      <div id="cpy">
      Copyright 1995 - 2009 DaSoft SRL.
      <br />
      Toate drepturile rezervate.
      </div>
    </div>
    <div id="footer">
     <?php echo $this->_tpl_vars['footer']; ?>

    </div>
  </div>
</div>
</body>
</html>