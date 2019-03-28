<?php /* Smarty version 2.6.25-dev, created on 2019-02-28 10:35:53
         compiled from reviewer/review/reviewStepHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'reviewer/review/reviewStepHeader.tpl', 11, false),array('function', 'url', 'reviewer/review/reviewStepHeader.tpl', 32, false),array('modifier', 'assign', 'reviewer/review/reviewStepHeader.tpl', 11, false),array('modifier', 'strip_unsafe_html', 'reviewer/review/reviewStepHeader.tpl', 12, false),array('modifier', 'escape', 'reviewer/review/reviewStepHeader.tpl', 23, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'submission.review'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'review') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'review'));?><?php echo ''; ?><?php $this->assign('submissionTitle', ((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', ($this->_tpl_vars['review']).": <em>".($this->_tpl_vars['submissionTitle'])."</em>"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#reviewTabs').pkpHandler(
			'$.pkp.pages.reviewer.ReviewerTabHandler',
			{
				reviewStep: <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewStep'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
,
				selected: <?php echo ((is_array($_tmp=$this->_tpl_vars['selected'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			}
		);
	});
</script>

<div id="reviewTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'step','path' => $this->_tpl_vars['submission']->getId(),'step' => 1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.reviewSteps.request"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'step','path' => $this->_tpl_vars['submission']->getId(),'step' => 2), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.reviewSteps.guidelines"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'step','path' => $this->_tpl_vars['submission']->getId(),'step' => 3), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.reviewSteps.download"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'step','path' => $this->_tpl_vars['submission']->getId(),'step' => 4), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.reviewSteps.completion"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>