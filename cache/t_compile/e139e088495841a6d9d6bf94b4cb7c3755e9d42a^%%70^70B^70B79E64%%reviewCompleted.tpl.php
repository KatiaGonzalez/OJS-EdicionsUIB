<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 18:31:42
         compiled from reviewer/review/reviewCompleted.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'reviewer/review/reviewCompleted.tpl', 12, false),array('function', 'url', 'reviewer/review/reviewCompleted.tpl', 19, false),array('function', 'load_url_in_div', 'reviewer/review/reviewCompleted.tpl', 20, false),array('modifier', 'assign', 'reviewer/review/reviewCompleted.tpl', 19, false),)), $this); ?>

<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.complete"), $this);?>
</h2>
<br />
<div class="separator"></div>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.complete.whatNext"), $this);?>
</p>

<!-- Display queries grid -->
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => @WORKFLOW_STAGE_ID_EXTERNAL_REVIEW,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGridComplete','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>
