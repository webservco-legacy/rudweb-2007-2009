<?php /* Smarty version 2.6.21, created on 2009-02-09 18:27:28
         compiled from content/contact.tpl */ ?>
<?php if (@_APP_CFG_SESSIONS): ?>
<?php $this->assign('app_pre', @_APP_PRE); ?>
<?php $this->assign('app_skin_suf', '_skin_url'); ?>
<?php $this->assign('app_skin_ses', ($this->_tpl_vars['app_pre']).($this->_tpl_vars['app_skin_suf'])); ?>
<?php $this->assign('app_skin_url', $_SESSION[$this->_tpl_vars['app_skin_ses']]); ?>
<?php else: ?>
<?php $this->assign('app_skin_url', @_APP_SKIN_URL); ?>
<?php endif; ?>

<h2>Program de lucru:</h2>
<div class="contact_1">Dep. Vanzari / Call Center:</div>
<div class="contact_2">Luni - Vineri, 09:00 - 17:00</div>
<div class="contact_3">&#160;</div>
<div class="contact_1">Dep. Tehnic / Garantii:</div>
<div class="contact_2">Luni - Vineri, 09:00 - 17:00</div>
<div class="contact_3">&#160;</div>
<div class="contact_1">Livrari la sediul Dasoft:</div>
<div class="contact_2">Luni - Vineri, 09:00 - 17:00</div>
<div class="contact_3">&#160;</div>
<div class="contact_1">Copy Center / Internet Cafe:</div>
<div class="contact_2">Luni - Vineri, 09:00 - 17:00</div>
<div class="contact_3">&#160;</div>
<p>&#160;</p>

<h2>Detalii contact:</h2>
<div class="contact_1">Adresa contact:</div>
<div class="contact_2">Bulevardul Nicolae Balcescu nr. 1, bl. 1 (in parcarea de taxiuri de la 24 de trepte)</div>
<div class="contact_3">&#160;</div>

<div class="contact_1">Telefon Vanzari:</div>
<div class="contact_2">0350 404 810</div>
<div class="contact_3">&#160;</div>

<div class="contact_1">Telefon Service/Tehnic:</div>
<div class="contact_2">0350 404 810</div>
<div class="contact_3">&#160;</div>

<div class="contact_1">Fax:</div>
<div class="contact_2">0250 733 960</div>
<div class="contact_3">&#160;</div>

<div class="contact_1">E-Mail</div>
<div class="contact_2">dasoft@dasoft.ro</div>
<div class="contact_3">&#160;</div>
<p>&#160;</p>
    
<h2>Locatie</h2>
<h4>Magazin IT&amp;C / Copy Center / Internet Cafe / Punct Service:</h4>
<a href="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/harta_dasoft.jpg" target="_blank"><img src="<?php echo $this->_tpl_vars['app_skin_url']; ?>
graphics/harta_dasoft_mic.jpg" alt="Locatie DaSoft" longdesc="Locatie DaSoft" /></a>