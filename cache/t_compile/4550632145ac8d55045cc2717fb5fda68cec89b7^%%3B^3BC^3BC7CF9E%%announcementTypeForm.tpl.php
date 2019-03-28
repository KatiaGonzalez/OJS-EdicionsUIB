<?php /* Smarty version 2.6.25-dev, created on 2019-03-18 14:42:18
         compiled from controllers/grid/announcements/form/announcementTypeForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 18, false),array('function', 'csrf', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 19, false),array('function', 'fbvElement', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 26, false),array('function', 'translate', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 29, false),array('function', 'fbvFormButtons', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 30, false),array('block', 'fbvFormArea', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 21, false),array('block', 'fbvFormSection', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 25, false),array('modifier', 'escape', 'controllers/grid/announcements/form/announcementTypeForm.tpl', 23, false),)), $this); ?>

<script>
	$(function() {
		// Attach the form handler.
		$('#announcementTypeForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="announcementTypeForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.announcements.AnnouncementTypeGridHandler",'op' => 'updateAnnouncementType'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'announcementTypeFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'announcementTypeInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['typeId']): ?>
			<input type="hidden" name="announcementTypeId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.announcementTypes.form.typeName",'for' => 'title','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','id' => 'name','value' => $this->_tpl_vars['name'],'maxlength' => '255','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'announcementTypeFormSubmit','submitText' => "common.save"), $this);?>

</form>