<?php
define('ATTENTION_TITLE','! ATTENTION !');
// text for Warnings:
if (!defined('APS_INSTALL')) { //DokuMan - use alternative text for TEXT_FILE_WARNING when using APS package installation
  define('TEXT_FILE_WARNING_WRITABLE','<b>AVERTISSEMENT:</b><br />Les fichiers suivants sont inscriptibles. Veuillez modifier les autorisations de ces fichiers pour des raisons de s&eacute;curit&eacute;. <b>(444)</b> en unix, <b>(lecture seule)</b> en Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE','<b>AVERTISSEMENT:</b><br />Les fichiers suivants sont inscriptibles. Veuillez modifier les autorisations de ces fichiers pour des raisons de s&eacute;curit&eacute;. <b>(444)</b> en unix, <b>(lecture seule)</b> en Win32.<br />Dans le cas o&ugrave; ce logiciel a &eacute;t&eacute; install&eacute; par un logiciel de votre h&eacute;bergeur, les autorisations de fichiers peuvent devoir &ecirc;tre d&eacute;finies diff&eacute;remment (HostEurope: <b>CHMOD 400</b> or <b>CHMOD 440</b>)');
}
define('TEXT_FILE_WARNING','<b>AVERTISSEMENT:</b><br />Les fichiers suivants doivent &ecirc;tre inscriptibles. Veuillez modifier les autorisations de ces fichiers. <b>(777)</b> en unix, <b>(lecture-&eacute;criture)</b> en Win32.');
define('TEXT_FOLDER_WARNING','<b>AVERTISSEMENT:</b><br />Les dossiers suivants doivent &ecirc;tre inscriptibles. Veuillez modifier les autorisations de ces dossiers. <b>(777)</b> en unix, <b>(read-write)</b> en Win32.');
define('REPORT_GENERATED_FOR','Rapport pour:');
define('REPORT_GENERATED_ON','G&eacute;n&eacute;r&eacute;e le:');
define('FIRST_VISIT_ON','Premi&egrave;re visite:');
define('HEADING_QUICK_STATS','Statistiques rapides');
define('VISITS_TODAY','Visites aujourd\'hui:');
define('UNIQUE_TODAY','Unique aujourd\'hui:');
define('DAILY_AVERAGE','Moyenne journali&egrave;re:');
define('TOTAL_VISITS','Total Visits:');
define('TOTAL_UNIQUE','Total des visites:');
define('TOP_REFFERER','Haut de la page H&ocirc;te de r&eacute;f&eacute;rence:');
define('TOP_ENGINE','Moteur de recherche principal:');
define('DAY_SUMMARY','R&eacute;sum&eacute; des 30 jours:');
define('VERY_LAST_VISITORS','Les 10 derniers visiteurs:');
define('TODAY_VISITORS','Visiteurs d\'aujourd\'hui:');
define('LAST_VISITORS','Les 100 derniers visiteurs:');
define('ALL_LAST_VISITORS','Tous les visiteurs:');
define('DATE_TIME','Date / Heure:');
define('IP_ADRESS','Adresse IP:');
define('OPERATING_SYSTEM','Syst&egrave;me d\'exploitation:');
define('REFFERING_HOST','R&eacute;f&eacute;rencement de l\'h&ocirc;te:');
define('ENTRY_PAGE','Page d\'entr&eacute;e:');
define('HOURLY_TRAFFIC_SUMMARY','R&eacute;sum&eacute; horaire du trafic');
define('WEB_BROWSER_SUMMARY','R&eacute;sum&eacute; du navigateur web');
define('OPERATING_SYSTEM_SUMMARY','R&eacute;sum&eacute; du syst&egrave;me d\'exploitation');
define('TOP_REFERRERS','Les 10 premiers r&eacute;f&eacute;rents');
define('TOP_HOSTS','Les dix premiers h&ocirc;tes');
define('LIST_ALL','&Eacute;num&eacute;rer tout');
define('SEARCH_ENGINE_SUMMARY','R&eacute;sum&eacute; du moteur de recherche');
define('SEARCH_ENGINE_SUMMARY_TEXT',' ( Le pourcentage est bas&eacute; sur le nombre total de visites r&eacute;f&eacute;renc&eacute;es par les moteurs de recherche. )');
define('SEARCH_QUERY_SUMMARY','R&eacute;sum&eacute; de la requ&ecirc;te de recherche');
define('SEARCH_QUERY_SUMMARY_TEXT',' ) ( Le pourcentage est bas&eacute; sur le nombre total de cha&icirc;nes de recherche enregistr&eacute;es. )');
define('REFERRING_URL','Url de r&eacute;f&eacute;rence');
define('HITS','Rendez-vous sur');
define('PERCENTAGE','Pourcentage');
define('HOST','H&ocirc;te');
// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF
// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Orders');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', 'No. de commande:');
define('HEADING_TITLE_STATUS', 'Statut:');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Valeur totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Date de commande');
define('TABLE_HEADING_STATUS', 'Statut');
//define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Quantit&eacute;');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Num&eacute;ro de produit');
define('TABLE_HEADING_PRODUCTS', 'Produit');
define('TABLE_HEADING_TAX', 'TVA');
define('TABLE_HEADING_TOTAL', 'Somme totale');
define('TABLE_HEADING_DATE_ADDED', 'ajout&eacute;:');
define('ENTRY_CUSTOMER', 'Client:');
define('TEXT_DATE_ORDER_CREATED', 'Date de commande:');
define('TEXT_INFO_PAYMENT_METHOD', 'Mode de paiement:');
define('TEXT_VALIDATING','Non valid&eacute;');
define('TEXT_ALL_ORDERS', 'Toutes les commandes');
define('TEXT_NO_ORDER_HISTORY', 'Pas d\'historique de commande disponible');
define('TEXT_DATE_ORDER_LAST_MODIFIED','Derni&egrave;re modification');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS','Total des clients');
define('TOTAL_SUBSCRIBERS','Abonnement &agrave; la newsletter');
define('TOTAL_PRODUCTS_ACTIVE','Produits actifs');
define('TOTAL_PRODUCTS_INACTIVE','Produits inactifs');
define('TOTAL_PRODUCTS','Total des produits');
define('TOTAL_SPECIALS','Specials');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Non attribu&eacute;');
define('TURNOVER_TODAY', 'Chiffre d\'affaires aujourd\'hui');
define('TURNOVER_YESTERDAY', 'Le chiffre d\'affaires d\'hier');
define('TURNOVER_THIS_MONTH', 'ce mois-ci');
define('TURNOVER_LAST_MONTH', 'le mois dernier (tous)');
define('TURNOVER_LAST_MONTH_PAID', 'le dernier mois (pay&eacute;)');
define('TOTAL_TURNOVER', 'Chiffre d\'affaires total');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Bienvenue dans l\'espace administratif');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'En ligne');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Veuillez cliquer sur le nom de l\'utilisateur pour plus de d&eacute;tails***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'En ligne depuis');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Nom');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Dernier clic');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Info');
define('TABLE_CELL_USERS_ONLINE_INFO', 'En savoir plus...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Clients');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(Les 15 derniers)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Nom de famille');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Pr&eacute;nom');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'Enregistr&eacute;');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', '&Eacute;diter');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Commandes');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', '&Eacute;diter...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'Supprimer...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'Voir...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', 'Commandes');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(Les 20 derniers)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Commander #');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Date de commande');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nom du client');
define('TABLE_HEADING_NEW_ORDERS_EDIT', '&Eacute;diter');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'Supprimer');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', 'Vitit le');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', 'Anniversaires');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Clients dont c\'est l\'anniversaire aujourd\'hui');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Anniversaires des clients &agrave; venir ce mois-ci');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_CAPTION_STATISTIC', 'Statistiques');
// security check
// DB Version check
define('ERROR_DB_VERSION_UPDATE', 'AVERTISSEMENT: Votre DB doit &ecirc;tre mise &agrave; jour, veuillez lancer <a href="'.DIR_WS_CATALOG.'_installer/">l\'installateur</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'La base de donn&eacute;es doit &ecirc;tre mise &agrave; jour pour passer de %s &agrave; %s.');
// EMail check
define('ERROR_EMAIL_CHECK', '<strong>AVERTISSEMENT:</strong> L\'adresse &eacute;lectronique suivante semble incorrecte:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');
// security check DB FILE permission
define('WARNING_DB_FILE_PRIVILEGES', '<strong>AVERTISSEMENT:</strong> Les privil&egrave;ges de dossier sont activ&eacute;s dans la base de donn&eacute;es &rsquo;'.DB_DATABASE.'&lsquo;  pour l\'utilisateur &rsquo;'.DB_SERVER_USERNAME.'&lsquo;!');
// register_globals check
define('WARNING_REGISTER_GLOBALS', '<strong>AVERTISSEMENT:</strong> Cette fonctionnalit&eacute; a &eacute;t&eacute; <forte>DEPR&Eacute;C&Eacute;D&Eacute;E</strong> &agrave; partir de PHP 5.3.0 et <forte>R&Eacute;DUITE</strong> &agrave; partir de PHP 5.4.0. Veuillez contacter votre h&eacute;bergeur pour d&eacute;sactiver &quot;register_globals&quot;.');
// domain check
define('WARNING_DOMAIN_INVALID', '<strong>AVERTISSEMENT:</strong> Le domaine de votre boutique n\'a pas pu &ecirc;tre valid&eacute; (Raisons possibles : Format non valide ou nom de domaine internationalis&eacute; (IDN))');
?>