<?php
define('HEADING_TITLE', 'Gestionnaire de sauvegarde des bases de donn&eacute;es');
define('TABLE_HEADING_TITLE', 'Titre');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Taille');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouvelle sauvegarde');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurer le local');
define('TEXT_INFO_NEW_BACKUP', 'N\'interrompez pas le processus de sauvegarde, ce qui pourrait prendre quelques minutes.');
define('TEXT_INFO_UNPACK', '<br /><br />(apr&egrave;s avoir d&eacute;ball&eacute; le fichier de l\'archive)');
define('TEXT_INFO_RESTORE', 'Ne pas interrompre le processus de restauration.<br /><br />Plus la sauvegarde est importante, plus ce processus est long!<br /><br />Si possible, utilisez le client mysql.<br /><br />Par exemple:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Ne pas interrompre le processus de restauration.<br /><br />Plus la sauvegarde est importante, plus ce processus est long!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le fichier t&eacute;l&eacute;charg&eacute; doit &ecirc;tre un fichier sql (texte) brut.');
define('TEXT_INFO_DATE', 'Date:');
define('TEXT_INFO_SIZE', 'Taille:');
define('TEXT_INFO_COMPRESSION', 'Compression:');
define('TEXT_INFO_USE_GZIP', 'Utiliser GZIP');
define('TEXT_INFO_USE_ZIP', 'Utiliser ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Pas de compression (SQL pur)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'T&eacute;l&eacute;chargement uniquement (ne pas stocker c&ocirc;t&eacute; serveur)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Le meilleur moyen est une connexion HTTPS');
define('TEXT_DELETE_INTRO', '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette sauvegarde?');
define('TEXT_NO_EXTENSION', 'Aucune');
define('TEXT_BACKUP_DIRECTORY', 'R&eacute;pertoire des sauvegardes:');
define('TEXT_LAST_RESTORATION', 'Derni&egrave;re restauration:');
define('TEXT_FORGET', '(<u>oublier</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le r&eacute;pertoire de sauvegarde n\'existe pas.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le r&eacute;pertoire de sauvegarde n\'est pas accessible en &eacute;criture.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur : Le lien de t&eacute;l&eacute;chargement n\'est pas acceptable.');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Le succ&egrave;s : La derni&egrave;re date de restauration a &eacute;t&eacute; fix&eacute;e.');
define('SUCCESS_DATABASE_SAVED', 'Le succ&egrave;s : La base de donn&eacute;es a &eacute;t&eacute; sauvegard&eacute;e.');
define('SUCCESS_DATABASE_RESTORED', 'Le succ&egrave;s : La base de donn&eacute;es a &eacute;t&eacute; restaur&eacute;e.');
define('SUCCESS_BACKUP_DELETED', 'Le succ&egrave;s : La sauvegarde a &eacute;t&eacute; supprim&eacute;e.');
define('SUCCESS_BACKUP_UPLOAD', 'Le succ&egrave;s : Le fichier de sauvegarde a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute;.');
//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Compl&eacute;ter 'INSERT's</b><br> - les noms des champs sont saisis dans chaque ligne INSERT (sauvegarde accrue)");
define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" .'<b>Tableaux dans cette sauvegarde:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Aucune information disponible');
//UTF-8 convert
define('TEXT_CONVERT_TO_UTF', 'Convertir la base de donn&eacute;es en UTF-8');
define('TEXT_IMPORT_UTF', 'Restaurer la base de donn&eacute;es UTF-8');
//TEXT_REMOVE_COLLATE
define('TEXT_REMOVE_COLLATE', "<b>Sans encodage \"COLLATE\" et \"DEFAULT CHARSET\"</b><br> - Les instructions d'encodage ne sont pas ins&eacute;r&eacute;es. Utile lors de la migration vers une autre base de donn&eacute;es d'encodage.");
//TEXT_REMOVE_ENGINE
define('TEXT_REMOVE_ENGINE', "<b>Sans moteur de stockage 'ENGINE'</b><br> - Les d&eacute;clarations du moteur de stockage (MyISAM, InnoDB) ne sont pas ins&eacute;r&eacute;es.");
?>