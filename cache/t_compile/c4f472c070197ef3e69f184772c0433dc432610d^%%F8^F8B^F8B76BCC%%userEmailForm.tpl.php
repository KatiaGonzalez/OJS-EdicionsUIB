<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 09:29:10
         compiled from controllers/grid/settings/user/form/userEmailForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userEmailForm.tpl', 16, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userEmailForm.tpl', 17, false),array('function', 'fbvElement', 'controllers/grid/settings/user/form/userEmailForm.tpl', 22, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userEmailForm.tpl', 33, false),array('function', 'translate', 'controllers/grid/settings/user/form/userEmailForm.tpl', 35, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userEmailForm.tpl', 19, false),array('modifier', 'concat', 'controllers/grid/settings/user/form/userEmailForm.tpl', 26, false),array('block', 'fbvFormSection', 'controllers/grid/settings/user/form/userEmailForm.tpl', 21, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#sendEmailForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>
<form class="pkp_form" id="sendEmailForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'sendEmail'), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<input type="hidden" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "email.subject",'for' => 'subject','required' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'subject','value' => $this->_tpl_vars['subject'],'required' => 'true'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "email.to",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'user','value' => ((is_array($_tmp=$this->_tpl_vars['userFullName'])) ? $this->_run_mod_handler('concat', true, $_tmp, " <", $this->_tpl_vars['userEmail'], ">") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, " <", $this->_tpl_vars['userEmail'], ">")),'disabled' => 'true'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "email.body",'for' => 'message','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'message','value' => $this->_tpl_vars['message'],'rich' => true,'required' => 'true'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.sendEmail"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>