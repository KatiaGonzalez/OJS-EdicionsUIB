<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 10:54:13
         compiled from controllers/grid/users/reviewer/readReview.tpl */ ?>
<?php ob_start(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "reviewer/review/reviewerRecommendations.tpl", 'smarty_include_vars' => array('description' => "reviewer.article.selectRecommendation.byEditor",'required' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('reviewerRecommendations', ob_get_contents());ob_end_clean(); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#readReviewForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/grid/users/reviewer/readReview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>