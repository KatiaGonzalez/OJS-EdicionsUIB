<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin XML nativo',
  'plugins.importexport.native.description' => 'Importa e exporta artigos e númetos no formato XML nativo do OJS.',
  'plugins.importexport.native.import' => 'Importar',
  'plugins.importexport.native.import.instructions' => 'Upload ficheiro XML para ser importado',
  'plugins.importexport.native.exportSubmissions' => 'Exportar Artigos',
  'plugins.importexport.native.exportIssues' => 'Exportar Números',
  'plugins.importexport.native.results' => 'Resultados',
  'plugins.inportexport.native.uploadFile' => 'Faça o upload de um ficheiro em "Importar" para continuar.',
  'plugins.importexport.native.importComplete' => 'A importação foi concluída com sucesso. Os seguintes artigos foram importados:',
  'plugins.importexport.native.cliUsage' => 'Modo de utilização: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Additional parameters are required for importing data as follows, depending
on the root node of the XML document.

If the root node is <article> or <articles>, additional parameters are required.
The following formats are accepted:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.error.unknownSection' => 'Secção desconhecida {$param}',
  'plugins.importexport.native.error.unknownUser' => 'O utilizador especificado, "{$userName}", não existe.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'O título da secção "{$section1Title}" e o título da secção "{$section2Title}" no número "{$issueTitle}" corresponderam com as diferentes secções existentes da revista.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'O título da secção "{$sectionTitle}" no número "{$issueTitle}" corresponde a uma secção existente da revista, mas outro título desta secção não coincide com outro título da seção existente da revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'A abreviatura da secção "{$section1Abbrev}" e a abreviatura da secção "{$section2Abbrev}" do número "{$issueTitle}" correspondem às diferentes secções existentes da revista .',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'A abreviatura da secção "{$sectionAbbrev}" no número "{$issueTitle}" corresponde a uma secção existente da revista, mas uma outra abreviatura desta secção não corresponde a outra abreviatura da secção existente da revista.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Nenhum ou mais do que um número corresponde à identificação do problema identificado"{$issueIdentification}".',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'O elemento de identificação do número está em falta para o artigo "{$articleTitle}".',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Selecione artigos a exportar',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'O número existem com id {$issueId} corresponde à identificação de revista indicada "{$issueIdentification}". Este número não será modificado, mas os artigos serão adicionados.',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'O artigo  "{$articleTitle}" faz parte de um número, mas não tem data de publicação.',
); ?>