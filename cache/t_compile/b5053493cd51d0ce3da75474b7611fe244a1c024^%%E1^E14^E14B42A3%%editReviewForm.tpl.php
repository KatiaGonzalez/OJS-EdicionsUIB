<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:40:23
         compiled from controllers/grid/settings/reviewForms/editReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/reviewForms/editReviewForm.tpl', 24, false),array('function', 'translate', 'controllers/grid/settings/reviewForms/editReviewForm.tpl', 24, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editReviewFormTabs').pkpHandler(
				'$.pkp.controllers.TabHandler',
				{
					<?php if (! $this->_tpl_vars['canEdit']): ?>disabled: [0, 1],<?php endif; ?>
					selected: <?php if ($this->_tpl_vars['preview']): ?>2<?php else: ?>0<?php endif; ?>
				}
		);
	});
</script>
<div id="editReviewFormTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'reviewFormBasics','reviewFormId' => $this->_tpl_vars['reviewFormId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.reviewForms.edit"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'reviewFormElements','reviewFormId' => $this->_tpl_vars['reviewFormId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.reviewFormElements"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'reviewFormPreview','reviewFormId' => $this->_tpl_vars['reviewFormId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.reviewForms.preview"), $this);?>
</a></li>
	</ul>
</div>