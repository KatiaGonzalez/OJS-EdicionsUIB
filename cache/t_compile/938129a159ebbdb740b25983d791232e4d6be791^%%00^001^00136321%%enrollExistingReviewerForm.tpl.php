<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:13:59
         compiled from controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 17, false),array('function', 'csrf', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 24, false),array('function', 'translate', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 33, false),array('function', 'fbvElement', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 36, false),array('function', 'fbvFormButtons', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 47, false),array('modifier', 'json_encode', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 17, false),array('modifier', 'assign', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 39, false),array('block', 'fbvFormSection', 'controllers/grid/users/reviewer/form/enrollExistingReviewerForm.tpl', 35, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#enrollExistingReviewerForm').pkpHandler('$.pkp.controllers.grid.users.reviewer.form.AddReviewerFormHandler',
			{
				templateUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => 'grid.users.reviewer.ReviewerGridHandler','op' => 'fetchTemplateBody','stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<form class="pkp_form" id="enrollExistingReviewerForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'enrollReviewer'), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'enrollExistingReviewerFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="action_links">
		<?php $_from = $this->_tpl_vars['reviewerActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => 'enrollExistingReviewerForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.review.enrollReviewer"), $this);?>
</h3>

	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'userGroupId','id' => 'userGroupId','from' => $this->_tpl_vars['userGroups'],'translate' => false,'label' => "editor.review.userGroupSelect",'required' => 'true'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'getUsersNotAssignedAsReviewers','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'autocompleteUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'autocompleteUrl'));?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'autocomplete','disableSync' => 'true','required' => 'true','autocompleteUrl' => $this->_tpl_vars['autocompleteUrl'],'id' => 'userId','label' => "manager.reviewerSearch.searchByName.short",'value' => $this->_tpl_vars['userNameString']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/users/reviewer/form/reviewerFormFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submission.addReviewer"), $this);?>

</form>