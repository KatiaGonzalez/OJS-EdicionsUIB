<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:49:19
         compiled from plugins/plugins/pubIds/doi/pubIds/doi:templates/doiAssignCheckBox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'plugins/plugins/pubIds/doi/pubIds/doi:templates/doiAssignCheckBox.tpl', 12, false),array('function', 'fbvElement', 'plugins/plugins/pubIds/doi/pubIds/doi:templates/doiAssignCheckBox.tpl', 15, false),array('modifier', 'cat', 'plugins/plugins/pubIds/doi/pubIds/doi:templates/doiAssignCheckBox.tpl', 12, false),array('block', 'fbvFormSection', 'plugins/plugins/pubIds/doi/pubIds/doi:templates/doiAssignCheckBox.tpl', 14, false),)), $this); ?>

<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.pubIds.doi.editor.doiObjectType")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pubObjectType']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pubObjectType']))), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('translatedObjectType', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.editor.assignDoi",'pubId' => $this->_tpl_vars['pubId'],'pubObjectType' => $this->_tpl_vars['translatedObjectType']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('assignCheckboxLabel', ob_get_contents());ob_end_clean(); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'assignDoi','checked' => 'true','value' => '1','label' => $this->_tpl_vars['assignCheckboxLabel'],'translate' => false,'disabled' => $this->_tpl_vars['disabled']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>