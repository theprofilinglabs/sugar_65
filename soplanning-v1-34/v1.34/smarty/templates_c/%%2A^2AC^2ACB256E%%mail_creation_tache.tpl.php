<?php /* Smarty version 2.6.26, created on 2017-09-20 11:51:28
         compiled from mail_creation_tache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sqldate2userdate', 'mail_creation_tache.tpl', 5, false),array('modifier', 'sqltime2usertime', 'mail_creation_tache.tpl', 7, false),array('modifier', 'cat', 'mail_creation_tache.tpl', 8, false),)), $this); ?>

<?php echo $this->_config[0]['vars']['mail_creationTache_corps']; ?>


<?php echo $this->_config[0]['vars']['winPeriode_projet']; ?>
 : <?php echo $this->_tpl_vars['projet']['nom']; ?>
 (<?php echo $this->_tpl_vars['projet']['projet_id']; ?>
) 
<?php echo $this->_config[0]['vars']['winPeriode_debut']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['date_debut'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
 
<?php echo $this->_config[0]['vars']['tab_nomCreateur']; ?>
 : <?php echo $this->_tpl_vars['createur']['nom']; ?>

<?php if ($this->_tpl_vars['periode']['date_fin'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_fin']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['date_fin'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['mail_tacheDuree']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['duree'])) ? $this->_run_mod_handler('sqltime2usertime', true, $_tmp) : sqltime2usertime($_tmp)); ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['repetition'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_repeter']; ?>
 : <?php $this->assign('repetTemp', ((is_array($_tmp='winPeriode_repeter_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['repetition']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['repetition']))); ?><?php echo $this->_config[0]['vars'][$this->_tpl_vars['repetTemp']]; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['periode']['titre'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_titre']; ?>
 : <?php echo $this->_tpl_vars['periode']['titre']; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['periode']['notes'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_commentaires']; ?>
 : <?php echo $this->_tpl_vars['periode']['notes']; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['periode']['lien'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_lien']; ?>
 : <?php echo $this->_tpl_vars['periode']['lien']; ?>
<?php endif; ?> 
<?php if (@CONFIG_SOPLANNING_URL): ?><?php echo @CONFIG_SOPLANNING_URL; ?>
<?php endif; ?> 