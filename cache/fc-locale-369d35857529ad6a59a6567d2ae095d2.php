<?php return array (
  'plugins.importexport.doaj.displayName' => 'Plugin de Exportação DOAJ',
  'plugins.importexport.doaj.description' => 'Exportar revista para DOAJ e notificar via e-mail dados da revista ao representante do DOAJ',
  'plugins.importexport.doaj.export.contact' => 'Contactar DOAJ para inclusão',
  'plugins.importexport.doaj.cliUsage' => 'Modo de Utilização:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...',
  'plugins.importexport.doaj.registrationIntro' => 'Se pretender registar artigos dentro do OJS, insira a sua chave de API DOAJ. Caso contrário, poderá exportar para o formato XML DOAJ, mas não pode registar os artigos com o DOAJ dentro do OJS.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Chave API DOAJ',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Encontrará a chave de API na área de utilizadores do DOAJ.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'O OJS depositará artigos automaticamente junto do DOAJ. Por favor, note que esta acção pode demorar a ser processada. Pode verificar se há todos os artigos não registados.',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Use a API de teste DOAJ (ambiente de teste) para o registo. Não se esqueça de remover esta opção para a produção.',
  'plugins.importexport.doaj.register.error.mdsError' => 'O depósito não foi bem sucedido! A API DOAJ devolveu um erro: \'{$param}\'.',
  'plugins.importexport.doaj.senderTask.name' => 'Tarefa de registo automático no DOAJ',
); ?>