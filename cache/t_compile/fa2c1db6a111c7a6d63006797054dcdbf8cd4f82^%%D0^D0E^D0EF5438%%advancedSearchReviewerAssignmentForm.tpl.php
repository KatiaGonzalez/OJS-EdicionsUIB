<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:10:34
         compiled from controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl', 16, false),array('function', 'csrf', 'controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl', 24, false),array('function', 'fbvElement', 'controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl', 25, false),array('function', 'fbvFormButtons', 'controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl', 29, false),array('modifier', 'json_encode', 'controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl', 16, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler for second form.
		$('#advancedSearchReviewerForm').pkpHandler('$.pkp.controllers.grid.users.reviewer.form.AddReviewerFormHandler',
			{
				templateUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => 'grid.users.reviewer.ReviewerGridHandler','op' => 'fetchTemplateBody','stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<form class="pkp_form" id="advancedSearchReviewerForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateReviewer'), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'reviewerId','value' => $this->_tpl_vars['reviewerId']), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/users/reviewer/form/reviewerFormFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submission.addReviewer"), $this);?>

</form>