<?php

@setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR@euro', 'fr_FR', 'fr-FR', 'fr', 'fr_FR.ISO_8859-1', 'French','fr_FR.ISO_8859-15');
define('DATE_LOCALE', 'fr_FR');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}
require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_LANGUAGES.'french/extra/admin/','php') as $file) require ($file);
// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="fr"');
// page title
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'undefined');
// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de soutien');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogue en ligne');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');
// text for gender
define('MALE', 'M.');
define('FEMALE', 'Mme /Mme.');
define('DIVERSE', 'Diversit&eacute;');
// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');
// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION','Configuration');
define('BOX_HEADING_MODULES','Modules');
define('BOX_HEADING_PARTNER_MODULES','Modules partenaires');
define('BOX_HEADING_ZONE','Zones/Taxes');
define('BOX_HEADING_CUSTOMERS','Clients');
define('BOX_HEADING_PRODUCTS','Catalogue');
define('BOX_HEADING_STATISTICS','Statistiques');
define('BOX_HEADING_TOOLS','Outils');
define('BOX_HEADING_LOCALIZATION', 'Langues/Devises');
define('BOX_HEADING_TEMPLATES','Mod&egrave;les');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lieu/taxe');
define('BOX_HEADING_CATALOG', 'Catalogue');
define('BOX_MODULE_NEWSLETTER','Bulletin d\'information');
define('BOX_CONTENT','Gestionnaire de contenu');
define('TEXT_ALLOWED', 'Autorisation');
define('TEXT_ACCESS', 'Surface utilisable');
define('BOX_CONFIGURATION', 'Options g&eacute;n&eacute;rales');
define('BOX_CONFIGURATION_1', 'Ma boutique');
define('BOX_CONFIGURATION_2', 'Valeurs minimales');
define('BOX_CONFIGURATION_3', 'Valeurs maximales');
define('BOX_CONFIGURATION_4', 'Options d\'image');
define('BOX_CONFIGURATION_5', 'D&eacute;tails sur le client');
define('BOX_CONFIGURATION_6', 'Options des modules');
define('BOX_CONFIGURATION_7', 'Options d\'exp&eacute;dition');
define('BOX_CONFIGURATION_8', 'Options de listage des produits');
define('BOX_CONFIGURATION_9', 'Options sur actions');
define('BOX_CONFIGURATION_10', 'Options d\'enregistrement');
define('BOX_CONFIGURATION_11', 'Options de cache');
define('BOX_CONFIGURATION_12', 'Options de courrier &eacute;lectronique');
define('BOX_CONFIGURATION_13', 'Options de t&eacute;l&eacute;chargement');
define('BOX_CONFIGURATION_14', 'Compression');
define('BOX_CONFIGURATION_15', 'Sessions');
define('BOX_CONFIGURATION_16', 'M&eacute;ta-tags/moteurs de recherche');
define('BOX_CONFIGURATION_17', 'Modules suppl&eacute;mentaires');
define('BOX_CONFIGURATION_18', 'Num&eacute;ro d\'enregistrement TVA');
define('BOX_CONFIGURATION_19', 'Partenaire');
define('BOX_CONFIGURATION_22', 'Options de recherche');
define('BOX_CONFIGURATION_24', 'Google, Matomo &amp; Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Popupvenster Opties');
define('BOX_CONFIGURATION_1000', 'Mijn Admin');
define('BOX_MODULES', 'Betalings-/ verzend-/factuurmodules');
define('BOX_PAYMENT', 'Betalingswijzen');
define('BOX_SHIPPING', 'Verzendmethoden');
define('BOX_ORDER_TOTAL', 'Bestelling Totaal');
define('BOX_CATEGORIES', 'Categorie&euml;n/producten');
define('BOX_PRODUCTS_ATTRIBUTES', 'Productopties');
define('BOX_MANUFACTURERS', 'Fabrikanten');
define('BOX_REVIEWS', 'Examens de produits');
define('BOX_CAMPAIGNS', 'Campagnes');
define('BOX_XSELL_PRODUCTS', 'Marketing crois&eacute;');
define('BOX_SPECIALS', 'Prix sp&eacute;ciaux');
define('BOX_PRODUCTS_EXPECTED', 'Offres attendues');
define('BOX_CUSTOMERS', 'Clients');
define('BOX_ACCOUNTING', 'Autorisations d\'admission');
define('BOX_CUSTOMERS_STATUS','Groupes de clients');
define('BOX_ORDERS', 'Commandes');
define('BOX_COUNTRIES', 'Pays');
define('BOX_ZONES', 'Zones');
define('BOX_GEO_ZONES', 'Zones fiscales');
define('BOX_TAX_CLASSES', 'Classes d\'imposition');
define('BOX_TAX_RATES', 'Taux d\'imposition');
define('BOX_HEADING_REPORTS', 'Rapports');
define('BOX_PRODUCTS_VIEWED', 'Produits consult&eacute;s');
define('BOX_STOCK_WARNING','Informations sur les actions');
define('BOX_PRODUCTS_PURCHASED', 'Produits vendus');
define('BOX_STATS_CUSTOMERS', 'Statistiques sur les ventes');
define('BOX_BACKUP', 'Gestionnaire de la base de donn&eacute;es');
define('BOX_BANNER_MANAGER', 'Gestionnaire de banni&egrave;re');
define('BOX_CACHE', 'Contr&ocirc;le des caches');
define('BOX_DEFINE_LANGUAGE', 'D&eacute;finitions des langues');
define('BOX_FILE_MANAGER', 'Gestionnaire de fichiers');
define('BOX_MAIL', 'Centre de courrier &eacute;lectronique');
define('BOX_NEWSLETTERS', 'Responsable de la notification');
define('BOX_SERVER_INFO', 'Informations sur le serveur');
define('BOX_WHOS_ONLINE', 'Qui est en ligne');
define('BOX_TPL_BOXES','Ordre de tri des bo&icirc;tes');
define('BOX_CURRENCIES', 'Monnaies');
define('BOX_LANGUAGES', 'Langues');
define('BOX_ORDERS_STATUS', '&eacute;tat de la commande');
define('BOX_ATTRIBUTES_MANAGER','Gestionnaire des attributs');
define('BOX_SHIPPING_STATUS','Statut de l\'exp&eacute;dition');
define('BOX_SALES_REPORT','Rapport sur les ventes');
define('BOX_MODULE_EXPORT','Modules d\'exportation');
define('BOX_MODULE_SYSTEM','Modules du syst&egrave;me');
define('BOX_HEADING_GV_ADMIN', 'Bons / coupons');
define('BOX_GV_ADMIN_QUEUE', 'Cueillette de bons d\'achat de poisons');
define('BOX_GV_ADMIN_MAIL', 'Ch&egrave;que cadeau par courrier');
define('BOX_GV_ADMIN_SENT', 'Envoi de bons d\'achat antipoison');
define('BOX_COUPON_ADMIN','Administration des coupons');
define('BOX_TOOLS_BLACKLIST','Liste noire des cartes de cr&eacute;dit');
define('BOX_IMPORT','Importation / Exportation'); 
define('BOX_PRODUCTS_VPE','Unit&eacute; d\'emballage');
define('BOX_CAMPAIGNS_REPORT','Rapport de campagne');
define('BOX_ORDERS_XSELL_GROUP','Groupes de vente crois&eacute;e');
define('BOX_REMOVEOLDPICS','Supprimer les anciennes photos'); // Remove old pictures - franky_n - 20110105
define('BOX_JANOLAW','janolaw AGB H&eacute;bergement'); // Tomcraft - 2011-06-17 - Added janolaw AGB hosting service
define('BOX_HAENDLERBUND','H&auml;ndlerbund AGB Service'); // Tomcraft - 2012-12-08 - Added haendlerbund AGB interface
define('BOX_SHOP','Boutique');
define('BOX_LOGOUT','D&eacute;connexion');
define('BOX_CREDITS','Cr&eacute;dits');
define('BOX_UPDATE','V&eacute;rifier la version');
define('BOX_GV_CUSTOMERS','Clients Cr&eacute;dit');
define('BOX_IT_RECHT_KANZLEI', 'Cabinet d\'avocats sp&eacute;cialis&eacute; dans les technologies de l\'information');
define('BOX_PROTECTEDSHOPS', 'Magasins prot&eacute;g&eacute;s - Service AGB');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Boutique hors ligne');
define('BOX_LOGS', 'Fichiers journaux');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - ramassage');
define('BOX_PRODUCTS_TAGS', 'Caract&eacute;ristiques du produit');
define('BOX_TRUSTEDSHOPS', 'Magasins de confiance');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinataires du bulletin d\'information');
define('BOX_DSGVO_EXPORT', 'PIBR Exportation');
define('BOX_SUPPORT', 'Soutien');
define('BOX_CACHING', 'Caching');
define('BOX_COOKIE_CONSENT', 'Consentement aux cookies');
define('BOX_SEMKNOX', 'Recherche de site 360 Recherche de produits');
define('BOX_PAGES_CONTENT', 'Pages de contenu');
define('BOX_PRODUCTS_CONTENT', 'Article Annexe');
define('BOX_CONTENT_CONTENT', 'Annexe au contenu');
define('BOX_EMAIL_CONTENT', 'E-mail annexes');
define('BOX_DHL', 'Exp&eacute;dition DHL &amp ; cr&eacute;ation d\'&eacute;tiquettes');


define('TXT_GROUPS','<b>Groupes</b>:');
define('TXT_SYSTEM','Syst&egrave;me');
define('TXT_CUSTOMERS','Clients/commandes');
define('TXT_PRODUCTS','Produits/Cat&eacute;gories');
define('TXT_STATISTICS','Statistiques');
define('TXT_TOOLS','Outils');
define('TEXT_ACCOUNTING','Acc&egrave;s administratif pour:');
/******* SHOPGATE **********/
if (is_file(DIR_FS_CATALOG.'includes/external/shopgate/base/lang/french/admin/french.php')) {
  include_once (DIR_FS_CATALOG.'includes/external/shopgate/base/lang/french/admin/french.php');
}
/******* SHOPGATE **********/
// javascript messages
define('JS_ERROR', 'Une erreur s\'est produite pendant le traitement de votre formulaire!\nVeuillez apporter les corrections suivantes:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* Le nouvel attribut du produit a besoin d\'une valeur de prix\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Le nouvel attribut du produit a besoin d\'un pr&eacute;fixe de prix (+/-)\n');
define('JS_PRODUCTS_NAME', '* Le nouveau produit a besoin d\'un nom\n');
define('JS_PRODUCTS_DESCRIPTION', '* Le nouveau produit a besoin d\'une description\n');
define('JS_PRODUCTS_PRICE', '* Le nouveau produit a besoin d\'une valeur de prix\n');
define('JS_PRODUCTS_WEIGHT', '* Le nouveau produit a besoin d\'une valeur de poids\n');
define('JS_PRODUCTS_QUANTITY', '* Le nouveau produit a besoin d\'une valeur quantitative\n');
define('JS_PRODUCTS_MODEL', '* Le nouveau produit a besoin d\'une valeur mod&egrave;le\n');
define('JS_PRODUCTS_IMAGE', '* Le nouveau produit a besoin d\'une valeur d\'image\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Un nouveau prix doit &ecirc;tre fix&eacute; pour ce produit\n');
define('JS_GENDER', '* La valeur de la \'Salutation\' doit &ecirc;tre choisie.\n');
define('JS_FIRST_NAME', '* L\'entr&eacute;e \'Pr&eacute;nom\' doit comporter au moins  ' . (defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? ENTRY_FIRST_NAME_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_LAST_NAME', '* L\'entr&eacute;e \'Nom de famille\' doit comporter au moins ' . (defined('ENTRY_LAST_NAME_MIN_LENGTH') ? ENTRY_LAST_NAME_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_DOB', '* L\'entr&eacute;e \'Date de naissance\' doit &ecirc;tre au format: xx/xx/xxxx (date/mois/ann&eacute;e).\n');
define('JS_EMAIL_ADDRESS', '* L\'entr&eacute;e \'Adresse &eacute;lectronique\' doit avoir au moins ' . (defined('ENTRY_EMAIL_ADDRESS_MIN_LENGTH') ? ENTRY_EMAIL_ADDRESS_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_ADDRESS', '* L\'entr&eacute;e \'Adresse de la rue\' doit avoir au moins ' . (defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? ENTRY_STREET_ADDRESS_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_POST_CODE', '* L\'entr&eacute;e \'Code postal\' doit comporter au moins ' . (defined('ENTRY_POSTCODE_MIN_LENGTH') ? ENTRY_POSTCODE_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_CITY', '* L\'entr&eacute;e \'Ville\' doit avoir au moins ' . (defined('ENTRY_CITY_MIN_LENGTH') ? ENTRY_CITY_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_STATE', '* L\'entr&eacute;e \'&Eacute;tat\' doit &ecirc;tre s&eacute;lectionn&eacute;e.\n');
define('JS_STATE_SELECT', '-- S&eacute;lectionnez ci-dessus --');
define('JS_ZONE', '* L\'entr&eacute;e \'&Eacute;tat\' doit &ecirc;tre s&eacute;lectionn&eacute;e dans la liste pour ce pays.');
define('JS_COUNTRY', '* La valeur \'Pays\' doit &ecirc;tre choisie.\n');
define('JS_TELEPHONE', '* L\'entr&eacute;e \'Num&eacute;ro de t&eacute;l&eacute;phone\' doit comporter au moins ' . (defined('ENTRY_TELEPHONE_MIN_LENGTH') ? ENTRY_TELEPHONE_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_PASSWORD', '* Les entr&eacute;es \'Mot de passe\' et \'Confirmation\' doivent correspondre et comporter au moins ' . (defined('ENTRY_PASSWORD_MIN_LENGTH') ? ENTRY_PASSWORD_MIN_LENGTH : 0) . ' caract&egrave;res.\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Le num&eacute;ro d\'ordre %s n\'existe pas!');
define('CATEGORY_PERSONAL', 'Personnel');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Contactez');
define('CATEGORY_COMPANY', 'Soci&eacute;t&eacute;');
define('CATEGORY_OPTIONS', 'Plus d\'options');
define('ENTRY_GENDER', 'Salutation:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_FIRST_NAME', 'Pr&eacute;nom:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? ENTRY_FIRST_NAME_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_LAST_NAME', 'Nom de famille:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_LAST_NAME_MIN_LENGTH') ? ENTRY_LAST_NAME_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(e.g. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse &eacute;lectronique:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_EMAIL_ADDRESS_MIN_LENGTH') ? ENTRY_EMAIL_ADDRESS_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Adresse &eacute;lectronique invalide! (Nous ne supportons pas actuellement les tr&eacute;mas allemands dans les adresses e-mail.)</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Cette adresse e-mail existe d&eacute;j&agrave;!</span>');
define('ENTRY_COMPANY', 'Nom de la soci&eacute;t&eacute;:');
define('ENTRY_STREET_ADDRESS', 'Adresse:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? ENTRY_STREET_ADDRESS_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_SUBURB', 'Ajout &agrave; l\'adresse:');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_POSTCODE_MIN_LENGTH') ? ENTRY_POSTCODE_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_CITY', 'Ville:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_CITY_MIN_LENGTH') ? ENTRY_CITY_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_STATE', '&Eacute;tat:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requis</font></small>');
define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', 'Veuillez choisir votre pays.');
define('ENTRY_TELEPHONE_NUMBER', 'Num&eacute;ro de t&eacute;l&eacute;phone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min. ' . (defined('ENTRY_TELEPHONE_MIN_LENGTH') ? ENTRY_TELEPHONE_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_FAX_NUMBER', 'Num&eacute;ro de fax:');
define('ENTRY_NEWSLETTER', 'Bulletin d\'information:');
define('ENTRY_CUSTOMERS_STATUS', 'Statut du client:');
define('ENTRY_NEWSLETTER_YES', 'Inscrit');
define('ENTRY_NEWSLETTER_NO', 'D&eacute;sinscription');
define('ENTRY_MAIL_ERROR','&nbsp;<span class="errorText">Veuillez choisir une option</span>');
define('ENTRY_PASSWORD','Mot de passe (g&eacute;n&eacute;r&eacute;)');
define('ENTRY_PASSWORD_ERROR','&nbsp;<span class="errorText">min. ' . (defined('ENTRY_PASSWORD_MIN_LENGTH') ? ENTRY_PASSWORD_MIN_LENGTH : 0) . ' tanks</span>');
define('ENTRY_MAIL_COMMENTS','texte suppl&eacute;mentaire par e-mail:');
define('ENTRY_MAIL','Envoyer un e-mail avec un mot de passe au client?');
define('YES','oui');
define('NO','non');
define('SAVE_ENTRY','Enregistrer les modifications?');
define('TEXT_CHOOSE_INFO_TEMPLATE','Mod&egrave;le pour les d&eacute;tails du produit');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','Mod&egrave;le pour les options de produits');
define('TEXT_SELECT','-- Veuillez s&eacute;lectionner --');
define('PULL_DOWN_DEFAULT', 'Veuillez choisir');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT','marqu&eacute;');
define('ICON_BIG_WARNING','A l\'attention de!');
define('ICON_CROSS', 'Faux');
define('ICON_CURRENT_FOLDER', 'Dossier actuel');
define('ICON_DELETE', 'Supprimer');
define('ICON_EDIT','Edit');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Dossier');
define('ICON_FILE_DOWNLOAD', 'T&eacute;l&eacute;charger');
define('ICON_FOLDER', 'Dossier');
define('ICON_LOCKED', 'Verrouill&eacute;');
define('ICON_POPUP','Aper&ccedil;u de la banni&egrave;re');
define('ICON_PREVIOUS_LEVEL', 'Niveau pr&eacute;c&eacute;dent');
define('ICON_PREVIEW', 'Aper&ccedil;u');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Succ&egrave;s');
define('ICON_TICK', 'Vrai');
define('ICON_UNLOCKED', 'D&eacute;bloqu&eacute;');
define('ICON_WARNING', 'Avertissement');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Banni&egrave;res)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Monnaies)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Fabricants)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Bulletins d\'information)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS_RECIPIENTS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Destinataires du bulletin d\'information)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Commandes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Statut des commandes)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Groupes de vente crois&eacute;e)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Unit&eacute;s d\'emballage)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Statut de la navigation)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produits attendus)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Examens)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produits en promotion)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Classes d\'imposition)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Zones fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Taux d\'imposition)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> zones)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> Les clients qui sont en ligne)');
define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');
define('TEXT_DEFAULT', 'Par d&eacute;faut');
define('TEXT_SET_DEFAULT', 'D&eacute;finir comme valeur par d&eacute;faut');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatoire</span>');
define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erreur : Il n\'y a actuellement aucune devise par d&eacute;faut. Veuillez en d&eacute;finir une &agrave; : Outil d\'administration -> Localisation -> Devises');
define('TEXT_CACHE_CATEGORIES', 'Bo&icirc;te &agrave; cat&eacute;gories');
define('TEXT_CACHE_MANUFACTURERS', 'Bo&icirc;te des fabricants');
define('TEXT_CACHE_ALSO_PURCHASED', 'Module &eacute;galement achet&eacute;');
define('TEXT_NONE', '--aucun--');
define('TEXT_AUTO_PROPORTIONAL', '--auto proportionnel--');
define('TEXT_AUTO_MAX', '--auto max--');
define('TEXT_TOP', 'Top');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur : La destination n\'existe pas.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur : La destination n\'est pas inscriptible.');
define('ERROR_FILE_NOT_SAVED', 'Erreur : Le t&eacute;l&eacute;chargement du fichier n\'est pas sauvegard&eacute;.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur : Type de t&eacute;l&eacute;chargement de fichier non autoris&eacute;.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Le succ&egrave;s : Le t&eacute;l&eacute;chargement du fichier a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s.');
define('WARNING_NO_FILE_UPLOADED', 'Warnung : Aucun fichier n\'a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute;.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur : Fichier non supprim&eacute;.');
define('DELETE_ENTRY','Supprimer une entr&eacute;e?');
define('TEXT_PAYMENT_ERROR','<b>AVERTISSEMENT:</b> Veuillez activer un <a href="%s">mode de paiement</a>!');
define('TEXT_SHIPPING_ERROR','<b>AVERTISSEMENT:</b> Veuillez activer un <a href="%s">mode d\'exp&eacute;dition</a>!');
define('TEXT_PAYPAL_CONFIG','<b>AVERTISSEMENT:</b> PVeuillez configurer les param&egrave;tres de paiement PayPal pour le "mode en direct" ici: <a href="%s"><strong>Partenaire -> PayPal</strong></a>.'); //DokuMan - 2012-05-31 - show warning if PayPal payment module activated, but not configured for live mode yet
define('TEXT_DUPLICATE_CONFIG_ERROR','<b>AVERTISSEMENT:</b> Dupliquer la cl&eacute; de configuration: ');
define('TEXT_NETTO','net: ');
define('ENTRY_CID','Identification du client:');
define('IP','Commande IP:');
define('CUSTOMERS_MEMO','M&eacute;mos:');
define('DISPLAY_MEMOS','Afficher/&eacute;crire');
define('TITLE_MEMO','Client MEMO');
define('ENTRY_LANGUAGE','Langue:');
define('CATEGORIE_NOT_FOUND','Cat&eacute;gorie non trouv&eacute;e!');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', '&Eacute;changer un ch&egrave;que-cadeau');
define('IMAGE_ICON_STATUS_GREEN_STOCK','en stock');
define('IMAGE_ICON_STATUS_GREEN','actif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT','activer');
define('IMAGE_ICON_STATUS_RED','inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT','d&eacute;sactiver');
define('IMAGE_ICON_INFO','s&eacute;lectionnez');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'F&eacute;vrier');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Juin');
define('_JULY', 'Juillet');
define('_AUGUST', 'Ao&ucirc;t');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'D&eacute;cembre');
// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'Pour vous d&eacute;sabonner d\'un bulletin d\'information, cliquez ici:');
define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> ch&egrave;ques-cadeaux)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> coupons)');
define('TEXT_VALID_PRODUCTS_LIST', 'Liste des produits');
define('TEXT_VALID_PRODUCTS_ID', 'Identification des produits');
define('TEXT_VALID_PRODUCTS_NAME', 'Nom des produits');
define('TEXT_VALID_PRODUCTS_MODEL', 'Mod&egrave;le de produits');
define('TEXT_VALID_CATEGORIES_LIST', 'Liste des cat&eacute;gories');
define('TEXT_VALID_CATEGORIES_ID', 'ID de la cat&eacute;gorie');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de la cat&eacute;gorie');
define('TXT_ALL','Tous');
// UST ID
define('HEADING_TITLE_VAT','Vat-ID');
define('ENTRY_VAT_ID','Vat-ID');
define('ENTRY_CUSTOMERS_VAT_ID', 'Vat-ID:');
define('TEXT_VAT_FALSE','<span class="messageStackError">V&eacute;rifi&eacute;/la TVA n\'est pas valable!</span>');
define('TEXT_VAT_TRUE','<span class="messageStackSuccess">V&eacute;rifi&eacute;/TVA est valide!</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY','<span class="messageStackError">Non v&eacute;rifi&eacute;/pays inconnu!</span>');
define('TEXT_VAT_INVALID_INPUT','<span class="messageStackError">Non v&eacute;rifi&eacute;/Le code pays fourni n\'est pas valide ou le num&eacute;ro de TVA est vide!</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE','<span class="messageStackError">Non v&eacute;rifi&eacute;/Le service SOAP est indisponible, r&eacute;essayez plus tard!</span>');
define('TEXT_VAT_MS_UNAVAILABLE','<span class="messageStackError">Non v&eacute;rifi&eacute;/Le service de l\'&eacute;tat membre est indisponible, r&eacute;essayez plus tard ou avec un autre &Eacute;tat membre!</span>');
define('TEXT_VAT_TIMEOUT','<span class="messageStackError">Non v&eacute;rifi&eacute;/Le service de l\'&Eacute;tat membre n\'a pas pu &ecirc;tre joint &agrave; temps, r&eacute;essayer plus tard ou avec un autre &Eacute;tat membre!</span>');
define('TEXT_VAT_SERVER_BUSY','<span class="messageStackError">Non v&eacute;rifi&eacute; / Le service ne peut pas traiter votre demande. R&eacute;essayez plus tard!</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT','<span class="messageStackError">Non v&eacute;rifi&eacute;/votre syst&egrave;me ne supporte pas PHP5 SOAP!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE','<span class="messageStackError">ERREUR : Connexion au service web impossible (SOAP-ERROR)!</span>');
define('ERROR_GIF_MERGE','Manque le soutien de GDlib Gif, la fusion a &eacute;chou&eacute;');
define('ERROR_GIF_UPLOAD','Absence de support GDlib Gif, &eacute;chec du traitement de l\'image Gif');
define('TEXT_REFERER','R&eacute;f&eacute;rent: ');
// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
// EOF - Tomcraft - 2009-06-17 Google Sitemap
// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('BOX_PAYPAL','PayPal');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul
// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE','Adresse &eacute;lectronique des comp&eacute;tences');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC','Adresse &eacute;lectronique que vous avez enregistr&eacute;e aupr&egrave;s de Skrill.<br />Si vous n\'avez pas de compte Skrill, vous pouvez en obtenir un gratuitement &agrave; <a href="https://account.skrill.com/signup/page1" target="_blank">Skrill.com</a>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE','Identification du commer&ccedil;ant');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC','Votre num&eacute;ro d\'identification de commer&ccedil;ant qualifi&eacute;');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE','Skrill Mot secret');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC','Le mot secret se trouve dans votre profil Skrill (ce n\'est pas votre mot de passe !). Il doit &ecirc;tre compos&eacute; uniquement de minuscules et de chiffres.<br />Pour activer le traitement chez Skrill : Envoyez un courrier &eacute;lectronique comprenant votre adresse &eacute;lectronique Skrill et le nom de domaine shopsystems<br />&agrave;: <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Activation of Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE','&eacute;tat de la commande - commande temporaire');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC','Une commande temporaire est cr&eacute;&eacute;e apr&egrave;s avoir soumis un "ordre d\'envoi" pendant le processus de commande. Si des probl&egrave;mes surviennent, vous trouverez une commande avec ce statut.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE','statut de la commande - paiement OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC','Si tout va bien et que la transaction est confirm&eacute;e par Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE','&eacute;tat de la commande - paiement en attente');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC','Si quelqu\'un n\'a pas de solde sur son compte Skrill. Le paiement est en attente jusqu\'&agrave; ce que Skrill re&ccedil;oive le r&egrave;glement.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE','statut de la commande - paiement annul&eacute;');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC','Si un paiement (par carte de cr&eacute;dit) est refus&eacute;.');
define('MB_ERROR_NO_MERCHANT','Il n\'y a pas de compte Skrill associ&eacute; &agrave; cette adresse &eacute;lectronique.');
define('MB_MERCHANT_OK','Compte Skrill OK, ID du commer&ccedil;ant % re&ccedil;us et enregistr&eacute;s.');
define('MB_INFO','<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />Vous pouvez accepter les cartes de cr&eacute;dit, les notes de d&eacute;bit, les virements bancaires en ligne, Giropay et d\'autres paiements locaux importants apr&egrave;s une seule activation. Vous n\'avez pas &agrave; vous soucier des contrats avec chaque organisme de paiement si vous optez pour Skrill. Tout se fait avec un <a href="https://account.skrill.com/signup/page1" target="_blank"><b>compte Skrill gratuit</b></a>. Les options de paiement suppl&eacute;mentaires sont gratuites, et il n\'y a ni frais mensuels ni frais d\'activation.<br /><br /><b>Votre avantage:</b><br />- plus de ventes en acceptant tous les paiements importants<br />- r&eacute;duction des co&ucirc;ts et des efforts - un seul contrat<br />- traitement facile pour votre client - paiement direct sans avoir &agrave; cr&eacute;er un compte suppl&eacute;mentaire<br />- activation et int&eacute;gration en un clic<br />- bon <a href="https://www.skrill.com/en/fees/" target="_blank"><b>conditions</b></a><br />- notification instantan&eacute;e de paiement et preuve des coordonn&eacute;es du client<br />- pas de frais suppl&eacute;mentaires, m&ecirc;me &agrave; l\'&eacute;tranger<br />- 11 millions de clients dans le monde');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP','CG-authorizations');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Home');
define('BOX_HEADING_CONFIGURATION2','Configuration av.');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER','Rechercher des clients...');
define('ASB_QUICK_SEARCH_ORDER','Ordres de recherche...');
define('ASB_QUICK_SEARCH_ORDER_ID','ID des ordres de recherche...');
define('ASB_QUICK_SEARCH_ARTICLE','Rechercher des produits/cat&eacute;gories...');
define('ASB_QUICK_SEARCH_EMAIL', 'Recherche d\'adresses &eacute;lectroniques...');
define('ASB_QUICK_SEARCH_ARTICLE_ID','Recherche de produits/cat&eacute;gories ID...');
define('ASB_QUICK_SEARCH_ORDER_OR_INVOICE','Recherche n&deg; de commande/r&eacute;f&eacute;rence....');

//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET','Tout cocher');
define('BUTTON_UNSET','D&eacute;cocher tout');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes 
//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS','Row');
define('TABLE_HEADING_RESET','R&eacute;initialisation des statistiques');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW' , 'Fermer la fen&ecirc;tre');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
//BOF - hendrik - 2011-05-14 - independent invoice number and date
define('ENTRY_INVOICE_NUMBER',  'Num&eacute;ro de la facture:'); 
define('ENTRY_INVOICE_DATE',    'Date de la facture:'); 
//EOF - hendrik - 2011-05-14 - independent invoice number and date 
//BOF - web28 - 2010-07-06 - added missing error text
define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">R&egrave;glement TVA hors gamme</span>');
//EOF - web28 - 2010-07-06 - added missing error text
define ('CONFIG_INT_VALUE_ERROR', '"% s" ERREUR : Veuillez entrer des chiffres ; seule la saisie a &eacute;t&eacute; ignor&eacute;e% s');
define ('CONFIG_MAX_VALUE_WARNING', '"% s" AVERTISSEMENT:% s l\'entr&eacute;e a &eacute;t&eacute; ignor&eacute;e [maximum:% s]');
define ('CONFIG_MIN_VALUE_WARNING', '"% s" AVERTISSEMENT:% s a &eacute;t&eacute; ignor&eacute;e [Minimum:% s]');
define ('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'P&eacute;riode d\'affichage en secondes:% s Pass&eacute; ce d&eacute;lai, les entr&eacute;es seront supprim&eacute;es.');
define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Mod&egrave;le de produits');
define ('TEXT_INFO_MODULE_RESTORE', 'Voulez-vous restaurer les param&egrave;tres sauvegard&eacute;s?<br /><br /><b>AVERTISSEMENT</b>: Cela &eacute;crasera tous les param&egrave;tres actuels!');
define ('TEXT_INFO_MODULE_REMOVE', 'Vous souhaitez d&eacute;sinstaller le module?<br /><br /><b>AVERTISSEMENT</b>: Tous les param&egrave;tres des modules sont &eacute;galement supprim&eacute;s!');
define ('TEXT_INFO_MODULE_BACKUP', 'Voulez-vous sauvegarder les param&egrave;tres du module?');
define ('MODULE_BACKUP_CONFIRM', 'Les param&egrave;tres du module ont &eacute;t&eacute; sauvegard&eacute;s avec succ&egrave;s!');
define ('MODULE_RESTORE_CONFIRM', 'Les param&egrave;tres du module ont &eacute;t&eacute; restaur&eacute;s avec succ&egrave;s!');
define ('MODULE_UPDATE_CONFIRM', 'Les param&egrave;tres du module ont &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s!');
/* magnalister v1.0.0 */
define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');
/* END magnalister */
define('CHARS_LEFT', 'chars left');
define('CHARS_MAX', 'de max.');
define('DISPLAY_PER_PAGE', 'Affichage par page: ');
define('SPECIALS_DATE_START_TT', 'Les offres commencent &agrave; 00:00:00');
define('SPECIALS_DATE_END_TT', 'Les offres se terminent &agrave; minuit (23:59:59)');
define('BOX_PARCEL_CARRIERS', 'Transporteurs de colis');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> transporteurs)');
define('RSS_FEED_TITLE', 'Derni&egrave;res informations du blog modifi&eacute; sur les logiciels de commerce &eacute;lectronique');
define('RSS_FEED_DESCRIPTION', 'Derni&egrave;res informations du forum de support des logiciels de boutique en ligne modifi&eacute;s');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Malheureusement, les derni&egrave;res nouvelles ne peuvent pas &ecirc;tre affich&eacute;es dans le flux RSS. Veuillez visiter notre Blog &agrave; l\'adresse <a href="'.RSS_FEED_LINK.'">www.modified-shop.org/blog</a> pour obtenir des informations importantes pour les responsables de boutiques sur les sujets suivants: <ul><li>Mises &agrave; jour et corrections importantes</li><li>Extensions de fonctions</li><li>juridictions</li><li>Nouvelles</li><li>Bavardages</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Le flux d\'informations n\'a pas pu &ecirc;tre mis &agrave; jour pendant une longue p&eacute;riode.<br>Ne manquez pas les nouvelles importantes, les offres et bien plus encore. Visitez-nous <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> Nouvelles)');
define('CFG_TXT_YES', 'Oui');
define('CFG_TXT_NO', 'Non');
define('CFG_TXT_OR', 'ou');
define('CFG_TXT_AND', 'et');
define('CFG_TXT_ASC', 'ascendant');
define('CFG_TXT_DESC', 'en descendant');
define('CFG_TXT_PRODUCTS_NAME', 'Nom du produit');
define('CFG_TXT_PRODUCTS_MODEL', 'Mod&egrave;le de produit');
define('CFG_TXT_DATE_EXPECTED', 'Date pr&eacute;vue');
define('CFG_TXT_ACCOUNT', 'Compte');
define('CFG_TXT_GUEST', 'Invit&eacute;');
define('CFG_TXT_BOTH', '&agrave; la fois');
define('CFG_TXT_NONE', 'aucun');
define('CFG_TXT_ADMIN', 'admin');
define('CFG_TXT_ALL', 'tous');
define('CFG_TXT_WEIGHT', 'Poids');
define('CFG_TXT_PRICE', 'Prix');
define('CFG_TXT_ITEM', 'Point');
define('CFG_TXT_WHOS_ONLINE', 'En ligne');
define('CFG_TXT_ORDERS', 'Commandes');
define('CFG_TXT_CUSTOMERS', 'Clients');
define('CFG_TXT_SALES_REPORT', 'Statistiques');
define('CFG_TXT_BLOG', 'Blog');
define('CFG_TXT_P.PRODUCTS_PRICE', 'Prix');
define('CFG_TXT_PD.PRODUCTS_NAME', 'Nom de l\'article');
define('CFG_TXT_P.PRODUCTS_DATE_ADDED', 'Date de recrutement');
define('CFG_TXT_P.PRODUCTS_MODEL', 'Num&eacute;ro d\'article');
define('CFG_TXT_P.PRODUCTS_ORDERED', 'Articles command&eacute;s');
define('CFG_TXT_P.PRODUCTS_SORT', 'Ordre de tri');
define('CFG_TXT_P.PRODUCTS_WEIGHT', 'Poids');
define('CFG_TXT_P.PRODUCTS_QUANTITY', 'En stock');
define('CFG_TXT_S.SPECIALS_DATE_ADDED', 'Date de recrutement');
define('CSRF_TOKEN_MANIPULATION', 'Manipulation de CSRFToken (En raison d\'aspects de s&eacute;curit&eacute;, il n\'est plus autoris&eacute; de travailler dans la zone d\'administration dans diff&eacute;rents onglets du navigateur).');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken non d&eacute;fini (En raison d\'aspects de s&eacute;curit&eacute;, il n\'est plus permis de travailler dans la zone d\'administration dans les diff&eacute;rents onglets du navigateur).');
define('TEXT_ACCOUNTING_INFO','L\'administrateur principal [1] ne peut &ecirc;tre priv&eacute; des droits d\'acc&egrave;s.');
define('JAVASCRIPT_DISABLED_INFO', 'JavaScript semble &ecirc;tre d&eacute;sactiv&eacute; dans votre navigateur. Activez JavaScript pour pouvoir utiliser toutes les fonctions de ce site et tout le contenu du site');
define('BOX_MODULE_TYPE', 'Modules d\'extension des classes');
define('MULTIPLE_INSTALLATION', '<span style="color:red">[Installation multiple: %s]</span>');
define('FILEUPLOAD_INPUT_TXT', 'Pas de fichier');
define('FILEUPLOAD_BTN_TXT', 'Recherchez');
define('CHECK_LABEL_PRICE', 'V&eacute;rifier le prix');
define('TEXT_PAYPAL_TAB_CONFIG', 'Configuration de PayPal');
define('TEXT_PAYPAL_TAB_PROFILE', 'Profil PayPal');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'Crochet web PayPal');
define('TEXT_PAYPAL_TAB_MODULE', 'Produits PayPal');
define('TEXT_PAYPAL_TAB_INFO', 'Informations sur PayPal');
define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Ordre de tri');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Ordre de traitement. Le plus petit nombre est ex&eacute;cut&eacute; en premier.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Activer le module?');
define('TEXT_DEFAULT_STATUS_DESC', 'Statut des modules');
define('TEXT_HOUR', 'heure');
define('TEXT_HOURS', 'heures');
define('DELETE_LOGS_SUCCESSFUL', 'Fichiers journaux supprim&eacute;s avec succ&egrave;s.');
define('BOX_BLACKLIST_LOGS', 'Liste noire des journaux');
define('CONTINUE_WITHOUT_SAVE', 'Les modifications non sauvegard&eacute;es seront rejet&eacute;es.');
define('TEXT_SORT_ASC','ascendant');
define('TEXT_SORT_DESC','en descendant');
define('MSRP','MSRP');
define('YOUR_PRICE','votre prix ');
define('UNIT_PRICE','prix &agrave; l\'unit&eacute; ');
define('ONLY',' Maintenant seulement ');
define('FROM','&agrave; partir de ');
define('YOU_SAVE','vous &eacute;conomisez ');
define('INSTEAD','Notre prix pr&eacute;c&eacute;dent ');
define('TXT_PER',' par ');
define('TEXT_NO_PAYMENT', 'Pas de mode de paiement');

?>