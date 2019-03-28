<?php return array (
  'plugins.importexport.crossref.displayName' => 'Plugin Exportação CrossRef XML',
  'plugins.importexport.crossref.description' => 'Exporta metadados dos artigos no formato CrossRef XML.',
  'plugins.importexport.crossref.cliUsage' => 'Modo de Utilização:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] articles objectId1 [objectId2] ...',
  'plugins.importexport.crossref.settings.form.username' => 'Utilizador',
  'plugins.importexport.crossref.requirements' => 'Requisitos',
  'plugins.importexport.crossref.requirements.satisfied' => 'Todos os requisitos do plugin foram satisfeitos.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Os seguintes requisitos não obrigatórios para um depósito com sucesso dos dados da CrossRef',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nome do Depositante',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'E-mail do Depositante',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Por favor, insira o nome do depositante.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Por favor, insira o e-mail do depositante.',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Por favor, insira o nome de utilizador fornecido pela CrossRef',
  'plugins.importexport.crossref.senderTask.name' => 'Tarefa de registo automático CrossRef',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'Não foi configurado um editor da revista! Deve adicionar um editor na <a href="{$journalSettingsUrl}" target="_blank"> Página de Configurações da Revista</a>.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'Não foi configurado o ISSN da revista! Deve adicionar um ISSN na <a href="{$journalSettingsUrl}" target="_blank"> Página de Configurações da Revista</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Os artigos não são seleccionados para a atribuição DOI no plugin de identificador público DOI, portanto, não há depósito ou possibilidade de exportação através deste plugin.',
  'plugins.importexport.crossref.registrationIntro' => 'Se quiser usar este plugin para registar DOIs directamente junto do CrossRef, tem de estar na posse de um nome de utilizador e senha (disponível em <a href="http://www.crossref.org" target="_blank"> CrossRef </a>) para poder fazê-lo. Se não tem nome de utilizador e senha, pode exportar para o formato CrossRef XML, mas não pode registar os seus DOIs com o CrossRef dentro do OJS.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'O OJS depositará DOIs atribuídos automaticamente junto do CrossRef. Por favor, note que esta acção pode levar algum tempo tempo a processar. Pode verificar todos os DOIs não registados.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Use a API de teste CrossRef (ambiente de teste) para o depósito DOI. Não esqueça de remover esta opção para a produção.',
  'plugins.importexport.crossref.issues.description' => 'Nota: Somente números (e não os artigos) serão considerados para exportação/registo aqui.',
  'plugins.importexport.crossref.status.submitted' => 'Submetido',
  'plugins.importexport.crossref.status.completed' => 'Depositado',
  'plugins.importexport.crossref.status.failed' => 'Falhou',
  'plugins.importexport.crossref.status.registered' => 'Activo',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marcado activo',
  'plugins.importexport.crossref.statusLegend' => '<p>Estado do depósito:</p>
		<p>
		- Não depositado: nenhuma tentativa de depósito feita para este DOI.<br />
		- Submetido: este DOI foi submetido para depósito.<br />
		- Depositado: o DOI não foi depositado junto do Crossref, e pode não estar ainda activo.<br />
		- Activo: o DOI foi depositado, e está a ser processado normalmente.<br />
		- Falhado: o depósito do DOI falhou.<br />
		- Marcado com activo: o DOI foi manualmente marcado como activo.
		</p>
		<p>Somente o estado da última tentativa de depósito é exibido.</p>
		<p>Se um depósito falhou, resolva o problema e tente registar novamente o DOI.</p>',
  'plugins.importexport.crossref.action.export' => 'Download XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Marcar activo',
  'plugins.importexport.crossref.action.register' => 'Submeter',
  'plugins.importexport.crossref.action.checkStatus' => 'Verificar estado',
  'plugins.importexport.crossref.notification.failed' => 'Não foi registar um DOI. Por favor, vá a Ferramentas> Importar/Exportar> Complemento de exportação XML CrossRef para ver os depósitos com erros.',
  'plugins.importexport.crossref.register.error.mdsError' => 'A submissão não foi bem sucedida! O servidor de registo DOI devolveu um erro: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => 'Submissão com sucesso!',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'Nenhum número corresponde ao ID do problema especificado "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'Nenhum artigo corresponde ao ID do artigo especificado "{$articleId}".',
); ?>