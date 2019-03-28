<?php return array (
  'plugins.generic.backup.name' => 'Plugin de Cópias de Segurança',
  'plugins.generic.backup.description' => 'Este plugin cria uma cópia de segurança da instalação.',
  'plugins.generic.backup.link' => 'Download da Cópia de Segurança',
  'plugins.generic.backup.longdescription' => '<p>As ligações seguintes permitem ao Administrador do Sítio descarregar uma cópia de segurança completa dos vários componentes de uma instalação. Uma cópia de segurança completa inclui <strong>todos</strong> os seguintes componentes. Consulte a documentação técnica para mais informação de como estes componentes se inter-relacionam.</p>',
  'plugins.generic.backup.db' => 'Base de Dados',
  'plugins.generic.backup.files' => 'Ficheiros',
  'plugins.generic.backup.code' => 'Código',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong>AVISO:</strong> A ferramenta "tar" não foi configurada no ficheiro de configuração  config.inc.php. A configuração irá depender da configuração do seu servidor, pelo que o deverá especificar numa secção denominada [cli], numa opção de configuração chamada "tar", especificando o caminho completo para esta ferramenta:<br />
<pre>[cli]
tar = "/bin/tar"
</pre><br />',
  'plugins.generic.backup.failure' => '<strong>AVISO:</strong> Deverá ter ocorrido um erro durante o processo de criação da cópia de segurança. A causa mais provável será a inexistência de permissões para armazenar o ficheiro.',
); ?>