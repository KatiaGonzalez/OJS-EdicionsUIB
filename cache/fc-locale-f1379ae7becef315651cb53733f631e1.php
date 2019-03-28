<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Opções de histórico de acessos',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Criar ficheiro de histórico',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Ativar esta opção fará com que o plugin crie ficheiros de histórico dentro da sua pasta \'files\'. Estes ficheiros devem ser usados para extração de dados estatísticos. Caso não deseje criar mais ficheiros de histórico pode deixar a opção desativa e usar os ficheiros de histórico do seu servidor.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Expressão regular para análise do histórico',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'A expressão regular pré-definida pode analisar ficheiros de histórico do Apache em formato combinado e também os ficheiros de histórico gerados pelo plugin. Se os registos do seu ficheiro de histórico estiver num formato diferente, terá de introduzir uma expressão regular que seja capaz de o analisar e extrair os valores necessários. Use UsageStatsLoader::_getDataFromLogEntry() para mais informação.',
  'plugins.generic.usageStats.settings.saved' => 'Configurações do plugin de Estatísticas de Uso gavadas',
  'plugins.generic.usageStats.openFileFailed' => 'O ficheiro {$file} não pode ser aberto e foi rejeitado.',
  'plugins.generic.usageStats.invalidLogEntry' => 'A linha {$lineNumber} do ficheiro {$file} não é uma entrada de histórico válida e o ficheiro foi rejeitado.',
  'plugins.generic.usageStats.displayName' => 'Estatísticas de Uso',
  'plugins.generic.usageStats.description' => 'Apresenta estatísticas de uso e acesso aos dados. Pode usar arquivos de histórico de acessos para obter estatísticas.',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Opção de privacidade de dados',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Caminho para o ficheiro com informação para anonimato',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'O ficheiro não pode ser guardado.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Para garantir a privacidade dos dados,  deve especificar um ficheiro legível e que possa ser criado pelo utilizador do servidor web, para conter um valor de entropia  aleatoriamente. Este ficheiro não deve ser incluído em cópias segurança de modo a garantir a proteção da privacidade. O valor é gerado aleatoriamente usando a função mcrypt_create_iv, o que requer a bilbioteca PHP mcrypt; a função openssl_random_pseudo_bytes, que requer o PHP openssl; o ficheiro /dev/urandom, que só funciona em sistemas *nix; ou a função mt_rand, que não é criptograficamente segura. Assim, se  estiver a usar um servidor Windows, certifique-se que instalou o PHP com suporte para o mcrypt ou o openssl de modo a que o valor de entropia seja gerado de forma criptograficamente segura.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Ative essa opção para usar uma versão do plugin que respeite as legislações de privacidade, ou seja, que  regista endereços IP codificados, informa os utilziadores sobre o rastreamento e fornece uma opção para os utilizadores desativarem a funcionalidade. Nota: quando utilizar esta opção não será capaz de usar as funcionalidades de geolocalização do plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Ativar a privacidade dos dados requer um arquivo de entropia (salt).',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Ao ativar a privacidade dos dados exclui Cidade como uma estatística opcional.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Ao ativar a privacidade dos dados exclui Região como uma estatística opcional.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Respeitar a privacidade dos dados',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Informação estatística opcional',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Ativar ou desativar a recolha da seguinte informação opcional. Irá influenciar sobre os possíveis relatórios de estatísticas que poderá calcular, e também terá  impacto sobre o tamanho da base de dados. NÃO MUDE a menos que saiba exatamente o que está a fazer.',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'A coluna opcional "Cidade" requer a coluna opcional "Região".',
  'plugins.generic.usageStats.settings.archives' => 'Arquivos',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Ative esta opção para compactar os arquivos de histórico usando a ferramenta gzip (terá que definir a configuração gzip dentro config.inc.php). Se o seu sítio tiver muitas visitas será boa ideia permitir a compressão para economizar algum espaço em disco.',
  'plugins.generic.usageStats.settings.compressArchives' => 'Comprimir arquivos',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Tarefa do carregador de ficheiro de Estatísticas de Uso',
  'plugins.generic.usageStats.removeUrlError' => 'O número da linha {$lineNumber} do ficheiro {$file} contém um URL ao qual o sistema não pode remover o endereço base.',
  'plugins.generic.usageStats.loadDataError' => 'Não foi possível carregar os dados extraídos do ficheiro {$file}. O ficheiro foi transferido para novo processamento.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'O plugin de Estatísticas de Uso está desativado. Nenhum arquivo de histórico processado.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'A pasta {$directory} não está vazia. Isto poderá indicar que um processo falhou anteriormente, ou que um processo está a ser executado atualmente. Este ficheiro será automaticamente reprocessado se estiver a usar o scheduledTasksAutoStage.xml. Caso contrário, precisará de mover, manualmente, os ficheiros órfãos na pasta de processamento de volta para a pasta principal.',
  'plugins.generic.usageStats.noCounterBotList' => 'A lista de robôs COUNTER {$botlist} não pode ser usada. Há diferentes razões para isso. Verifique se o ficheiro com a lista está na pasta \'lib/pkp/plugins/generic/usageStats/lib/counter\'. Verifique também as permissões da pasta e que contém um único ficheiro.',
  'plugins.reports.usageStats.report.displayName' => 'Relatório de estatísticas de uso do PKP',
  'plugins.reports.usageStats.report.description' => 'Relatório pré-definido de estatísticas de uso (compatível com COUNTER)',
  'plugins.reports.usageStats.optout.displayName' => 'Privacidade da Informação das Estatística de Uso',
  'plugins.reports.usageStats.optout.description' => 'Privacidade da Informação das Estatística de Uso',
  'plugins.generic.usageStats.optout.title' => 'Informações de Estatísticas de Uso',
  'plugins.generic.usageStats.optout.shortDesc' => 'Regista estatística anónima de uso. Por vaor leia a <a href="{$privacyInfo}"> Informação de Privacidade </a> para mais detalhes.',
  'plugins.generic.usageStats.optin' => 'Aceitar',
  'plugins.generic.usageStats.optout' => 'Rejeitar',
  'plugins.generic.usageStats.optout.done' => '<p>Foi registado, com sucesso, a não recolha dos seus dados de uso. Enquanto esta mensagem estiver visível, nenhum tipo de estatística será recolhido enquanto usa este sítio. Use o botão abaixo para reverter a sua decisão.</p>',
  'plugins.generic.usageStats.optout.cookie' => '<p>Caso deseje é permitido rejeitar o processo de recolha de dados. Ao clicar no botão de rejeição, a seguir, pode decidir não participar na análise estatística. Ao clicar no botão, um <em>cookie</em> será gravado no seu computador para registar esta decisão. Caso as configurações de privacidade do navegador eliminem <em>cookies</em>automaticamente, será necessário voltar a tomar essa decisão. O <em>cookie</em> é válido apenas para um navegador. Caso use mais de um, terá que fazer a escolha individualmente, para cada navegador desejado. Nenhuma informação pessoal é gravada no <em>cookie</em>. Este <em>cookie</em> tem a validade de um ano após seu último acesso.</p>
<p>Note que os registos de atividade do servidor não são afetados por esta decisão, sendo específicas para este sistema. Veja a nossa <a href="{$privacyStatementUrl}">política de privacidade</a>.</p>',
  'plugins.reports.usageStats.metricType' => 'PKP/COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Estatíticas do Public Knowledge Project (compatível com COUNTER)',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Opções de visualização de estatísticas',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Apresentar gráfico de estatísticas de submissão para o leitor',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Escolha o tipo de gráfico para apresentar as estatísticas de download',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Barra',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Linha',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Definir o número máximo de dados para apresentar ao mesmo tempo para um ponto específico do eixo X. Um valor mais alto pode gerar gráficos difíceis de entender. Um valor entre 3 e 5 é adequado.',
  'plugins.generic.usageStats.statsSum' => 'Somar todos os downloads de ficheiros',
  'plugins.generic.usageStats.noStats' => 'Não há dados estatísticos.',
  'plugins.generic.usageStats.monthInitials' => 'Jan Fev Mar Abr Mai Jun Jul Ago Set Out Nov Dez',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Estas propriedades só serão aplicadas às estatísticas de uso em {$contextName}.',
  'plugins.generic.usageStats.downloads' => 'Downloads',
); ?>