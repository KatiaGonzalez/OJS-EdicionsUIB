<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:23:30
         compiled from controllers/grid/users/reviewer/form/editReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 19, false),array('function', 'csrf', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 20, false),array('function', 'fbvElement', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 27, false),array('function', 'translate', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 45, false),array('function', 'load_url_in_div', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 47, false),array('function', 'fbvFormButtons', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 57, false),array('modifier', 'escape', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 21, false),array('modifier', 'date_format', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 27, false),array('modifier', 'concat', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 33, false),array('modifier', 'assign', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 46, false),array('modifier', 'translate', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 52, false),array('block', 'fbvFormSection', 'controllers/grid/users/reviewer/form/editReviewForm.tpl', 26, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#editReviewForm').pkpHandler('$.pkp.controllers.grid.users.reviewer.form.EditReviewFormHandler');
	});
</script>

<form class="pkp_form" id="editReviewForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateReview'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="reviewAssignmentId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignmentId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.review.importantDates")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'responseDueDate','name' => 'responseDueDate','label' => "submission.task.responseDueDate",'value' => ((is_array($_tmp=$this->_tpl_vars['responseDueDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])),'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'class' => 'datepicker'), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'reviewDueDate','name' => 'reviewDueDate','label' => "editor.review.reviewDueDate",'value' => ((is_array($_tmp=$this->_tpl_vars['reviewDueDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])),'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'class' => 'datepicker'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true,'title' => "editor.submissionReview.reviewType")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $_from = $this->_tpl_vars['reviewMethods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['methodId'] => $this->_tpl_vars['methodTranslationKey']):
?>
			<?php $this->assign('elementId', ((is_array($_tmp=((is_array($_tmp='reviewMethod')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['methodId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['methodId']))); ?>
			<?php if ($this->_tpl_vars['reviewMethod'] == $this->_tpl_vars['methodId']): ?>
				<?php $this->assign('elementChecked', true); ?>
			<?php else: ?>
				<?php $this->assign('elementChecked', false); ?>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'reviewMethod','id' => $this->_tpl_vars['elementId'],'value' => $this->_tpl_vars['methodId'],'checked' => $this->_tpl_vars['elementChecked'],'label' => $this->_tpl_vars['methodTranslationKey']), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/users/reviewer/form/noFilesWarning.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissionReview.restrictFiles"), $this);?>
</h3>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.LimitReviewFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'reviewAssignmentId' => $this->_tpl_vars['reviewAssignmentId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'limitReviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'limitReviewFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'limitReviewFilesGrid','url' => $this->_tpl_vars['limitReviewFilesGridUrl']), $this);?>


	<?php if ($this->_tpl_vars['reviewForms']): ?>
		<?php if (count ( $this->_tpl_vars['reviewForms'] ) > 0): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.reviewForm")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'reviewFormId','id' => 'reviewFormId','defaultLabel' => ((is_array($_tmp="manager.reviewForms.noneChosen")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'defaultValue' => '0','translate' => false,'from' => $this->_tpl_vars['reviewForms'],'selected' => $this->_tpl_vars['reviewFormId']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>