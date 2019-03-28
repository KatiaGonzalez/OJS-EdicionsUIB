<?php /* Smarty version 2.6.25-dev, created on 2019-03-04 09:40:38
         compiled from controllers/tab/admin/plugins/sitePlugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/admin/plugins/sitePlugins.tpl', 10, false),array('function', 'load_url_in_div', 'controllers/tab/admin/plugins/sitePlugins.tpl', 11, false),array('modifier', 'assign', 'controllers/tab/admin/plugins/sitePlugins.tpl', 10, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.plugins.AdminPluginGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pluginGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pluginGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'pluginGridContainer','url' => $this->_tpl_vars['pluginGridUrl']), $this);?>
