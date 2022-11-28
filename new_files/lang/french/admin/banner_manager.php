<?php
define('HEADING_TITLE', 'Gestionnaire de banni&egrave;re');
define('TABLE_HEADING_BANNERS', 'Banni&egrave;res');
define('TABLE_HEADING_GROUPS', 'Groupes');
define('TABLE_HEADING_STATISTICS', 'Affichages / Clics');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_LANGUAGE', 'Langue');
define('TABLE_HEADING_SORT', 'Triage');
define('TABLE_HEADING_IMAGE', 'Image');
define('TEXT_BANNERS_TITLE', 'Titre de la banni&egrave;re:');
define('TEXT_BANNERS_URL', 'URL de la banni&egrave;re:');
define('TEXT_BANNERS_URL_NOTE', 'URL cible lors du clic sur la banni&egrave;re.'); 
define('TEXT_BANNERS_REDIRECT', 'Lien direct:'); 
define('TEXT_BANNERS_REDIRECT_NOTE', 'La banni&egrave;re sera li&eacute;e directement &agrave; l\'URL de la banni&egrave;re donn&eacute;e et non en utilisant "redirect.php?action=banner&goto=xxx".<br /><strong>CAUTION:</strong>"Affichages / Clics" ne peuvent plus &ecirc;tre compt&eacute;s si le "Direct Linking" est activ&eacute; !');

define('TEXT_BANNERS_GROUP', 'Groupe de banni&egrave;res:');
define('TEXT_BANNERS_NEW_GROUP', 'Choisissez un groupe de banni&egrave;res existant (s\'il existe) ou entrez un nouveau groupe de banni&egrave;res ci-dessous.');
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Pour afficher une banni&egrave;re dans le mod&egrave;le, le mod&egrave;le doit &ecirc;tre &eacute;tendu<br/>Exemple : Banner Group banner , la banni&egrave;re peut &ecirc;tre affich&eacute;e dans le mod&egrave;le dans l\'index.html avec ${BANNER}');
define('TEXT_BANNERS_IMAGE', 'Image:');
define('TEXT_BANNERS_IMAGE_MOBILE', 'L\'image mobile:'); 
define('TEXT_BANNERS_IMAGE_LOCAL', 'Choisissez l\'image souhait&eacute;e en cliquant sur le bouton "Parcourir" ou choisissez une banni&egrave;re existante ci-dessous.<br /><strong>Allocations autoris&eacute;es:</strong> jpg, jpeg, jpe, gif, png, bmp, tiff, tif, bmp, swf, cab');
define('TEXT_BANNERS_IMAGE_TARGET', 'Cible de l\'image (Enregistrer vers):');
define('TEXT_BANNERS_HTML_TEXT', 'Texte HTML:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Ici, vous pouvez entrer directement un code HTML que vous avez re&ccedil;u d\'un service affili&eacute; pour afficher la banni&egrave;re.');
define('TEXT_BANNERS_EXPIRES_ON', 'Expire le:');
define('TEXT_BANNERS_OR_AT', ', ou &agrave;');
define('TEXT_BANNERS_IMPRESSIONS', 'impressions / aper&ccedil;us.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Pr&eacute;vue &agrave;:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Notes de la banni&egrave;re:</b><ul><li>Utilisez une image ou un texte HTML pour la banni&egrave;re - pas les deux.</li><li>HTML Le texte a la priorit&eacute; sur une image</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Notes sur les images:</b><ul><li>Les r&eacute;pertoires de t&eacute;l&eacute;chargement doivent &ecirc;tre correctement configur&eacute;s pour les utilisateurs (en &eacute;criture)!</li><li>Ne remplissez pas le champ "Enregistrer vers" si vous ne t&eacute;l&eacute;chargez pas une image sur le serveur web (c\'est-&agrave;-dire si vous utilisez une image locale (c&ocirc;t&eacute; serveur)).</li><li>Le champ "&eacute;conomiser pour" doit &ecirc;tre un r&eacute;pertoire existant avec une barre oblique &agrave; la fin (par exemple, banni&egrave;res/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Notes d\'expiration:</b><ul><li>Un seul des deux champs doit &ecirc;tre soumis</li><li>Si la banni&egrave;re ne doit pas expirer automatiquement, laissez ces champs vides</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Notes sur le calendrier:</b><ul><li>Si un horaire est fix&eacute;, la banni&egrave;re sera activ&eacute;e &agrave; cette date.</li><li>Toutes les banni&egrave;res programm&eacute;es sont marqu&eacute;es comme inactives jusqu\'&agrave; l\'arriv&eacute;e de leur date, &agrave; laquelle elles seront alors marqu&eacute;es comme actives.</li></ul>');
define('TEXT_BANNERS_DATE_ADDED', 'Date d\'ajout:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Pr&eacute;vue &agrave;: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Expire &agrave;: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Expire &agrave;: <b>%s</b> impressions');
define('TEXT_BANNERS_STATUS_CHANGE', 'Changement de statut: %s');
define('TEXT_BANNERS_DATA', 'D<br />O<br />N<br />N<br />&Eacute;<br />E<br />S');
define('TEXT_BANNERS_LAST_3_DAYS', 'Les 3 derniers jours');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner Views');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clics de banni&egrave;re');
define('TEXT_BANNERS_SORT', 'Triage:');
define('TEXT_BANNERS_SORT_NOTE', 'La commande ne concerne que les curseurs dynamiques et non les banni&egrave;res statiques.');
define('TEXT_INFO_DELETE_INTRO', '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette banni&egrave;re?');
define('TEXT_INFO_DELETE_IMAGE', 'Supprimer l\'image de la banni&egrave;re');
define('SUCCESS_BANNER_INSERTED', 'Le succ&egrave;s : La banni&egrave;re a &eacute;t&eacute; ins&eacute;r&eacute;e.');
define('SUCCESS_BANNER_UPDATED', 'Le succ&egrave;s : La banni&egrave;re a &eacute;t&eacute; mise &agrave; jour.');
define('SUCCESS_BANNER_REMOVED', 'Le succ&egrave;s : La banni&egrave;re a &eacute;t&eacute; retir&eacute;e.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Le succ&egrave;s : Le statut de la banni&egrave;re a &eacute;t&eacute; mis &agrave; jour.');
define('ERROR_BANNER_TITLE_REQUIRED', 'Erreur : Titre de la banni&egrave;re requis.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Erreur : Groupe de banni&egrave;res requis.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Erreur : Image de la banni&egrave;re ou texte HTML requis.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le r&eacute;pertoire cible n\'existe pas: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le r&eacute;pertoire cible n\'est pas accessible en &eacute;criture: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Erreur : L\'image n\'existe pas.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Erreur : L\'image ne peut pas &ecirc;tre supprim&eacute;e.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Erreur : Drapeau de statut inconnu.');
define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le r&eacute;pertoire des graphiques n\'existe pas. Veuillez cr&eacute;er un r&eacute;pertoire "graphs" &agrave; l\'int&eacute;rieur de "images".');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le r&eacute;pertoire des graphiques n\'est pas accessible en &eacute;criture.');
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'AAAA-MM-JJ');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_LANGUAGE', 'Langue:');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'S&eacute;lectionnez la langue dans laquelle la banni&egrave;re doit &ecirc;tre affich&eacute;e?');
define('TEXT_NO_FILE', '-- pas de fichier --');
define('TEXT_BANNERS_LATEST_STATISTICS', '%s Jours Statistiques');

?>