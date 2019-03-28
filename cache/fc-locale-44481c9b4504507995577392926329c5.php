<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin Utilizadores XML',
  'plugins.importexport.users.description' => 'Importar e exportar utilizadores',
  'plugins.importexport.users.cliUsage' => 'Modo de utilização: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...',
  'plugins.importexport.users.cliUsage.examples' => 'Exemplos:
	Import users into myJournal from myImportFile.xml:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal

	Export all users from myJournal:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Export users specified by their ID:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal 1 2',
  'plugins.importexport.users.import.importUsers' => 'Importar Utilizadores',
  'plugins.importexport.users.import.instructions' => 'Seleccione um ficheiro de dados XML contendo informações sobre o utilizador para importar para esta revista. Consulte a ajuda da revista para obter detalhes sobre o formato deste ficheiro. <br /> <br /> Note que, se o ficheiro importado contiver quaisquer nomes de utilizadores ou endereços de e-mail que já existam no sistema, os dados do utilizador para estes utilizadores não serão importados e quaisquer novos papéis a serem criados serão atribuídos aos utilizadores existentes.',
  'plugins.importexport.users.import.dataFile' => 'Ficheiro de dados do utilizador',
  'plugins.importexport.users.import.sendNotify' => 'Enviar um e-mail de notificação para cada utilizador importado contendo o nome de utilizador e a senha.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar importando outros utilizadores se ocorrer um erro.',
  'plugins.importexport.users.import.usersWereImported' => 'Os seguintes utilizadores foram importados com sucesso para a revista.',
  'plugins.importexport.users.import.errorsOccurred' => 'Ocorreram erros durante a importação',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme que estes são os utilizadores que gostaria de importar para a revista',
  'plugins.importexport.users.import.warning' => 'Aviso',
  'plugins.importexport.users.import.encryptionMismatch' => 'Não é possível usar senhas com {$importHash}; O OJS está configurado para usar {$ojsHash}. Se continuar, tem de restabelecer as senhas dos utilizadores importados.',
  'plugins.importexport.users.unknownPress' => 'Foi especificado um caminho "{$journalPath}" desconhecido da revista.',
  'plugins.importexport.users.export.exportUsers' => 'Exportar Utilizadores',
  'plugins.importexport.users.export.exportByRole' => 'Exportar por Papel',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar Todos',
  'plugins.importexport.users.export.errorsOccurred' => 'Ocorreram erros durante a exportação',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Não foi possível gravar no ficheiro "{$fileName}".',
  'plugins.importexport.users.importComplete' => 'A importação foi concluída com sucesso. Utilizadores com nomes de utilizadores e endereços de e-mail que ainda não estão em uso foram importados, juntamente com os grupos de utilizadores que os acompanham.',
  'plugins.importexport.users.results' => 'Resultados',
  'plugins.importexport.users.uploadFile' => 'Faça o upload de um ficheiro em "Importar" para continuar.',
); ?>