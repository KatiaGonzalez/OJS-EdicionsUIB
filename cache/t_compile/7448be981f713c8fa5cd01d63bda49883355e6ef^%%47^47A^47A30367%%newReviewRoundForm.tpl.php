<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:12:34
         compiled from controllers/modals/editorDecision/form/newReviewRoundForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 19, false),array('function', 'url', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 20, false),array('function', 'csrf', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 30, false),array('function', 'fbvFormButtons', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 32, false),array('modifier', 'escape', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 22, false),array('modifier', 'assign', 'controllers/modals/editorDecision/form/newReviewRoundForm.tpl', 29, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#newRoundForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler', null);
	});
</script>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.newRoundDescription"), $this);?>
</p>
<form class="pkp_form" id="newRoundForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveNewReviewRound'), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		<input type="hidden" name="decision" value="<?php echo @SUBMISSION_EDITOR_DECISION_RESUBMIT; ?>
" />

	<!-- Revision files grid (Displays only revisions at first, and hides all other files which can then be displayed with filter button -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.SelectableReviewRevisionsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'newRoundRevisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'newRoundRevisionsUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'newRoundRevisionsGrid','url' => $this->_tpl_vars['newRoundRevisionsUrl']), $this);?>


	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submission.createNewRound"), $this);?>

</form>
