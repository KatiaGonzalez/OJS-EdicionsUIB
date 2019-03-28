<?php return array (
  'plugins.importexport.pubmed.displayName' => 'Connector d\'exportació a XML de PubMed',
  'plugins.importexport.pubmed.description' => 'Exporta les metadades de l\'article en format XML de PubMed per a la indexació a MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Exporta les dades',
  'plugins.importexport.pubmed.export.issues' => 'Exporta els números',
  'plugins.importexport.pubmed.export.selectIssue' => 'Seleccioneu el número que vulgueu exportar.',
  'plugins.importexport.pubmed.export.articles' => 'Exporta els articles',
  'plugins.importexport.pubmed.export.selectArticle' => 'Seleccioneu els articles que vulgueu exportar.',
  'plugins.importexport.pubmed.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubmed.cliError' => 'ERROR:',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'No hi ha cap número que coincideixi amb l\'id. de número indicat, "{$issueId}".',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'No hi ha cap article que coincideixi amb l\'id. d\'article indicat, "{$articleId}".',
); ?>