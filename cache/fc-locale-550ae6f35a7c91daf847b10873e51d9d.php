<?php return array (
  'admin.hostedJournals' => 'Revistes allotjades',
  'admin.settings.journalRedirect' => 'Redirecció a la revista',
  'admin.settings.options' => 'Opcions',
  'admin.settings.journalRedirectInstructions' => 'Les peticions al lloc web principal són redireccionades a aquesta revista. Això pot ser útil si el lloc web únicament allotja una sola revista, per exemple.',
  'admin.settings.noJournalRedirect' => 'No redireccionis',
  'admin.settings.defaultMetricDescription' => 'La vostra instal·lació de l\'OJS està configurada per registrar més d\'una mètrica d\'utilització. Les estadístiques d\'utilització es mostren en diferents contexts. Hi ha casos on només es fa servir una estadística d\'ús, p. ex. per mostrar una llista ordenada dels articles més utilitzats o per ordenar resultats d\'una cerca. Seleccioneu una de les mètriques configurades com a opció predeterminada.',
  'admin.languages.primaryLocaleInstructions' => 'Aquesta és la llengua predeterminada per al lloc web i per a qualsevol revista allotjada.',
  'admin.languages.supportedLocalesInstructions' => 'Seleccioneu totes les configuracions regionals que oferirà el lloc web. Les configuracions regionals seleccionades estan disponibles per al seu ús a totes les revistes allotjades al lloc web, i també apareixen a un menú de selecció d\'idioma disponible a cada pàgina del lloc web (que es pot desactivar en pàgines concretes de les revistes). Si no se seleccionen diferents configuracions regionals, el menú de selecció de llengua no apareix i la configuració avançada de llengua no està disponible a les revistes.',
  'admin.locale.maybeIncomplete' => 'Les configuracions regionals marcades poden estar incompletes.',
  'admin.languages.confirmUninstall' => 'Esteu segurs que voleu suprimir aquesta configuració regional? Aquesta acció pot afectar les revistes allotjades que fan servir aquesta configuració regional.',
  'admin.languages.installNewLocalesInstructions' => 'Seleccioneu les llengües addicionals que vulgueu utilitzar en aquest sistema. Cal que instal·leu les configuracions regionals abans que les revistes allotjades les puguin fer servir. Consulteu la documentació de l\'OJS per obtenir més informació sobre com instal·lar llengües addicionals.',
  'admin.languages.downloadFailed' => 'La descàrrega de la configuració regional ha fallat. El missatge d\'error a continuació descriu el problema.',
  'admin.languages.localeInstalled' => 'La configuració regional "{$locale}" s\'ha instal·lat.',
  'admin.languages.download' => 'Descarrega la configuració regional',
  'admin.languages.download.cannotOpen' => 'No s\'ha pogut obrir el descriptor de llengua des del lloc web de PKP.',
  'admin.languages.download.cannotModifyRegistry' => 'No s\'ha pogut afegir la nova configuració regional al fitxer de registre de configuracions regionals, normalment «registry/locales.xml».',
  'admin.auth.ojs' => 'Base de dades d\'usuaris/àries de l\'OJS',
  'admin.auth.enableSyncProfiles' => 'Habilita la sincronització de perfils d\'usuari/ària (si ho admet aquest connector d\'autenticació). La informació del perfil d\'usuari/ària s\'actualitza automàticament des de la font remota quan un usuari/ària inicia la sessió, i els canvis al perfil (també els canvis de contrasenya) fets dins de l\'OJS s\'actualitzen automàticament a la font remota. Si aquesta opció no està habilitada, la informació de perfil de l\'OJS es mantindrà separada de la de la font remota.',
  'admin.auth.enableSyncPasswords' => 'Habilita la modificació de contrasenyes d\'usuari/ària (si ho admet aquest connector d\'autenticació). L\'habilitació d\'aquesta opció permet que els usuaris/àries modifiquin la seva contrasenya de l\'OJS i facin servir la característica «recuperar contrasenya» per restablir la contrasenya oblidada. Si no s\'habilita l\'opció, aquestes funcions no estan disponibles pels usuaris/àries amb aquesta font d’autenticació.',
  'admin.auth.enableCreateUsers' => 'Habilita la creació d\'usuaris/àries (si ho admet aquest connector d\'autenticació). Els usuaris/àries creats a l\'OJS amb aquesta font d\'autenticació s\'afegeixen automàticament a la font d’autenticació remota si és que encara no hi són. A més, si aquesta font és la font d\'autenticació predeterminada, els comptes de l\'OJS creats mitjançant el registre d\'usuaris/àries també s\'afegeixen a la font d\'autenticació remota.',
  'admin.systemVersion' => 'Versió de l\'OJS',
  'admin.systemConfiguration' => 'Configuració de l\'OJS',
  'admin.systemConfigurationDescription' => 'Configuració de l\'OJS a <tt>config.inc.php</tt>.',
  'admin.journals.journalSettings' => 'Configuració de la revista',
  'admin.journals.noneCreated' => 'No s\'ha creat cap revista.',
  'admin.contexts.confirmDelete' => 'Esteu segurs que voleu suprimir aquesta revista i els seus continguts de manera permanent?',
  'admin.contexts.create' => 'Crea una revista',
  'admin.journals.createInstructions' => 'Rebreu automàticament el rol de director d\'aquesta revista. Després de crear una revista nova, entreu-hi com a administradors per continuar amb la configuració i l\'alta d\'usuaris/àries.',
  'admin.journals.urlWillBe' => 'Introduïu una paraula curta o un acrònim que identifiqui la revista. L\'URL de la revista és {$sampleUrl}',
  'admin.contexts.form.pathRequired' => 'Cal que introduïu una ruta.',
  'admin.contexts.form.pathAlphaNumeric' => 'La ruta només pot contenir caràcters alfanumèrics, guions baixos i guionets i ha de començar i acabar amb un caràcter alfanumèric.',
  'admin.contexts.form.pathExists' => 'Ja hi ha una altra revista que utilitza la ruta seleccionada.',
  'admin.journals.enableJournalInstructions' => 'Permet que aquesta revista aparegui públicament al lloc web',
  'admin.journals.journalDescription' => 'Descripció de la revista',
  'admin.journal.pathImportInstructions' => 'Ruta existent a la revista o ruta que s\'ha de crear (p. ex., «ojs»).',
  'admin.journals.importSubscriptions' => 'Importa subscripcions',
  'admin.journals.transcode' => 'Metadades de l\'article Transcode de l’ISO8859-1',
  'admin.journals.redirect' => 'Genera el codi per mapar els URL OJS 1 amb els URL OJS 2',
  'admin.journals.form.importPathRequired' => 'Cal que introduïu una ruta d\'importació.',
  'admin.journals.importErrors' => 'La importació no s\'ha completat.',
  'admin.mergeUsers' => 'Fusiona els usuaris/àries',
  'admin.mergeUsers.mergeUser' => 'Fusiona l’usuari/ària',
  'admin.mergeUsers.into.description' => 'Seleccioneu l’usuari/ària al qual vulgueu assignar les autories, encàrrecs d’edició, etc. de l’usuari/ària anterior.',
  'admin.mergeUsers.from.description' => 'Seleccioneu un usuari/ària (o més d\'un) que vulgueu fusionar amb un altre compte d’usuari/ària (p. ex, un usuari/ària que en tingui dos de diferents). Amb aquesta acció se suprimeix el primer compte (o el primer grup de comptes) que hàgiu seleccionat i les seves trameses, assignacions, etc., s’assignen al segon compte.',
  'admin.mergeUsers.allUsers' => 'Tots els usuaris/àries donats d’alta',
  'admin.mergeUsers.confirm' => 'Esteu segurs que voleu fusionar el comptes seleccionats {$oldAccountCount} amb el compte amb nom d’usuari/ària «{$newUsername}»? Si ho feu, els comptes amb el nom d’usuari/ària {$oldAccountCount} ja no existiran. Aquesta acció no es pot desfer.',
  'admin.mergeUsers.noneEnrolled' => 'No s’ha donat d’alta cap usuari/ària.',
  'admin.categories' => 'Categories',
  'admin.categories.enable.description' => 'L\'Administrador/a del lloc web pot definir un grup de categories per ajudar a organitzar grups grans de revistes. Els Administradors/ores de revistes poden triar diverses d\'aquestes categories per a cada revista, i els lectors/ores poden navegar a través de col·leccions de revistes agrupades per categoria.',
  'admin.categories.disableCategories' => 'No organitzis revistes en categories.',
  'admin.categories.enableCategories' => 'Permet que els Administradors/ores de revistes les organitzin en categories.',
  'admin.categories.editTitle' => 'Edita una categoria',
  'admin.categories.createTitle' => 'Crea una categoria',
  'admin.categories.create' => 'Crea una nova categoria',
  'admin.categories.noneCreated' => 'No s\'ha creat cap categoria.',
  'admin.categories.confirmDelete' => 'Esteu segurs que voleu suprimir aquesta categoria?',
  'admin.categories.name' => 'Nom',
  'admin.categories.nameRequired' => 'Cal que introduïu un nom de categoria.',
  'admin.languages.confirmDisable' => 'Esteu segur que voleu desactivar aquesta configuració regional? Això podria afectar a totes les revistes allotjades que actualment utilitzin aquesta configuració regional.',
  'admin.languages.downloadUnavailable' => '<p>La descàrrega de paquets d\'idiomes des del servidor web de Public Knowledge Project no està disponible actualment perquè:</p>
	<ul>
		<li>El seu servidor no té o no permet l\'execució de la utilitat GNU "tar".</li>
		<li>OJS no pot modificar l\'arxiu de registre de configuració regional, normalment "registry/locales.xml".</li>
	</ul>
<p>Els paquets d\'idiomes poden descarregarse manualment des de la pàgina web de PKP: <a href="http://pkp.sfu.ca"></a>.</p>',
  'admin.presses.createInstructions' => 'Sereu registrat automàticament com a gestor d\'aquesta revista. Després de la creació de la nova revista, se\'l redirigirà cap a l\'assistent de configuració per completar la instal·lació inicial de la revista.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Recordatori de caducitat de la subscripció',
  'admin.scheduledTask.openAccessNotification' => 'Notificació d\'accés obert',
  'admin.scheduledTask.reviewReminder' => 'Recordatori de revisió',
  'admin.contexts.form.titleRequired' => 'Es necessita un títol.',
); ?>