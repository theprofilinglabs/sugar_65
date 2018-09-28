<?php /* Smarty version 2.6.26, created on 2015-05-26 14:07:21
         compiled from ferie_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sqldate2userdate', 'ferie_form.tpl', 6, false),array('modifier', 'escape', 'ferie_form.tpl', 15, false),)), $this); ?>
<form class="form-horizontal" method="POST" action="" target="_blank" onsubmit="return false;">
	<div class="control-group">
		<label class="control-label"><?php echo $this->_config[0]['vars']['feries_date']; ?>
 :</label>
		<div class="controls">
			<input type="text" id="date_ferie" size="11" maxlength="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ferie']['date_ferie'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
" style="width:80px" class="datepicker" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $this->_config[0]['vars']['feries_libelle']; ?>
 :</label>
		<div class="controls">
			<input id="libelle" size="30" maxlength="50" type="text" value="<?php echo $this->_tpl_vars['ferie']['libelle']; ?>
" />
		</div>
	</div>
	<input type="button" class="btn btn-primary" value="<?php echo ((is_array($_tmp=$this->_config[0]['vars']['submit'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" style="margin-left: 400px;" onclick="xajax_submitFormFerie($('date_ferie').value, $('libelle').value);"/>
</form>