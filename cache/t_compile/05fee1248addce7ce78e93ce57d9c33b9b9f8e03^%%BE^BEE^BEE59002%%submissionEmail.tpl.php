<?php /* Smarty version 2.6.25-dev, created on 2019-03-10 11:07:44
         compiled from authorDashboard/submissionEmail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'authorDashboard/submissionEmail.tpl', 12, false),array('modifier', 'date_format', 'authorDashboard/submissionEmail.tpl', 15, false),array('modifier', 'strip_unsafe_html', 'authorDashboard/submissionEmail.tpl', 18, false),)), $this); ?>
<div class="pkp_submission_email">
	<h2>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmail']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

	</h2>
	<div class="date">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmail']->getDateSent())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>

	</div>
	<div class="email_entry">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmail']->getBody())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

	</div>
</div>