<?php return array (
  'plugins.generic.backup.name' => 'Módulo de copia de seguridad',
  'plugins.generic.backup.description' => 'Este módulo genera una copia de seguridad de la instalación.',
  'plugins.generic.backup.link' => 'Descargar copia de seguridad',
  'plugins.generic.backup.longdescription' => '<p>Los enlaces siguientes permiten al administrador del sitio descargar una copia de seguridad completa de varios componentes de la instalación. Una copia de seguridad completa contiene <strong>todos</strong> los siguientes componentes. Le remitimos a la documentación técnica para obtener más información acerca de cómo se relacionan estos componentes.</p>',
  'plugins.generic.backup.db' => 'Base de datos',
  'plugins.generic.backup.files' => 'Archivos',
  'plugins.generic.backup.code' => 'Código',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong>ATENCIÓN:</strong> La herramienta "tar" no ha sido configurada en el archivo de configuración config.inc.php. La configuración dependerá de la configuración de su servidor. Esto debería especificarse en una sección denominada [cli], en una opción de configuración llamada "tar", especificando la ruta a la utilidad "tar", p. ej.:<br />
<pre>[cli]
tar = "/bin/tar"
</pre><br />',
  'plugins.generic.backup.failure' => '<strong>ATENCIÓN: </strong>Podría haberse producido un error durante el proceso de copia de seguridad. La causa más común son los permisos de archivo.',
); ?>