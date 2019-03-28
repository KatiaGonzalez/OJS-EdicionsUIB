<?php return array (
  'plugins.generic.translator.name' => 'Translator Plugin',
  'plugins.generic.translator.description' => 'This plugin allows web-based maintenance of translation files.',
  'plugins.generic.translator.longdescription' => 'This area allows the Site Administrator to build, modify and check translations. This is site-wide and should not be used to customize a single press/journal. If you correct or create a translation, please consider submitting it to the Public Knowledge Project for distribution with future releases.',
  'plugins.generic.translator.localeDescription' => 'This page lists the components of a translation of the software and permits the translator to modify each. A complete translation must include all of these components.',
  'plugins.generic.translator.localeFileContents' => 'Locale File Contents',
  'plugins.generic.translator.localeName' => 'Locale Name',
  'plugins.generic.translator.localeKey' => 'Key',
  'plugins.generic.translator.localeKey.description' => 'Enter an entire locale key to search for.',
  'plugins.generic.translator.localeKeyValue' => 'Value',
  'plugins.generic.translator.translate' => 'Translate',
  'plugins.generic.translator.availableLocales' => 'Available Locales',
  'plugins.generic.translator.check' => 'Check',
  'grid.action.checkLocale' => 'Check Locale',
  'grid.action.download' => 'Download',
  'plugins.generic.translator.localeFile.complete' => 'Complete ({$reference})',
  'plugins.generic.translator.localeFile.incompleteCount' => '{$complete} / {$reference} ({$percent}%)',
  'plugins.generic.translator.localeFile.doesNotExist' => 'Missing ({$reference})',
  'plugins.generic.translator.miscFile.complete' => 'Complete',
  'plugins.generic.translator.miscFile.doesNotExist' => 'Missing',
  'plugins.generic.translator.email.complete' => 'Complete',
  'plugins.generic.translator.email.doesNotExist' => 'Missing',
  'plugins.generic.translator.errors' => 'Locale Errors',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_KEY.title' => 'Missing Keys',
  'plugins.generic.translator.errors.LOCALE_ERROR_EXTRA_KEY.title' => 'Extra Keys',
  'plugins.generic.translator.errors.LOCALE_ERROR_DIFFERING_PARAMS.title' => 'Differing Parameter Lists',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_FILE.title' => 'Missing Locale Files',
  'plugins.generic.translator.errors.EMAIL_ERROR_MISSING_EMAIL.title' => 'Missing Emails',
  'plugins.generic.translator.errors.EMAIL_ERROR_EXTRA_EMAIL.title' => 'Extra Emails',
  'plugins.generic.translator.errors.EMAIL_ERROR_DIFFERING_PARAMS.title' => 'Differing Email Parameter Lists',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_KEY.message' => 'The key "{$key}" is missing from "{$filename}". The English version has been provided as a default.',
  'plugins.generic.translator.errors.LOCALE_ERROR_EXTRA_KEY.message' => 'The key "{$key}" is no longer used and can be removed from "{$filename}".',
  'plugins.generic.translator.errors.LOCALE_ERROR_DIFFERING_PARAMS.message' => 'The locale key "{$key}" in "{$filename}" differs from the reference locale in its use of parameters. Please double-check that it contains all relevant parameters. The mismatching parameter(s) are:',
  'plugins.generic.translator.errors.LOCALE_ERROR_MISSING_FILE.message' => 'The locale file "{$filename}" is missing or unreadable.',
  'plugins.generic.translator.errors.EMAIL_ERROR_MISSING_EMAIL.message' => 'The email message "{$key}" is missing from the translation.',
  'plugins.generic.translator.errors.EMAIL_ERROR_EXTRA_EMAIL.message' => 'The email message "{$key}" is no longer used and can be removed.',
  'plugins.generic.translator.errors.EMAIL_ERROR_DIFFERING_PARAMS.message' => 'The email message "{$key}" differs from the reference locale in its use of parameters. Please double-check that it contains all relevant parameters. The mismatching parameter(s) are:',
  'plugins.generic.translator.jumpTo' => 'Jump To...',
  'plugins.generic.translator.locale' => '{$locale} Locale',
  'plugins.generic.translator.localeFiles' => 'Locale Files',
  'plugins.generic.translator.miscFiles' => 'Miscellaneous Files',
  'plugins.generic.translator.emails' => 'Email Templates',
  'plugins.generic.translator.file.filename' => 'Filename',
  'plugins.generic.translator.file.edit' => 'Editing {$filename}',
  'plugins.generic.translator.email.edit' => 'Editing {$emailKey}',
  'plugins.generic.translator.file.reference' => 'Reference Version',
  'plugins.generic.translator.file.translation' => 'Translation',
  'plugins.generic.translator.email.reference' => 'Reference Version',
  'plugins.generic.translator.email.translation' => 'Translation',
  'plugins.generic.translator.file.reset' => 'Reset',
  'plugins.generic.translator.file.resetToReference' => 'Reset To Reference',
  'plugins.generic.translator.email.reset' => 'Reset',
  'plugins.generic.translator.email.resetToReference' => 'Reset To Reference',
  'plugins.generic.translator.file.resetConfirm' => 'Are you sure you wish to reset the file contents?',
  'plugins.generic.translator.email.resetConfirm' => 'Are you sure you wish to reset the email contents?',
  'plugins.generic.translator.file.doesNotExistNote' => '* This file has not yet been translated.',
  'plugins.generic.translator.email.description' => 'In the following fields, translate the email template\'s Title, Body, and Description. The Description is for the Manager\'s reference only.',
  'plugins.generic.translator.confirmDelete' => 'Are you sure you wish to delete this item? This action cannot be undone.',
  'plugins.generic.translator.deleteKey' => 'Delete this key',
  'plugins.generic.translator.deleteEmail' => 'Delete this email',
  'plugins.generic.translator.saveBeforeContinuing' => 'Be sure to save any changes made on this page before continuing or they will be lost. Do you wish to continue? If so, any unsaved changes will be lost.',
  'plugins.generic.translator.couldNotWriteFile' => 'Could not write the file "{$filename}". Double-check that file permissions are set correctly.',
  'plugins.generic.translator.errorEditingFile' => 'There was a problem editing the file "{$filename}". Double-check to ensure that it follows the expected format.',
); ?>