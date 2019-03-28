<?php /* Smarty version 2.6.25-dev, created on 2019-02-28 10:36:12
         compiled from core:reviewer/review/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:reviewer/review/step3.tpl', 19, false),array('function', 'csrf', 'core:reviewer/review/step3.tpl', 20, false),array('function', 'load_url_in_div', 'core:reviewer/review/step3.tpl', 26, false),array('function', 'fbvElement', 'core:reviewer/review/step3.tpl', 41, false),array('function', 'fbvFormButtons', 'core:reviewer/review/step3.tpl', 61, false),array('function', 'translate', 'core:reviewer/review/step3.tpl', 64, false),array('block', 'fbvFormArea', 'core:reviewer/review/step3.tpl', 23, false),array('block', 'fbvFormSection', 'core:reviewer/review/step3.tpl', 29, false),array('modifier', 'assign', 'core:reviewer/review/step3.tpl', 25, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#reviewStep3Form').pkpHandler(
			'$.pkp.controllers.form.reviewer.ReviewerReviewStep3FormHandler'
		);
	});
</script>

<form class="pkp_form" id="reviewStep3Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submission']->getId(),'step' => '3'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewStep3')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.ReviewerReviewFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['reviewAssignment']->getStageId(),'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'reviewAssignmentId' => $this->_tpl_vars['reviewAssignment']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewFilesStep3','url' => $this->_tpl_vars['reviewFilesGridUrl']), $this);?>


	<?php if ($this->_tpl_vars['viewGuidelinesAction']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "reviewer.submission.reviewerGuidelines")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<div id="viewGuidelines">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['viewGuidelinesAction'],'contextId' => 'viewGuidelines')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.review",'description' => "reviewer.submission.reviewDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['reviewForm']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reviewer/review/reviewFormResponse.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'comments','name' => 'comments','value' => $this->_tpl_vars['comment'],'readonly' => $this->_tpl_vars['reviewIsComplete'],'label' => "submission.comments.canShareWithAuthor",'rich' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'commentsPrivate','name' => 'commentsPrivate','value' => $this->_tpl_vars['commentPrivate'],'readonly' => $this->_tpl_vars['reviewIsComplete'],'label' => "submission.comments.cannotShareWithAuthor",'rich' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "common.upload",'description' => "reviewer.submission.uploadDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.ReviewerReviewAttachmentsGridHandler",'op' => 'fetchGrid','assocType' => @ASSOC_TYPE_REVIEW_ASSIGNMENT,'assocId' => $this->_tpl_vars['submission']->getReviewId(),'submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['submission']->getStageId(),'reviewIsComplete' => $this->_tpl_vars['reviewIsComplete'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewAttachmentsGridContainer','url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<!-- Display queries grid -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => @WORKFLOW_STAGE_ID_EXTERNAL_REVIEW,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>
	

	<?php echo $this->_tpl_vars['additionalFormFields']; ?>
	

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'reviewer','op' => 'submission','path' => $this->_tpl_vars['submission']->getId(),'step' => 2,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'cancelUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'cancelUrl'));?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "reviewer.submission.submitReview",'confirmSubmit' => "reviewer.confirmSubmit",'cancelText' => "navigation.goBack",'cancelUrl' => $this->_tpl_vars['cancelUrl'],'cancelUrlTarget' => '_self','submitDisabled' => $this->_tpl_vars['reviewIsComplete']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</form>