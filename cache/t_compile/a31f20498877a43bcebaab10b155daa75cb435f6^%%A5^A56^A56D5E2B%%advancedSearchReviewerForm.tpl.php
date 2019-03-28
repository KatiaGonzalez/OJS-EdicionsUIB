<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:10:34
         compiled from controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl', 22, false),array('modifier', 'escape', 'controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl', 30, false),array('function', 'fbvElement', 'controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl', 31, false),array('function', 'translate', 'controllers/grid/users/reviewer/form/advancedSearchReviewerForm.tpl', 45, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Handle moving the reviewer ID from the grid to the second form
		$('#advancedReviewerSearch').pkpHandler('$.pkp.controllers.grid.users.reviewer.AdvancedReviewerSearchHandler');
	});
</script>

<div id="advancedReviewerSearch" class="pkp_form pkp_form_advancedReviewerSearch">

	<div id="searchGridAndButton">

		<?php $this->assign('uuid', ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
		<div id="select-reviewer-list-handler-<?php echo $this->_tpl_vars['uuid']; ?>
">
			<script type="text/javascript">
				pkp.registry.init('select-reviewer-list-handler-<?php echo $this->_tpl_vars['uuid']; ?>
', 'SelectReviewerListPanel', <?php echo $this->_tpl_vars['selectReviewerListData']; ?>
);
			</script>
		</div>

				<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'form_buttons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','id' => 'selectReviewerButton','label' => "editor.submission.selectReviewer"), $this);?>

			<?php $_from = $this->_tpl_vars['reviewerActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php if ($this->_tpl_vars['action']->getId() == 'advancedSearch'): ?>
					<?php continue; ?>
				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => 'createReviewerForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>

	<div id="regularReviewerForm" class="pkp_reviewer_form">
				<div class="selected_reviewer">
			<div class="label">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.selectedReviewer"), $this);?>

			</div>
			<div class="value">
				<span id="selectedReviewerName" class="name"></span>
				<span class="actions">
					<?php $_from = $this->_tpl_vars['reviewerActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
						<?php if ($this->_tpl_vars['action']->getId() == 'advancedSearch'): ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => 'createReviewerForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</span>
			</div>
		</div>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/users/reviewer/form/advancedSearchReviewerAssignmentForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>