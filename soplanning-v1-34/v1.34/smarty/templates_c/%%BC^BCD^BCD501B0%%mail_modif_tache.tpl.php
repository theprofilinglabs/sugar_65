<?php /* Smarty version 2.6.26, created on 2017-09-20 11:50:41
         compiled from mail_modif_tache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sqldate2userdate', 'mail_modif_tache.tpl', 5, false),array('modifier', 'sqltime2usertime', 'mail_modif_tache.tpl', 6, false),)), $this); ?>

<?php echo $this->_config[0]['vars']['mail_modifTache_corps']; ?>


<?php echo $this->_config[0]['vars']['winPeriode_projet']; ?>
 : <?php echo $this->_tpl_vars['projet']['nom']; ?>
 (<?php echo $this->_tpl_vars['projet']['projet_id']; ?>
)
<?php echo $this->_config[0]['vars']['winPeriode_debut']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['date_debut'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
 
<?php if ($this->_tpl_vars['periode']['date_fin'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_fin']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['date_fin'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['mail_tacheDuree']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['periode']['duree'])) ? $this->_run_mod_handler('sqltime2usertime', true, $_tmp) : sqltime2usertime($_tmp)); ?>
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
 
--------------------------------------------------------------------------------------------- 
<?php echo $this->_config[0]['vars']['winPeriode_projet']; ?>
 : <?php echo $this->_tpl_vars['oldProjet']['nom']; ?>
 (<?php echo $this->_tpl_vars['oldProjet']['projet_id']; ?>
)
<?php echo $this->_config[0]['vars']['winPeriode_debut']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['oldPeriode']['date_debut'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
 
<?php if ($this->_tpl_vars['oldPeriode']['date_fin'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_fin']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['oldPeriode']['date_fin'])) ? $this->_run_mod_handler('sqldate2userdate', true, $_tmp) : sqldate2userdate($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['mail_tacheDuree']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['oldPeriode']['duree'])) ? $this->_run_mod_handler('sqltime2usertime', true, $_tmp) : sqltime2usertime($_tmp)); ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['oldPeriode']['titre'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_titre']; ?>
 : <?php echo $this->_tpl_vars['oldPeriode']['titre']; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['oldPeriode']['notes'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_commentaires']; ?>
 : <?php echo $this->_tpl_vars['oldPeriode']['notes']; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['oldPeriode']['lien'] != ""): ?><?php echo $this->_config[0]['vars']['winPeriode_lien']; ?>
 : <?php echo $this->_tpl_vars['oldPeriode']['lien']; ?>
<?php endif; ?> 
<?php if (@CONFIG_SOPLANNING_URL): ?><?php echo @CONFIG_SOPLANNING_URL; ?>
<?php endif; ?> 