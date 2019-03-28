<?php return array (
  'plugins.importexport.datacite.displayName' => 'Plugin de Exportação/Registo DataCite',
  'plugins.importexport.datacite.description' => 'Exporta ou regista o número, artigo, composição e metadados de ficheiros suplementares no formato DataCite.',
  'plugins.importexport.datacite.settings.description' => 'Configure o plugin de exportação DataCite antes de usá-lo pela primeira vez.',
  'plugins.importexport.datacite.intro' => 'Se pretender registar DOIs com o DataCite, entre em contacto com o Administrador
               Agent via the <a href="http://datacite.org/contact" target="_blank">DataCite
		homepage</a>, who will refer you to your local DataCite Member. Once you have
		established a relationship with the Member organisation, you will be provided
		with access to the DataCite service for minting persistent identifiers (DOIs)
		and registering associated metadata. If you do not have your own username and
		password you\'ll still be able to export into the DataCite XML format but you
		cannot register your DOIs with DataCite from within OJS.
		Please note that the password will be saved as plain text, i.e. not encrypted, due
		to the DataCite registration service requirements.',
  'plugins.importexport.datacite.settings.form.username' => 'Utilizador (símbolo)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Insira o nome de utilizador (símbolo) que obteve da DataCite. O nome de utilizador pode não conter dois pontos.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'O OJS depositará DOIs automaticamente junto do DataCite. Por favor, note que esta acção pode demorar tempo a ser processada. Pode verificar todos os DOIs não registados.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Use o prefixo do teste DataCite para registo do DOI. Não esqueça de remover esta opção para a produção.',
  'plugins.importexport.datacite.senderTask.name' => 'Tarefa de registo automático DataCite',
  'plugins.importexport.datacite.cliUsage' => 'Modo de Utilização: 
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...',
); ?>