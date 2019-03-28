<?php /* Smarty version 2.6.25-dev, created on 2019-02-28 10:36:07
         compiled from reviewer/review/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'reviewer/review/step2.tpl', 20, false),array('function', 'csrf', 'reviewer/review/step2.tpl', 21, false),array('function', 'fbvFormButtons', 'reviewer/review/step2.tpl', 30, false),array('block', 'fbvFormArea', 'reviewer/review/step2.tpl', 24, false),array('block', 'fbvFormSection', 'reviewer/review/step2.tpl', 25, false),array('modifier', 'assign', 'reviewer/review/step2.tpl', 29, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#reviewStep2Form').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler'
		);
	});
</script>

<form class="pkp_form" id="reviewStep2Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'reviewer','op' => 'saveStep','path' => $this->_tpl_vars['submission']->getId(),'step' => '2','escape' => false), $this);?>
">
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewStep2')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "reviewer.submission.reviewerGuidelines")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<p><?php echo $this->_tpl_vars['reviewerGuidelines']; ?>
</p>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'reviewer','op' => 'submission','path' => $this->_tpl_vars['submission']->getId(),'step' => 1,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'cancelUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'cancelUrl'));?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "reviewer.submission.continueToStepThree",'cancelText' => "navigation.goBack",'cancelUrl' => $this->_tpl_vars['cancelUrl'],'cancelUrlTarget' => '_self','submitDisabled' => $this->_tpl_vars['reviewIsComplete']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>