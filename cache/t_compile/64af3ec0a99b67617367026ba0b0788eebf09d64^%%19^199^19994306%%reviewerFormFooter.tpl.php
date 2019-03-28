<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:10:34
         compiled from controllers/grid/users/reviewer/form/reviewerFormFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 13, false),array('modifier', 'escape', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 15, false),array('modifier', 'assign', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 42, false),array('modifier', 'concat', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 56, false),array('modifier', 'translate', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 68, false),array('block', 'fbvFormSection', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 18, false),array('function', 'fbvElement', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 19, false),array('function', 'url', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 42, false),array('function', 'load_url_in_div', 'controllers/grid/users/reviewer/form/reviewerFormFooter.tpl', 43, false),)), $this); ?>
<div id="reviewerFormFooter" class="reviewerFormFooterContainer">
	<!--  message template choice -->
	<?php if (count($this->_tpl_vars['templates']) == 1): ?>
		<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['templateKey'] => $this->_tpl_vars['template']):
?>
			<input type="hidden" name="template" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['templateKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.chooseMessage",'for' => 'template','size' => $this->_tpl_vars['fbvStyles']['size']['medium'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['templates'],'translate' => false,'id' => 'template'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<!--  Message to reviewer textarea -->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.review.personalMessageToReviewer",'for' => 'personalMessage')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'personalMessage','id' => 'personalMessage','value' => $this->_tpl_vars['personalMessage'],'variables' => $this->_tpl_vars['emailVariables'],'rich' => true,'rows' => 25), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<!-- skip email checkbox -->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'skipEmail','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'skipEmail','name' => 'skipEmail','label' => "editor.review.skipEmail"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.review.importantDates")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'responseDueDate','name' => 'responseDueDate','label' => "submission.task.responseDueDate",'value' => $this->_tpl_vars['responseDueDate'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'class' => 'datepicker'), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'reviewDueDate','name' => 'reviewDueDate','label' => "editor.review.reviewDueDate",'value' => $this->_tpl_vars['reviewDueDate'],'inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'class' => 'datepicker'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/users/reviewer/form/noFilesWarning.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php ob_start(); ?>
		<!-- Available review files -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.LimitReviewFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'limitReviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'limitReviewFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'limitReviewFilesGrid','url' => $this->_tpl_vars['limitReviewFilesGridUrl']), $this);?>

	<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('extraContent', ob_get_contents());ob_end_clean(); ?>
	<div id="filesAccordian" class="section">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'filesAccordianController','widgetWrapper' => "#filesAccordian",'moreDetailsText' => "editor.submissionReview.restrictFiles",'lessDetailsText' => "editor.submissionReview.restrictFiles.hide",'extraContent' => $this->_tpl_vars['extraContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

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

	<?php if (count ( $this->_tpl_vars['reviewForms'] ) > 0): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.reviewForm")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'reviewFormId','id' => 'reviewFormId','defaultLabel' => ((is_array($_tmp="manager.reviewForms.noneChosen")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'defaultValue' => '0','translate' => false,'from' => $this->_tpl_vars['reviewForms'],'selected' => $this->_tpl_vars['reviewFormId']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<!-- All of the hidden inputs -->
	<input type="hidden" name="selectionType" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['selectionType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
</div>