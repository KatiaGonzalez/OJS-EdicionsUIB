<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 13:40:04
         compiled from controllers/grid/files/review/manageReviewFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/files/review/manageReviewFiles.tpl', 20, false),array('function', 'csrf', 'controllers/grid/files/review/manageReviewFiles.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/grid/files/review/manageReviewFiles.tpl', 24, false),array('function', 'fbvFormButtons', 'controllers/grid/files/review/manageReviewFiles.tpl', 25, false),array('modifier', 'escape', 'controllers/grid/files/review/manageReviewFiles.tpl', 20, false),array('modifier', 'assign', 'controllers/grid/files/review/manageReviewFiles.tpl', 23, false),)), $this); ?>


<!-- Current review files -->
<div id="existingFilesContainer">
	<script type="text/javascript">
		$(function() {
			// Attach the form handler.
			$('#manageReviewFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
		});
	</script>
	<form class="pkp_form" id="manageReviewFilesForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.files.review.ManageReviewFilesGridHandler",'op' => 'updateReviewFiles','submissionId' => ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'stageId' => ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'reviewRoundId' => ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<!-- Available submission files -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.ManageReviewFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'availableReviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'availableReviewFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'availableReviewFilesGrid','url' => $this->_tpl_vars['availableReviewFilesGridUrl']), $this);?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	</form>
</div>