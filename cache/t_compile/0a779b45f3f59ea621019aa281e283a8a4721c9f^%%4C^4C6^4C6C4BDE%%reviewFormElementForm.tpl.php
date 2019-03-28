<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:40:43
         compiled from manager/reviewForms/reviewFormElementForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/reviewForms/reviewFormElementForm.tpl', 25, false),array('function', 'url', 'manager/reviewForms/reviewFormElementForm.tpl', 33, false),array('function', 'csrf', 'manager/reviewForms/reviewFormElementForm.tpl', 34, false),array('function', 'fbvElement', 'manager/reviewForms/reviewFormElementForm.tpl', 35, false),array('function', 'load_url_in_div', 'manager/reviewForms/reviewFormElementForm.tpl', 79, false),array('function', 'fbvFormButtons', 'manager/reviewForms/reviewFormElementForm.tpl', 86, false),array('modifier', 'json_encode', 'manager/reviewForms/reviewFormElementForm.tpl', 25, false),array('modifier', 'assign', 'manager/reviewForms/reviewFormElementForm.tpl', 78, false),array('block', 'fbvFormArea', 'manager/reviewForms/reviewFormElementForm.tpl', 40, false),array('block', 'fbvFormSection', 'manager/reviewForms/reviewFormElementForm.tpl', 43, false),)), $this); ?>
<script>
	$(function() {
		// Attach the form handler.
		$('#reviewFormElementForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<script type="text/javascript">
<!--
function togglePossibleResponses(newValue, multipleResponsesElementTypesString) {
	if (multipleResponsesElementTypesString.indexOf(';'+newValue+';') != -1) {
		document.getElementById('reviewFormElementForm').addResponse.disabled=false;
	} else {
		if (document.getElementById('reviewFormElementForm').addResponse.disabled == false) {
			alert(<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.reviewFormElement.changeType"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
);
		}
		document.getElementById('reviewFormElementForm').addResponse.disabled=true;
	}
}
// -->
</script>

<form class="pkp_form" id="reviewFormElementForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.reviewForms.ReviewFormElementsGridHandler",'op' => 'updateReviewFormElement','anchor' => 'possibleResponses'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('id' => 'reviewFormId','type' => 'hidden','name' => 'reviewFormId','value' => $this->_tpl_vars['reviewFormId']), $this);?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('id' => 'reviewFormElementId','type' => 'hidden','name' => 'reviewFormElementId','value' => $this->_tpl_vars['reviewFormElementId']), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'reviewFormElementsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewFormElementForm')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

		<!-- question -->
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.reviewFormElements.question",'required' => true,'for' => 'question')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'question','value' => $this->_tpl_vars['question'],'multilingual' => true,'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- required checkbox -->
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'required','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['required']): ?>
				<?php $this->assign('checked', true); ?>
			<?php else: ?>
				<?php $this->assign('checked', false); ?>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'required','label' => "manager.reviewFormElements.required",'checked' => $this->_tpl_vars['checked'],'inline' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- included in message to author checkbox -->
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'included','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['included']): ?>
				<?php $this->assign('checked', true); ?>
			<?php else: ?>
				<?php $this->assign('checked', false); ?>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'included','label' => "manager.reviewFormElements.included",'checked' => $this->_tpl_vars['checked'],'inline' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- element type drop-down -->
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'elementType','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- when user makes a selection (onchange), warn them if necessary. -->
			<!-- also display/hide options list builder if appropriate. -->
			<!-- look to see how this is done elsewhere under the new JS framework -->
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "manager.reviewFormElements.elementType",'id' => 'elementType','defaultLabel' => "",'from' => $this->_tpl_vars['reviewFormElementTypeOptions'],'selected' => $this->_tpl_vars['elementType'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'required' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- Options listbuilder. Activated for some element types. -->
		<div id="elementOptions" class="full left">
			<div id="elementOptionsContainer" class="full left">
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.settings.reviewForms.ReviewFormElementResponseItemListbuilderHandler",'op' => 'fetch','reviewFormId' => $this->_tpl_vars['reviewFormId'],'reviewFormElementId' => $this->_tpl_vars['reviewFormElementId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'elementOptionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'elementOptionsUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'elementOptionsListbuilderContainer','url' => $this->_tpl_vars['elementOptionsUrl']), $this);?>

			</div>
		</div>
		<!-- required field text -->
		<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

		<!-- submit button -->
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'reviewFormElementFormSubmit','submitText' => "common.save"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>