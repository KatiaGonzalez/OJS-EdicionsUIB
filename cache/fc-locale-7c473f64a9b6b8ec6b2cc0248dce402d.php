<?php return array (
  'plugins.pubIds.doi.displayName' => 'DOI',
  'plugins.pubIds.doi.manager.settings.description' => 'Configure o plugin DOI para gerir e usar DOIs na sua revista:',
  'plugins.pubIds.doi.manager.settings.doiObjects' => 'Conteúdo da Revista',
  'plugins.pubIds.doi.manager.settings.doiObjectsRequired' => 'Escolha a que publicações os DOI devem ser associados.',
  'plugins.pubIds.doi.manager.settings.explainDois' => 'Escolha as publicações que terão DOI\'s associados:',
  'plugins.pubIds.doi.manager.settings.enableIssueDoi' => 'Números',
  'plugins.pubIds.doi.manager.settings.enableSubmissionDoi' => 'Artigos',
  'plugins.pubIds.doi.manager.settings.enableRepresentationDoi' => 'Composições',
  'plugins.pubIds.doi.manager.settings.doiPrefix' => 'Prefixo DOI',
  'plugins.pubIds.doi.manager.settings.doiPrefix.description' => 'O prefixo DOI é atribuído pelas agências de registo (ex: <a href="http://www.crossref.org" target="_new">CrossRef</a>) e é definido no formato 10.xxxx (ex. 10.1234):',
  'plugins.pubIds.doi.manager.settings.doiPrefixPattern' => 'O prefixo DOI é obrigatório e deve ser definido no formato 10.xxxx.',
  'plugins.pubIds.doi.manager.settings.doiSuffix' => 'Sufixo DOI',
  'plugins.pubIds.doi.manager.settings.doiSuffix.description' => 'O sufixo DOI pode ter vários formatos, mas deve ser único para todas as publicações usando o mesmo prefixo:',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern' => 'Use o seguinte padrão para gerar os sufixos DOI. Use %j para as iniciais da revista, %v para o número do volume, %i para o número da edição, %Y para o ano, %a para o identificador dos artigos no OJS, %g para o identificador do número completo, %s para o identificador dos ficheiros, %p para o número de página e %x para o "identificador personalizado" (activar na configuração da revista).',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.issues' => 'para edições/números',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.submissions' => 'para artigos',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.representations' => 'para números completos',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.example' => 'Por exemplo, vol%viss%ipp%p para criar um DOI tal como 10.1234/vol3iss2pp230',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault' => 'Usar padrão por omissão.',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault.description' => '%j.v%vi%i para edições/números<br />%j.v%vi%i.%a para artigos<br />%j.v%vi%i.%a.g%g para números completos.',
  'plugins.pubIds.doi.manager.settings.doiIssueSuffixPatternRequired' => 'Insira o sufixo DOI padrão para edições/números.',
  'plugins.pubIds.doi.manager.settings.doiSubmissionSuffixPatternRequired' => 'Insira o sufixo DOI padrão para artigos.',
  'plugins.pubIds.doi.manager.settings.doiRepresentationSuffixPatternRequired' => 'Insira o sufixo DOI padrão para números completos.',
  'plugins.pubIds.doi.manager.settings.doiReassign' => 'Reatribuir DOIs',
  'plugins.pubIds.doi.manager.settings.doiReassign.confirm' => 'Tem a certeza que pretende eliminar todos os DOIs?',
  'plugins.pubIds.doi.editor.doi' => 'DOI',
  'plugins.pubIds.doi.editor.doiObjectTypeIssue' => 'edição/número',
  'plugins.pubIds.doi.editor.doiObjectTypeSubmission' => 'artigo',
  'plugins.pubIds.doi.editor.doiSuffixCustomIdentifierNotUnique' => 'O sufixo DOI fornecido já está a ser utilizado por outra publicação. Insira um sufixo DOI único para cada publicação.',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi' => 'Limpar DOI da Edição',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi.description' => 'Use este botão para remover todos os DOIs associados a todas as publicações (artigos, números completos, e ficheiros suplementares) actualmetne agendados para esta edição/número.',
  'plugins.pubIds.doi.description' => 'Este plugin permite a atribuição do DOI a números, artigos e composições no OJS.',
  'plugins.pubIds.doi.readerDisplayName' => 'DOI',
  'plugins.pubIds.doi.manager.settings.doiSuffixCustomIdentifier' => 'Insira um sufixo DOI individual para cada publicação. Encontrará um campo de entrada DOI adicional na página de metadados de cada publicação.',
  'plugins.pubIds.doi.manager.settings.doiReassign.description' => 'Se alterar a configuração DOI, os DOIs atribuídos não serão afectados. Uma vez guardada a configuração do DOI, use este botão para limpar todos os DOI existentes para que as novas configurações tenham efeito com as publicações existentes.',
  'plugins.pubIds.doi.editor.doiObjectTypeRepresentation' => 'composição',
  'plugins.pubIds.doi.editor.customSuffixMissing' => 'O DOI não pode ser atribuído porque o sufixo personalizado está em falta.',
  'plugins.pubIds.doi.editor.patternNotResolved' => 'O DOI não pode ser atribuído porque contém um padrão em conflito.',
  'plugins.pubIds.doi.editor.canBeAssigned' => 'Aquilo que vê é uma visualização prévia do DOI. Marque a caixa de selecção e guarde o formulário para atribuir o DOI.',
  'plugins.pubIds.doi.editor.assigned' => 'O DOI é atribuído a este {$pubObjectType}.',
  'plugins.pubIds.doi.editor.clearObjectsDoi' => 'Limpar DOI',
  'plugins.pubIds.doi.editor.clearObjectsDoi.confirm' => 'Tem a certeza que pretende eliminar este DOI?',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi.confirm' => 'Tem a certeza de que pretende eliminar os DOIs existentes?',
  'plugins.pubIds.doi.editor.assignDoi' => 'Atribuir DOI {$pubId} a esta {$pubObjectType}',
  'plugins.pubIds.doi.editor.assignDoi.emptySuffix' => 'O DOI não pode ser atribuído porque o sufixo personalizado está em falta.',
  'plugins.pubIds.doi.editor.assignDoi.pattern' => 'O DOI {$pubId} não pode ser atribuído porque contém um padrão em conflito.',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide' => 'Atribuir DOI',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide.description' => 'Atribuir DOI a todas as revistas publicadas aos quais ainda não tenham sido atribuídos DOI. Esta ação não pode ser usada com a configuração individual de sufixos. Se mudou a configuração de DOI acima, por favor guarde as suas alterações antes de iniciar esta ação. A atribuição de DOI pode demorar bastante tempo, dependendo do número de objetos publicados neste jornal.',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide.confirm' => 'Tem a certeza que quer atribuir DOI a todos os objetos publicados e aos quais não tenham sido atribuídos DOI?',
  'plugins.pubIds.doi.editor.assignDoi.assigned' => 'O DOI {$pubId} foi atribuído.',
); ?>