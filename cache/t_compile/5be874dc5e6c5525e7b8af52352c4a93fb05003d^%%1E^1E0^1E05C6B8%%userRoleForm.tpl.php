<?php /* Smarty version 2.6.25-dev, created on 2019-03-01 09:54:39
         compiled from controllers/grid/settings/user/form/userRoleForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userRoleForm.tpl', 16, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userRoleForm.tpl', 17, false),array('function', 'translate', 'controllers/grid/settings/user/form/userRoleForm.tpl', 21, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userRoleForm.tpl', 34, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userRoleForm.tpl', 23, false),array('modifier', 'uniqid', 'controllers/grid/settings/user/form/userRoleForm.tpl', 26, false),array('block', 'fbvFormSection', 'controllers/grid/settings/user/form/userRoleForm.tpl', 25, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userRoleForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>
<form class="pkp_form" id="userRoleForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'updateUserRoles'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'userRoleFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.step2",'userFullName' => $this->_tpl_vars['userFullName']), $this);?>
</h3>

		<input type="hidden" id="userId" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->assign('uuid', ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
			<div id="userGroups-<?php echo $this->_tpl_vars['uuid']; ?>
">
				<script type="text/javascript">
					pkp.registry.init('userGroups-<?php echo $this->_tpl_vars['uuid']; ?>
', 'SelectListPanel', <?php echo $this->_tpl_vars['selectUserListData']; ?>
);
				</script>
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>