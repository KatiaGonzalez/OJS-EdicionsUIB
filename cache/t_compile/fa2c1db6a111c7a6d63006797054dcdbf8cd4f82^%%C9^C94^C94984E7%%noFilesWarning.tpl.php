<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 11:10:34
         compiled from controllers/grid/users/reviewer/form/noFilesWarning.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'controllers/grid/users/reviewer/form/noFilesWarning.tpl', 12, false),)), $this); ?>
<div class="pkp_notification" id="noFilesWarning" style="display: none;">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'noFilesWarningContent','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="editor.submission.noReviewerFilesSelected")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="editor.submission.noReviewerFilesSelected.details")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>