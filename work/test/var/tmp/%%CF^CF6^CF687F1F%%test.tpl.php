<?php /* Smarty version 2.6.21, created on 2009-02-09 19:45:35
         compiled from content/test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'var_export', 'content/test.tpl', 3, false),array('modifier', 'nl2br', 'content/test.tpl', 3, false),)), $this); ?>
<pre>
<?php echo ((is_array($_tmp=var_export($this->_tpl_vars['cnt'], true))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</pre>