<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:12:45
         compiled from controllers/modals/editorDecision/form/promoteForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/modals/editorDecision/form/promoteForm.tpl', 17, false),array('modifier', 'escape', 'controllers/modals/editorDecision/form/promoteForm.tpl', 25, false),array('modifier', 'compare', 'controllers/modals/editorDecision/form/promoteForm.tpl', 68, false),array('modifier', 'assign', 'controllers/modals/editorDecision/form/promoteForm.tpl', 77, false),array('modifier', 'concat', 'controllers/modals/editorDecision/form/promoteForm.tpl', 119, false),array('modifier', 'uniqid', 'controllers/modals/editorDecision/form/promoteForm.tpl', 119, false),array('function', 'url', 'controllers/modals/editorDecision/form/promoteForm.tpl', 23, false),array('function', 'csrf', 'controllers/modals/editorDecision/form/promoteForm.tpl', 24, false),array('function', 'translate', 'controllers/modals/editorDecision/form/promoteForm.tpl', 32, false),array('function', 'fbvElement', 'controllers/modals/editorDecision/form/promoteForm.tpl', 43, false),array('function', 'load_url_in_div', 'controllers/modals/editorDecision/form/promoteForm.tpl', 78, false),array('block', 'fbvFormSection', 'controllers/modals/editorDecision/form/promoteForm.tpl', 41, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		$('#promote').pkpHandler(
			'$.pkp.controllers.modals.editorDecision.form.EditorDecisionFormHandler',
			{
				peerReviewUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['peerReviewUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="promote" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['saveFormOperation']), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="decision" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['decision'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

	<div id="promoteForm-step1">
		<?php if (array_key_exists ( 'help' , $this->_tpl_vars['decisionData'] )): ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['decisionData']['help']), $this);?>
</p>
		<?php endif; ?>

		<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissionReview.sendEmail",'authorName' => $this->_tpl_vars['authorName']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sendEmailLabel', ob_get_contents());ob_end_clean(); ?>
		<?php if ($this->_tpl_vars['skipEmail']): ?>
			<?php $this->assign('skipEmailSkip', true); ?>
		<?php else: ?>
			<?php $this->assign('skipEmailSend', true); ?>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.sendEmail")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<ul class="checkbox_and_radiobutton">
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "skipEmail-send",'name' => 'skipEmail','value' => '0','checked' => $this->_tpl_vars['skipEmailSend'],'label' => $this->_tpl_vars['sendEmailLabel'],'translate' => false), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "skipEmail-skip",'name' => 'skipEmail','value' => '1','checked' => $this->_tpl_vars['skipEmailSkip'],'label' => "editor.submissionReview.skipEmail"), $this);?>

			</ul>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<div id="sendReviews-emailContent" style="margin-bottom: 30px;">
						<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'personalMessage')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'personalMessage','id' => 'personalMessage','value' => $this->_tpl_vars['personalMessage'],'rich' => true,'variables' => $this->_tpl_vars['allowedVariables'],'variablesType' => $this->_tpl_vars['allowedVariablesType']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

						<?php if ($this->_tpl_vars['reviewsAvailable']): ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<a id="importPeerReviews" href="#" class="pkp_button">
						<span class="fa fa-plus" aria-hidden="true"></span>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.addReviews"), $this);?>

					</a>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
		</div>

		<?php if ($this->_tpl_vars['decisionData']['paymentType']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.payment")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<ul class="checkbox_and_radiobutton">
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "requestPayment-request",'name' => 'requestPayment','value' => '1','checked' => ((is_array($_tmp=$this->_tpl_vars['requestPayment'])) ? $this->_run_mod_handler('compare', true, $_tmp, 1) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 1)),'label' => $this->_tpl_vars['decisionData']['requestPaymentText'],'translate' => false), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "requestPayment-waive",'name' => 'requestPayment','value' => '0','checked' => ((is_array($_tmp=$this->_tpl_vars['requestPayment'])) ? $this->_run_mod_handler('compare', true, $_tmp, 0) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 0)),'label' => $this->_tpl_vars['decisionData']['waivePaymentText'],'translate' => false), $this);?>

				</ul>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

				<?php if ($this->_tpl_vars['reviewRoundId']): ?>
			<div id="attachments">
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.EditorSelectableReviewAttachmentsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewAttachmentsGridContainer','url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>

			</div>
		<?php endif; ?>

		<div id="libraryFileAttachments" class="pkp_user_group_other_contexts">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.SelectableLibraryFileGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'libraryAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'libraryAttachmentsGridUrl'));?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'libraryFilesAttachmentsGridContainer','url' => $this->_tpl_vars['libraryAttachmentsGridUrl']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'libraryAttachmentsGrid') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'libraryAttachmentsGrid'));?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'libraryFileAttachmentsExtras','widgetWrapper' => "#libraryFileAttachments",'moreDetailsText' => "settings.libraryFiles.public.selectLibraryFiles",'lessDetailsText' => "settings.libraryFiles.public.selectLibraryFiles",'extraContent' => $this->_tpl_vars['libraryAttachmentsGrid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>

	<div id="promoteForm-step2">
		<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['decisionData']['toStage']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('stageName', ob_get_contents());ob_end_clean(); ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.decision.selectFiles",'stageName' => $this->_tpl_vars['stageName']), $this);?>
</p>
				<?php if ($this->_tpl_vars['stageId'] == @WORKFLOW_STAGE_ID_SUBMISSION): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.SelectableSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

		<?php elseif ($this->_tpl_vars['reviewRoundId']): ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.SelectableReviewRevisionsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

		<?php elseif ($this->_tpl_vars['stageId'] == @WORKFLOW_STAGE_ID_EDITING): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.copyedit.SelectableCopyeditFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.final.SelectableFinalDraftFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'draftFilesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'draftFilesToPromoteGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'draftFilesToPromoteGridUrl','url' => $this->_tpl_vars['draftFilesToPromoteGridUrl']), $this);?>

		<?php endif; ?>
		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'filesToPromoteGrid','url' => $this->_tpl_vars['filesToPromoteGridUrl']), $this);?>

	</div>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'formButtons form_buttons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<button class="pkp_button promoteForm-step-btn" data-step="files">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.decision.nextButton",'stageName' => $this->_tpl_vars['stageName']), $this);?>

		</button>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','class' => 'submitFormButton pkp_button_primary','id' => "promoteForm-complete-btn",'label' => "editor.submissionReview.recordDecision"), $this);?>

		<button class="pkp_button promoteForm-step-btn" data-step="email">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.decision.previousAuthorNotification"), $this);?>

		</button>
		<?php $this->assign('cancelButtonId', ((is_array($_tmp=((is_array($_tmp='cancelFormButton')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
		<a href="#" id="<?php echo $this->_tpl_vars['cancelButtonId']; ?>
" class="cancelButton"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
</a>
		<span class="pkp_spinner"></span>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>