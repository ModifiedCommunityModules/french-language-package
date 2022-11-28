<?php
/* -----------------------------------------------------------------------------------------
   $Id: french.php 10597 2017-01-23 18:10:51Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com
   (c) 2003 nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

/*
 * 
 *  DATE / TIME
 * 
 */
 
define('HTML_PARAMS','dir="ltr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"');
@setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR@euro', 'fr_FR', 'fr-FR', 'fr', 'fr', 'fr_FR.ISO_8859-1', 'French','fr_FR.ISO_8859-15');

define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_WS_LANGUAGES.'french/extra/','php') as $file) require ($file);

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP','Page d\'accueil');
define('HEADER_TITLE_CATALOG','catalogue');

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language, 
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY','EUR');

define('MALE','Monsieur');
define('FEMALE','Madame');
define('DIVERSE', 'Diverse');

/*
 * 
 *  BOXES
 * 
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','Utiliser votre bon!');

define('BOX_TITLE_STATISTICS','Statistiques:');
define('BOX_ENTRY_CUSTOMERS','Clients');
define('BOX_ENTRY_PRODUCTS','Article');
define('BOX_ENTRY_REVIEWS','Estimations');
define('TEXT_VALIDATING','pas confirm&eacute;');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE','%s page d\'accueil');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS','Autres produits');

define('BOX_HEADING_ADD_PRODUCT_ID','Mettre dans le panier');
  
define('BOX_LOGINBOX_STATUS','Groupe clients:');
define('BOX_LOGINBOX_DISCOUNT','Article en promotion');
define('BOX_LOGINBOX_DISCOUNT_TEXT','Remise');
define('BOX_LOGINBOX_DISCOUNT_OT','');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW','&Eacute;valuer cet article!');
define('BOX_REVIEWS_NO_WRITE_REVIEW','Aucune critique possible.');
define('BOX_REVIEWS_TEXT_OF_5_STARS','%s de 5 &eacute;toiles');

// pull down default text
define('PULL_DOWN_DEFAULT','Veuillez choisir');

// javascript messages
define('JS_ERROR','D\'importantes informations sont manquantes! Veuillez bien renseigner les champs\n\n');

define('JS_REVIEW_TEXT','* Le texte doit comporter au minimums ' . REVIEW_TEXT_MIN_LENGTH . ' caract&egrave;res.\n\n');
define('JS_REVIEW_RATING','* veuillez saisir votre &eacute;valuation.\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED','* veuillez choisir un mode de paiement pour votre commande.\n');
define('JS_ERROR_SUBMITTED','Cette page a d&eacute;j&agrave; &eacute;t&eacute; confirm&eacute;. Cliquez sur OK et attendez la fin du processus');
define('ERROR_NO_PAYMENT_MODULE_SELECTED','* veuilllez choisir votre mode de paiement pour votre commande.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED','* S\'il vous pla&icirc;t choisir une livraison de votre commande.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Si vous avez, nous ne pouvons pas accepter nos Conditions g&eacute;n&eacute;rales de vente Suivi de commande malheureusement pas accepter!\n\n');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Si vous ne prenez pas l\'Extinction du droit de r&eacute;tractation pour des objets virtuels, nous ne pouvons pas accepter votre commande, malheureusement.!\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Malheureusement, nous ne pouvons pas accepter votre commande, sauf si vous confirmez notre avis de confidentialit&eacute;!\n\n');
define('JS_REVIEW_AUTHOR', '* S\'il vous pla&icirc;t entrer votre nom.\n\n');

/*
 * 
 * ACCOUNT FORMS
 * 
 */

define('ENTRY_COMPANY_ERROR','');
define('ENTRY_COMPANY_TEXT','');
define('ENTRY_GENDER_ERROR','Veuillez choisir votre allocution.');
define('ENTRY_GENDER_TEXT','*');
define('ENTRY_FIRST_NAME_ERROR','Votre pr&eacute;nom doit comporter au minimum ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_FIRST_NAME_TEXT','*');
define('ENTRY_LAST_NAME_ERROR','Votre nom doit comporter au minimum ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_LAST_NAME_TEXT','*');
define('ENTRY_DATE_OF_BIRTH_ERROR','Votre date de naissance doit &ecirc;tre saisie dans le format jj.mm.aaaa (ex: 21.05.1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT','* (pe. 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR','Votre adresse email doit comporter au minimum ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR','Votre adresse email est incorrecte, veuillez la v&eacute;rifier.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING','Vos adresses e-mail ne correspondent pas.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS','Votre adress email existe d&eacute;j&agrave;, veuillez la v&eacute;rifier.');
define('ENTRY_EMAIL_ADDRESS_TEXT','*');
define('ENTRY_STREET_ADDRESS_ERROR','Rue/num. doivent comporter au minimum ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' carat&egrave;res.');
define('ENTRY_STREET_ADDRESS_TEXT','*');
define('ENTRY_SUBURB_TEXT','');
define('ENTRY_POST_CODE_ERROR','Votre code postal doit comporter au minimum ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_POST_CODE_TEXT','*');
define('ENTRY_CITY_ERROR','la ville doit comporter au minimum ' . ENTRY_CITY_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_CITY_TEXT','*');
define('ENTRY_STATE_ERROR','votre r&eacute;gion doit comporter au minimum ' . ENTRY_STATE_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_STATE_ERROR_SELECT','veuillez choisir une r&eacute;gion de cette liste.');
define('ENTRY_STATE_TEXT','*');
define('ENTRY_COUNTRY_ERROR','veuillez choisir un pays de cette liste.');
define('ENTRY_COUNTRY_TEXT','*');
define('ENTRY_TELEPHONE_NUMBER_ERROR','votre num&eacute;ro de t&eacute;l&eacute;phone soit comporter au minimum ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_TELEPHONE_NUMBER_TEXT','*');
define('ENTRY_FAX_NUMBER_TEXT','');
define('ENTRY_NEWSLETTER_TEXT','');
define('ENTRY_PASSWORD_ERROR','votre mot de passe doit comporter au minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER','Votre mot de passe doit contenir au moins %s minuscules.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER','Votre mot de passe doit contenir au moins %s Capitals.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM','Votre mot de passe doit contenir au moins %s chiffre.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR','Votre mot de passe doit contenir au moins %s caract&egrave;re sp&eacute;cial.');
define('ENTRY_PASSWORD_ERROR_INVALID_CHAR', 'Votre mot de passe contient des caract&egrave;res non valides. Veuillez utiliser un autre mot de passe.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING','Vos mots de passe ne correspondent pas');
define('ENTRY_PASSWORD_TEXT','*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT','*');
define('ENTRY_PASSWORD_CURRENT_TEXT','*');
define('ENTRY_PASSWORD_CURRENT_ERROR','Votre mot de passe doit comporter au minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_NEW_TEXT','*');
define('ENTRY_PASSWORD_NEW_ERROR','Votre nouveau mot de passe doit comporter au minimum ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING','Vos mots de passe ne correspondent pas.');

/*
 * 
 *  RESTULTPAGES
 * 
 */
 
define('TEXT_RESULT_PAGE','Pages:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS','Afficher de <b>%d</b> &agrave; <b>%d</b> (sur un total de <b>%d</b> articles)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS','Afficher de <b>%d</b> &agrave; <b>%d</b> (sur un total de <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS','Afficher de <b>%d</b> &agrave; <b>%d</b> (sur un total de <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW','Afficher de <b>%d</b> &agrave; <b>%d</b> (sur un total de <b>%d</b> nouveaux produits)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS','Afficher de <b>%d</b> &agrave; <b>%d</b> (sur un total de <b>%d</b> promotions)');

/*
 * 
 * SITE NAVIGATION
 * 
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE','page pr&eacute;c&eacute;dente');
define('PREVNEXT_TITLE_NEXT_PAGE','page suivante');
define('PREVNEXT_TITLE_PAGE_NO','page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE','%d page prec&eacute;dente');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE','%d page suivante');

/*
 * 
 * PRODUCT NAVIGATION
 * 
 */

define('PREVNEXT_BUTTON_PREV','&laquo;');
define('PREVNEXT_BUTTON_NEXT','&raquo;');

/*
 * 
 * IMAGE BUTTONS
 * 
 */

define('IMAGE_BUTTON_ADD_ADDRESS','Nouvelle adresse');
define('IMAGE_BUTTON_BACK','Retour');
define('IMAGE_BUTTON_CHANGE_ADDRESS','Changement d\'adresse');
define('IMAGE_BUTTON_CHECKOUT','Paiement');
define('IMAGE_BUTTON_CONFIRM_ORDER','Veuillez confirmer la commande');
define('IMAGE_BUTTON_CONTINUE','Suivant');
define('IMAGE_BUTTON_DELETE','Annuler');
define('IMAGE_BUTTON_LOGIN','Se connecter');
define('IMAGE_BUTTON_IN_CART','Dans le panier');
define('IMAGE_BUTTON_SEARCH','Chercher');
define('IMAGE_BUTTON_UPDATE','Actualiser');
define('IMAGE_BUTTON_UPDATE_CART','Actualiser le panier');
define('IMAGE_BUTTON_WRITE_REVIEW','&Eacute;crire une &eacute;valuation');
define('IMAGE_BUTTON_ADMIN','Admin'); 
define('IMAGE_BUTTON_PRODUCT_EDIT','Travailler le produit');
define('IMAGE_BUTTON_SEND','Envoyer');
define('IMAGE_BUTTON_CONTINUE_SHOPPING','Continuer vos achats');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Passez &agrave; l\'&eacute;tape 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Passez &agrave; l\'&eacute;tape 3');

define('SMALL_IMAGE_BUTTON_DELETE','Annuler');
define('SMALL_IMAGE_BUTTON_EDIT','Changer');
define('SMALL_IMAGE_BUTTON_VIEW','Afficher');

define('ICON_ARROW_RIGHT','Montrer plus');
define('ICON_CART','Dans le panier');
define('ICON_SUCCESS','Succ&egrave;s');
define('ICON_WARNING','Attention');
define('ICON_ERROR','Erreur');

define('TEXT_PRINT','Imprimer');

define('BUTTON_RESET', 'R&eacute;initialiser');
define('BUTTON_UPDATE', 'Mise &agrave; jour');

/*
 * 
 *  GREETINGS
 * 
 */

define('TEXT_GREETING_PERSONAL','Heureux de vous revoir, <span class="greetUser">%s!</span> Souhaitez vous voir nos <a style="text-decoration:underline;" href="%s">nouveaux articles</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON','<small>Si vous n\'&ecirc;tes pas %s , veuillez vous identifier<a style="text-decoration:underline;" href="%s">ici</a> avec votre nom</small>');
define('TEXT_GREETING_GUEST','Bienvenue <span class="greetUser">client</span>. Souhaitez vous <a style="text-decoration:underline;" href="%s"> vous connecter</a>? ou bien souhaitez vous <a style="text-decoration:underline;" href="%s">ouvrir</a> un compte?');

define('TEXT_SORT_PRODUCTS','Le calssement de l\'article est');
define('TEXT_DESCENDINGLY','En descendant');
define('TEXT_ASCENDINGLY','En montant');
define('TEXT_BY',' vers');

define('TEXT_OF_5_STARS','%s de 5 &eacute;toiles!');
define('TEXT_REVIEW_BY','De %s');
define('TEXT_REVIEW_WORD_COUNT','%s mots');
define('TEXT_REVIEW_RATING','&Eacute;valuation: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED','Rajouter &agrave;: %s');
define('TEXT_NO_REVIEWS','Il n\'existe pas encore d &eacute;valuation.');
define('TEXT_NO_NEW_PRODUCTS','Pour le moment, il n\'existe pas de nouveaux articles.');
define('TEXT_UNKNOWN_TAX_RATE','Taux d\'imp&ocirc;sition inconnu');

/*
 * 
 * WARNINGS
 * 
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Attention: le r&eacute;pertoire d\'installation existe &agrave;: %s. S\'il vous pla&icirc;t supprimer ce r&eacute;pertoire pour des raisons de s&eacute;curit&eacute;!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Attention: Le Shopsoftware eCommerce modifi&eacute; capable d\'&eacute;crire dans le fichier de configuration: %s. Ceci est un risque potentiel pour la s&eacute;curit&eacute; - s\'il vous pla&icirc;t d&eacute;finir les bonnes permissions sur ce fichier!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT','Attention: n\'existe pas Le r&eacute;pertoire de session: ' . xtc_session_save_path() . '. Le session ne fonctionneront pas tant que ce r&eacute;pertoire a &eacute;t&eacute; cr&eacute;&eacute;!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE','Attention: XT-Commerce ne peut pas &eacute;crire dans le r&eacute;pertoire des sessions: ' . xtc_session_save_path() . '. Le session ne fonctionneront pas jusqu\'&agrave; ce que les bonnes permissions sont d&eacute;finies!');
define('WARNING_SESSION_AUTO_START','Attention: session.auto_start est activ&eacute; (enabled) - S\'il vous pla&icirc;t d&eacute;sactiver (disabled), cette fonction php dans le fichier php.ini et red&eacute;marrez le serveur Web!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT','Attention: Le r&eacute;pertoire de t&eacute;l&eacute;chargement n\'existe pas: ' . DIR_FS_DOWNLOAD . '. Cette fonction ne fonctionnera pas tant que ce r&eacute;pertoire a &eacute;t&eacute; cr&eacute;&eacute;!');

define('SUCCESS_ACCOUNT_UPDATED','Votre compte a &eacute;t&eacute; actualis&eacute; avec succ&egrave;s.');
define('SUCCESS_PASSWORD_UPDATED','Votre mot de passe a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING','Le mot de passe que vous venez de saisir ne correspond pas avec votre mot de passe enregistr&eacute;. Veuillez r&eacute;ssayer.');
define('TEXT_MAXIMUM_ENTRIES','Remarque: vous disposez de %s donn&eacute;es dans votre carnet d\'adresse!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED','Votre demande a &eacute;t&eacute; annuler avec succ&egrave;s.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED','Votre carnet d\'adresse a &eacute;t&eacute; actualis&eacute; avec succ&egrave;s!');
define('WARNING_PRIMARY_ADDRESS_DELETION','L\'adresse standard ne peux &ecirc;tre annul&eacute;e. Veuillez d&eacute;finir une autre adresse standard au pr&eacute;alable. Ensuite l\'ancienne pourra &ecirc;tre annul&eacute;.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY','Cette inscription dans le carnet d\'adresse n\'est pas disponible.');
define('ERROR_ADDRESS_BOOK_FULL','Votre carnet d\'adresses ne peut contenir plus d\'adresses. Veuillez annuler une adresse que vous n\'utilisez plus. Ensuite vous pourrez en enregistrer une nouvelle.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'N\'a pas &eacute;t&eacute; la m&eacute;thode d\'exp&eacute;dition s&eacute;lectionn&eacute;.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Il n\'y a pas de service de livraison disponible.');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED','* tant que vous n\'acceptez pas nos conditions g&eacute;n&eacute;rale de vente, nous ne pourrons traiter votre commande!\n\n');
define('ERROR_REVOCATION_NOT_ACCEPTED','* Si vous ne prenez pas l\'Extinction du droit de r&eacute;tractation pour des objets virtuels, nous ne pouvons pas accepter votre commande, malheureusement.!\n\n');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', 'Veuillez confirmer que vous avez lu notre avis sur la protection de la vie priv&eacute;e.');


define('SUB_TITLE_OT_DISCOUNT','Remise:');

define('NOT_ALLOWED_TO_SEE_PRICES','Vous ne pouvez pas conculter nos prix en tant que visiteur (tout du moins avec votre statut actuel');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','Vous n\'avez pas la possiblit&eacute; de consulter nos prix. Veuillez ouvrir un compte client.');

define('TEXT_DOWNLOAD','T&eacute;l&eacute;charger');
define('TEXT_VIEW','Afficher');

define('TEXT_BUY','1 x \'');
define('TEXT_NOW','\' commander');
define('TEXT_GUEST',' Invit&eacute;');
define('TEXT_SEARCH_ENGINE_AGENT','Moteur de recherche');

/*
 * 
 * ADVANCED SEARCH
 * 
 */

define('TEXT_AC_ALL_CATEGORIES', 'Tous');
define('TEXT_ALL_CATEGORIES','Toutes cat&eacute;gories');
define('TEXT_ALL_MANUFACTURERS','Tous les producteur');
define('JS_AT_LEAST_ONE_INPUT','* Un de ces champs doit &ecirc;tre renseign&eacute;:\n   mots clefs\n    prix &agrave; partir de\n      prix jusqu\'&agrave;\n' );
define('AT_LEAST_ONE_INPUT','Un de ces champs doit &ecirc;tre renseign&eacute;:, <br />mots clefs avec au minimum trois caract&egrave;res<br  />prix &agrave; partir de<br  />prix jusqu &agrave;<br />');
define('TEXT_SEARCH_TERM','Votre recherche:');
define('JS_INVALID_FROM_DATE','* Date non valide (de)\n');
define('JS_INVALID_TO_DATE','* Date non valide (&agrave;)\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE','* La date (de) doit &ecirc;tre plus importante ou &eacute;gale &agrave; la date (jusqu\'&agrave;)\n');
define('JS_PRICE_FROM_MUST_BE_NUM','* Prix &agrave; partir de, doit &ecirc;tre un chiffre\n\n');
define('JS_PRICE_TO_MUST_BE_NUM','* Prix jusqu\'&agrave;, doit &ecirc;tre un chiffre\n\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM','* le prix doit &ecirc;tre plus important  ou &eacute;gal au prix jusqu\'&agrave;.\n');
define('JS_INVALID_KEYWORDS','* Mot clef non reconnu\n');
define('TEXT_LOGIN_ERROR','<b>Erreur: </b> Vos adresses mail, et/ou le mot de passe ne correspondent pas.' );
define('TEXT_RELOGIN_NEEDED', 'Veuillez vous reconnecter.');
// define('TEXT_NO_EMAIL_ADDRESS_FOUND','<span class="color_error_message"><b>Attention:</b></span> L\'adresse email renseign&eacute;e n\'est pas registr&eacute;e. Veuillez r&eacute;essayer.'); // Not used anymore as we do not give a hint that an e-mail address is or is not in the database!
define('TEXT_PASSWORD_SENT','un nouveau mot de passe vous a &eacute;t&eacute; envoy&eacute; par mail.');
define('TEXT_PRODUCT_NOT_FOUND','Article non trouv&eacute;!');
define('TEXT_MORE_INFORMATION','veuillez visiter,  <a style="text-decoration:underline;" href="%s" onclick="window.open(this.href); return false;">le page</a> de cet article.');
define('TEXT_DATE_ADDED','Nous avons ajout&eacute; cette article dans notre catalogue le %s.');
define('TEXT_DATE_AVAILABLE','<span class="color_error_message">Cet article sera de nouveau disponible le %s.</span>');
define('SUB_TITLE_SUB_TOTAL','Somme interm&eacute;diaire:');

define('OUT_OF_STOCK_CANT_CHECKOUT','Les articles marqu&eacute;s, ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont malheureusement pas disponibles dans la quantit&eacute; souhait&eacute;e., <br />veuillez r&eacute;duire votre quantit&eacute; command&eacute;e sur les articles d&eacute;sign&eacute;s. Merci');
define('OUT_OF_STOCK_CAN_CHECKOUT','Les articles marqu&eacute;s, ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont malheureusement pas disponibles dans la quantit&eacute; souhait&eacute;e, .<br />La quantit&eacute; command&eacute;e vous sera livr&eacute; prochainement, si vous le souhaitez, nous pouvons effectuer une livraison partielle.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1','Vous n\'avez pas encore atteint, votre valeur minumum de commande qui est de:');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2',' Veuilllez commander pour plus de');
define('MAXIMUM_ORDER_VALUE_REACHED_1','Vous avez d&eacute;pass&eacute; la valeur maximum de commande de:');
define('MAXIMUM_ORDER_VALUE_REACHED_2','<br /> veuillez r&eacute;duire votre commande au minimum de: ');

define('ERROR_INVALID_PRODUCT','L\'article choisi n\'a pas &eacute;t&eacute; trouv&eacute;!');
define('JS_KEYWORDS_MIN_LENGTH', 'Le terme de recherche doit comporter au moins ' . (int)SEARCH_MIN_LENGTH . ' caract&egrave;res.\n');


/*
 * 
 * NAVBAR Titel
 * 
 */

define('NAVBAR_TITLE_ACCOUNT','Votre compte');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT','Votre comte');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT','Vos donn&eacute;es personnelles');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY','Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY','Vos commandes en cours');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO','Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO','Commandes en cours');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO','Num&eacute;ro de commande %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD','Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD','Modifiez votre mot de passe');
define('NAVBAR_TITLE_1_ADDRESS_BOOK','Votre compte');
define('NAVBAR_TITLE_2_ADDRESS_BOOK','Carnet d\'adresses');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS','Votre compte');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS','Carnet d\'adresses');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS','Nouvelle entr&eacute;e');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS','Entr&eacute;e modifi&eacute;e');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS','Entr&eacute;e annul&eacute;e');
define('NAVBAR_TITLE_ADVANCED_SEARCH','Recherche avanc&eacute;e');
define('NAVBAR_TITLE1_ADVANCED_SEARCH','Recherche avanc&eacute;e');
define('NAVBAR_TITLE2_ADVANCED_SEARCH','R&eacute;sultat de la recherche');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION','Paiement');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION','Confirmation');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT','Paiement');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT','Mode de paiement');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS','Paiement');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS','Modifiez votre adresse de Facturation');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING','Paiement');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING','Informations d\'envoi');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS','Paiement');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS','Mofifiez votre adresse de livraison');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS','Paiement');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS','Succ&egrave;s');
define('NAVBAR_TITLE_CREATE_ACCOUNT','Cr&eacute;ation d\'un compte');

define('NAVBAR_TITLE_LOGIN','Connexion');

define('NAVBAR_TITLE_LOGOFF','Au revoir');
define('NAVBAR_TITLE_PRODUCTS_NEW','Nouvel article');
define('NAVBAR_TITLE_SHOPPING_CART','Panier');
define('NAVBAR_TITLE_SPECIALS','Offres');
define('NAVBAR_TITLE_COOKIE_USAGE','Utilisation des Cookies');
define('NAVBAR_TITLE_PRODUCT_REVIEWS','&Eacute;valuations');
define('NAVBAR_TITLE_REVIEWS_WRITE','&Eacute;valuations');
define('NAVBAR_TITLE_REVIEWS','&Eacute;valuations');
define('NAVBAR_TITLE_SSL_CHECK','conseil de s&eacute;curit&eacute;s');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT','cr&eacute;ation d un compte');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','mot de passe oubli&eacute;?');
define('NAVBAR_TITLE_NEWSLETTER','newsletter');
define('NAVBAR_GV_REDEEM','utiliser votre bon');
define('NAVBAR_GV_SEND','Envoyer le bon');
define('NAVBAR_TITLE_DOWNLOAD','T&eacute;l&eacute;chargements');

/*
 * 
 *  MISC
 * 
 */

define('TEXT_NEWSLETTER','Vous souhaitez toujours rester inform&eacute;?, <br />Pas de probl&egrave;me. Inscriver vous &agrave; notre newsletter et vous serez toujours au courrant de notre actualit&eacute;');
define('TEXT_EMAIL_INPUT','Votre adresse email a &eacute;t&eacute; saisie dans notre syst&egrave;me.<br />Par la m&ecirc;me occasion un email vous a &eacute;t&eacute; envoy&eacute; avec un lien pour activer. Veuillez cliquez sur ce lien d&egrave;s r&eacute;ception afin de confirmer votre adh&eacute;sion. Sinon, vous ne recevrez pas de newsletter');

define('TEXT_WRONG_CODE','Votre code secret ne correspond pas. Veuillez r&eacute;essayer');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','Cette adresse email existe d&eacute;j&agrave; dans notre base de donn&eacute;es, mais l\'aurorisation pour recevoir les newsletter n\'est pas encore confirm&eacute;e!');
define('TEXT_EMAIL_EXIST_NEWSLETTER','Cette adresse email existe d&eacute;j&agrave; dans notre base de donn&eacute;es et l\'autorisation pour recevoir des newsletters est confirm&eacute;e!');
define('TEXT_EMAIL_NOT_EXIST','Cet email ne existe pa dans notre base de donn&eacute;es!');
define('TEXT_EMAIL_DEL','Votre adresse email a &eacute;t&eacute; effac&eacute; de notre base de donn&eacute;es de Newsletter.');
define('TEXT_EMAIL_DEL_ERROR','Une erreur est survenue, votre adresse email n a pas &eacute;t&eacute; effac&eacute;e!');
define('TEXT_EMAIL_ACTIVE','Votre adresse email a &eacute;t&eacute; confirm&eacute; avec succ&egrave;s pour recevoir les newsletter!');
define('TEXT_EMAIL_ACTIVE_ERROR','Une erreur est survenur, votre adresse email n a pas &eacute;t&eacute; dispos&eacute;e librement!');
define('TEXT_EMAIL_SUBJECT','Votre adh&eacute;sion &agrave; la newsletter');

define('TEXT_CUSTOMER_GUEST',' invit&eacute;');

define('TEXT_LINK_MAIL_SENDED','Votre demande de nouveau mot de passe doit d abord &ecirc;tre confirm&eacute; par vous <br />C est pour cette raison que le syst&egrave;me vous a fait parvenir un mail avec un lien de confirmation. Veuillez donc cliquer sur ce lien afin d obtenir votre nouveau mot de passe. Sinon le nouveau mot de passe ne vous sera pas attribu&eacute;');
define('TEXT_PASSWORD_MAIL_SENDED','Un email avec votre noueau mot de passe pous a &eacute;t&eacute; envoy&eacute;.<br />Veuillez modifier votre mot de passe comme souhait&eacute; lors de votre prochaine connexion');
define('TEXT_CODE_ERROR','Veuiller de nouveau saisir votre adresse email et votre code secret <br />Veuillez faire attention aux fautes de frappe');
define('TEXT_EMAIL_ERROR','Veuillez de nouveau saisir votre adresse email et votre code secret <br />Veuillez faire attention aux fautes de frappe');
define('TEXT_NO_ACCOUNT','Melheureusement nous vous signalons que votre demande de changement de mot de passe est soit invalide ou bien est expir&eacute;e.<br />Veuillez &eacute;ssayer de nouveau.');
define('HEADING_PASSWORD_FORGOTTEN','Vous souhaitez modifier votre mot de passe?');
define('TEXT_PASSWORD_FORGOTTEN','Modifier votre mot de passe en trois &eacute;tapes simples.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','Email de confirmation pour votre changement de mot de passe'); // ä und ü für korrekte E-Mail Betreffszeile lassen!
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','votre nouveau mot de passe');
define('ERROR_MAIL','veuillez v&eacute;rifier vos donn&eacute;es dans ce formulaire');

define('CATEGORIE_NOT_FOUND','la cat&eacute;gorie n\'a pas &eacute;t&eacute; trouv&eacute;e');

define('GV_FAQ','Bon FAQ');
define('ERROR_NO_REDEEM_CODE','Vous n\'avez malheureusement pas entr&eacute; de code.');
define('ERROR_NO_INVALID_REDEEM_GV','Mauvais code pour le bon');
define('TABLE_HEADING_CREDIT','Avoir');
define('EMAIL_GV_TEXT_SUBJECT','Un cadeau de %s');
define('MAIN_MESSAGE','Vous avez souhait&eacute; envoyer un avoir d\'un montant de %s &agrave; %s dont l\'adresse email est %s.<br /><br />Le texte suivant apparait dans votre email:<br /><br />Hallo %s<br /><br />On voua a envoy&eacute; un avoir d un montant de %s par %s envoy&eacute;s.');
define('REDEEMED_AMOUNT','votre avoir vous a &eacute;t&eacute; cr&eacute;dit&eacute; avec succ&egrave;s. Valeur de l\'avoir:');
define('REDEEMED_COUPON','votre coupon a &eacute;t&eacute; comptabilis&eacute; avec succ&egrave;s et vous sera automatiquement d&eacute;duit lors de votre prochain achat.');

define('ERROR_INVALID_USES_USER_COUPON','Avec votre coupon, vous pouvez seulement');
define('ERROR_INVALID_USES_COUPON','Avec ce coupon, les clients peuvent seulement');
define('TIMES',' fois racheter.');
define('ERROR_INVALID_STARTDATE_COUPON','Votre coupon n\'est pas encore disponible.');
define('ERROR_INVALID_FINISDATE_COUPON','Votre coupon est d&eacute;j&agrave; &eacute;coul&eacute;.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON','Ce coupon ne peut &ecirc;tre rembours&eacute; avec une valeur minimum de commande de %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD','<br/>Vous devez entrer le code de coupon lorsqu\'il atteint &agrave; nouveau la valeur minimum de commande!');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Pour utiliser le bon, vous devez disposer d\'un compte client.');
define('PERSONAL_MESSAGE','%s &eacute;crit:');

define('TEXT_LINK_TITLE_INFORMATION', 'Informations');

/*
 * 
 *  COUPON POPUP
 * 
 */
 
define('TEXT_CLOSE_WINDOW','Fermer la fen&ecirc;tre [x]');
define('TEXT_COUPON_HELP_HEADER','Votre avoir a &eacute;t&eacute; comptabilis&eacute; avec succ&egrave;s.');
define('TEXT_COUPON_HELP_NAME','<br /><br />D&eacute;signation de votre avoir: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Votre coupon ne peut pas &ecirc;tre utilis&eacute; sur les offres sp&eacute;ciales.');
define('TEXT_COUPON_HELP_FIXED','<br /><br />Votre avoir est d\'un montant de: %s');
define('TEXT_COUPON_HELP_MINORDER','<br /><br />Le minimum de commande este de: %s');
define('TEXT_COUPON_HELP_FREESHIP','<br /><br />Bon pour des frais de port gratuits');
define('TEXT_COUPON_HELP_DESC','<br /><br />D&eacute;signation du coupon: %s');
define('TEXT_COUPON_HELP_DATE','<br /><br />ce coupon est valable du %s au %s');
define('TEXT_COUPON_HELP_RESTRICT','<br /><br />article / cat&eacute;gorie: limit&eacute;s');
define('TEXT_COUPON_HELP_CATEGORIES','Cat&eacute;gorie');
define('TEXT_COUPON_HELP_PRODUCTS','Article');
define('ERROR_ENTRY_AMOUNT_CHECK','Montant du coupon non valide');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK','Adresse e-mail non valide');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Votre voucher/coupon est limit&eacute; &agrave; certains produits.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Votre voucher/coupon est limit&eacute; &agrave; certaines cat&eacute;gories.');


// VAT ID
define('ENTRY_VAT_TEXT','Uniquemenent pour l\'Allemagne et l\'UE');
define('ENTRY_VAT_ERROR','Votre num&eacute;ro d odentification n est pas valable ou ne peut &ecirc;tre v&eacute;rifi&eacute; pour le moment. Veuillez renseigner avec le bon nnum&eacute;ro d identification ou laisser le champs libre.');
define('MSRP','UVP');
define('YOUR_PRICE','Votre prix');
define('UNIT_PRICE','Prix unitaire');
define('ONLY',' seulement');
define('FROM','&agrave;');
define('YOU_SAVE','vous &eacute;conomisez');
define('INSTEAD','Au lieu de');
define('TXT_PER',' par');
define('TAX_INFO_INCL','TVA %s inclus');
define('TAX_INFO_EXCL','TVA %s non inclus');
define('TAX_INFO_ADD','TVA %s en sus');
define('SHIPPING_EXCL','Sans');
define('SHIPPING_INCL','incl.');
define('SHIPPING_COSTS','frais de port');

define('SHIPPING_TIME','D&eacute;lai de livraison:');
define('MORE_INFO','[plus]');

define('ENTRY_PRIVACY_ERROR','S\'il vous pla&icirc;t accepter notre Politique de confidentialit&eacute;');
define('TEXT_PAYMENT_FEE','frais de paiement');

define('_MODULE_INVALID_SHIPPING_ZONE','Il n\'y a pas d\'exp&eacute;dition dans ce pays possible');
define('_MODULE_UNDEFINED_SHIPPING_RATE','Les frais de port ne peuvent pas &ecirc;tre calcul&eacute;es au moment');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE','Mon compte');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE','Supprimer le compte');

//contact-form error messages
define('ERROR_EMAIL','<p><b>Votre adresse e-mail:</b> Non ou entr&eacute;e invalide!</p>');
define('ERROR_VVCODE','<p><b>Code de s&eacute;curit&eacute;:</b> Ne correspond pas, s\'il vous pla&icirc;t entrer le code de s&eacute;curit&eacute; &agrave; nouveau!</p>');
define('ERROR_MSG_BODY','<p><b>Votre message:</b> Pas d\'entr&eacute;e!</p>');

//Table Header checkout_confirmation.php
define('HEADER_QTY','Nombre');
define('HEADER_ARTICLE','Article');    
define('HEADER_SINGLE','Prix unit');
define('HEADER_TOTAL','Totale');
define('HEADER_MODEL','Article No.');

### PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT','PayPal-Checkout');
define('PAYPAL_ERROR','PayPal annuler');
define('PAYPAL_NOT_AVIABLE','PayPal Express est pas disponible actuellement.<br />S\'il vous pla&icirc;t choisir un autre mode de paiement<br />ou r&eacute;essayer plus tard.<br />Nous vous remercions de votre compr&eacute;hension.<br />');
define('PAYPAL_FEHLER','PayPal a signal&eacute; une erreur dans la manipulation. <br /> Votre commande est enregistr&eacute;e, mais ne sont pas ex&eacute;cut&eacute;es. <br /> S\'il vous pla&icirc;t entrer un nouvel ordre. <br /> Nous vous remercions de votre compr&eacute;hension.<br />');
define('PAYPAL_WARTEN','PayPal a signal&eacute; une erreur dans la manipulation. <br /> Vous avez encore &agrave; payer PayPal rendez-vous. <br /> Ci-dessous vous pouvez voir l\'ordre m&eacute;moris&eacute;. <br /> Merci de votre compr&eacute;hension. <br /> S\'il vous pla&icirc;t appuyez sur le bouton PayPal express.<br />');
define('PAYPAL_NEUBUTTON','S\'il vous pla&icirc;t appuyez &agrave; nouveau pour payer la commande. <br /> Toute autre touche annule la commande.');
define('ERROR_ADDRESS_NOT_ACCEPTED','* Tant que vous ne l\'acceptez votre adresse de facturation et d\'exp&eacute;dition, \n nous ne pouvons pas accepter votre commande, malheureusement!\n\n');
define('PAYPAL_GS','Bon / Coupon');
define('PAYPAL_TAX','TVA.');
define('PAYPAL_EXP_WARN','Attention! Les frais d\'exp&eacute;dition applicables sont finalis&eacute;s jusqu\'&agrave; la boutique.');
define('PAYPAL_EXP_VORL','Provisoire frais de transport');
define('PAYPAL_EXP_VERS','01.06.90');
define('PAYPAL_ADRESSE','Le pays dans votre adresse de livraison PayPal n\'est pas enregistr&eacute; dans notre boutique.<br />S\'il vous pla&icirc;t nous contacter pour.<br />De PayPal re&ccedil;u de pay:');
define('PAYPAL_AMMOUNT_NULL','La somme pr&eacute;vue du contrat (hors frais de port) est 0. <br /> Ce PayPal Express est indisponible. <br /> S\'il vous pla&icirc;t choisir un autre mode de paiement. <br /> Merci de votre compr&eacute;hension. <br />');
### PayPal API Modul

define('BASICPRICE_VPE_TEXT','Dans ce volume seulement');
define('GRADUATED_PRICE_MAX_VALUE','De');
define('_SHIPPING_TO','Exp&eacute;dition &agrave; la');

define('ERROR_SQL_DB_QUERY','D&eacute;sol&eacute;, mais il y a une erreur de base de donn&eacute;es.');
define('ERROR_SQL_DB_QUERY_REDIRECT','Vous allez &ecirc;tre redirig&eacute; dans %s secondes sur notre site!');

define('TEXT_AGB_CHECKOUT','S\'il vous pla&icirc;t accepter nos Conditions et informations client (%s) et notre annulation (%s) note.');
define('TEXT_REVOCATION_CHECKOUT', ', Politique d\'annulation %s');

define('DOWNLOAD_NOT_ALLOWED', '<h1>Forbidden</h1>This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser does not understand how to supply the credentials required.');

define('TEXT_INFO_DETAILS', ' D&eacute;tails');
define('TEXT_SAVED_BASKET','S\'il vous pla&icirc;t v&eacute;rifier votre panier. Celui-ci contient des &eacute;l&eacute;ments d\'une pr&eacute;c&eacute;dente visite.');
//define('TEXT_PRODUCTS_QTY_REDUCED', 'Die maximal erlaubte St&uuml;ckzahl f&uuml;r den zuletzt hinzugef&uuml;gten bzw. ge&auml;nderten Artikel wurde &uuml;berschritten. Die St&uuml;ckzahl wurde automatisch auf die maximal erlaubte St&uuml;ckzahl reduziert.'); // Now we use MAX_PROD_QTY_EXCEEDED

define('ERROR_REVIEW_TEXT','Le texte de l\'auteur doit &ecirc;tre d\'au moins ' . REVIEW_TEXT_MIN_LENGTH . ' caract&egrave;res.');
define('ERROR_REVIEW_RATING','S\'il vous pla&icirc;t entrer votre avis.');
define('ERROR_REVIEW_AUTHOR','S\'il vous pla&icirc;t entrer votre nom.');
define('ERROR_REVIEW_PRODUCT_PURCHASED', 'Seuls les articles qui ont &eacute;t&eacute; achet&eacute;s chez nous peuvent &ecirc;tre &eacute;valu&eacute;s.');

define('GV_NO_PAYMENT_INFO','<div class="infomessage">Vous pouvez payer compl&eacute;ter la commande avec votre cr&eacute;dit. Si vous ne voulez pas de faire racheter votre cr&eacute;dit, d&eacute;sactivez la s&eacute;lection de la banque et s&eacute;lectionnez un paiement!</div>');
define('GV_ADD_PAYMENT_INFO','<div class="errormessage">Votre solde est insuffisant pour payer l\'ordre compl&egrave;tement. S\'il vous pla&icirc;t s&eacute;lectionner un paiement suppl&eacute;mentaire!</div>');

define('_SHIPPING_FREE','livraison gratuite');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Les frais d\'exp&eacute;dition sont couverts par votre coupon.');

define('TEXT_CONTENT_NOT_FOUND','Cette page n\'A pas &eacute;t&eacute; trouv&eacute;!');
define('TEXT_SITE_NOT_FOUND','Cette page n\'A pas &eacute;t&eacute; trouv&eacute;!');

// error message for exceeded product quantity, noRiddle
define('MAX_PROD_QTY_EXCEEDED','Le nombre maximal admissible iHc ' .MAX_PRODUCTS_QTY. ' pour <span style="font-style:italic;">"%s"</span> VIANDE d&eacute;pass&eacute;.<br />Le nombre d\'&eacute;l&eacute;ments est automatiquement r&eacute;duite &agrave; la quantit&eacute; autoris&eacute;e.');

define('IMAGE_BUTTON_CONTENT_EDIT','Modifier le contenu');
define('PRINTVIEW_INFO','Imprimer la feuille de donn&eacute;es du produit');
define('PRODUCTS_REVIEW_LINK','Donnez votre avis');

define('TAX_INFO_SMALL_BUSINESS','Prix final apr&egrave;s &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER','Aufgrund des Kleinunternehmerstatus gem. &sect; 19 UStG erheben wir keine Umsatzsteuer und weisen diese daher auch nicht aus.');

define('NEED_CHANGE_PWD','S\'il vous pla&icirc;t changer votre mot de passe.');
define('TEXT_REQUEST_NOT_VALID','Le lien a expir&eacute;. S\'il vous pla&icirc;t demander un nouveau mot de passe.');

define('NAVBAR_TITLE_WISHLIST','Brochure');
define('TEXT_TO_WISHLIST','Ajouter &agrave; la liste');
define('IMAGE_BUTTON_TO_WISHLIST','Ajouter &agrave; la liste');

define('GUEST_REDEEM_NOT_ALLOWED','Les clients peuvent &eacute;changer des coupons.');
define('GUEST_VOUCHER_NOT_ALLOWED','Les bons ne peuvent &ecirc;tre achet&eacute;s en tant qu\'invit&eacute;.');

define('TEXT_FILTER_SETTING_DEFAULT','Articles par page');
define('TEXT_FILTER_SETTING','%s articles par page');
define('TEXT_FILTER_SETTING_ALL','Voir tous les produits');
define('TEXT_SHOW_ALL',' (montrer tous)');
define('TEXT_FILTER_SORTING_DEFAULT','Trier par ...');
define('TEXT_FILTER_SORTING_ABC_ASC','A &agrave; Z');
define('TEXT_FILTER_SORTING_ABC_DESC','Z &agrave; A');
define('TEXT_FILTER_SORTING_PRICE_ASC','Prix ascendant');
define('TEXT_FILTER_SORTING_PRICE_DESC','Prix d&eacute;croissant');
define('TEXT_FILTER_SORTING_DATE_DESC','Plus r&eacute;cent en premier');
define('TEXT_FILTER_SORTING_DATE_ASC','Plus ancien en premier');
define('TEXT_FILTER_SORTING_ORDER_DESC','Bestselling');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT','R&eacute;glages pour "Mon Achat rapide"');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED','Les r&eacute;glages pour "Mon Achat rapide" ont &eacute;t&eacute; stock&eacute;s.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS','S\'il vous pla&icirc;t s&eacute;lectionner une adresse de livraison');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE','S\'il vous pla&icirc;t s&eacute;lectionner un service de livraison');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS','S\'il vous pla&icirc;t s&eacute;lectionner une adresse de facturation');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE','S\'il vous pla&icirc;t s&eacute;lectionner un mode de paiement');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK','Mon Achat rapide');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE','Plus d\'informations sur "Mon Achat rapide" &raquo;');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST','Toujours choisir la meilleure exp&eacute;dition');

define('AC_SHOW_PAGE','Page');
define('AC_SHOW_PAGE_OF',' de');

define('FREE_SHIPPING_INFO',' &agrave; partir de %s  nous exp&eacute;dions votre commande livraison gratuite');

define('MANUFACTURER_NOT_FOUND','Fabricant introuvable');
define('ENTRY_TOKEN_ERROR','S\'il vous pla&icirc;t v&eacute;rifier votre saisie.');

define('IMAGE_BUTTON_CONFIRM','Confirmer'); // Needed for PayPal

// ***************************************************
//  Kontodaten-Pruefung
// ***************************************************
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0','Banque d\'accord.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1','Num&eacute;ro de compte et/ou le code de la banque ne sont pas valides ou ne correspondent pas!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2','Le num&eacute;ro de compte est pas automatiquement test&eacute;.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3','Le num&eacute;ro de compte est pas testable.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4','Le num&eacute;ro de compte ne peut pas &ecirc;tre v&eacute;rifi&eacute;! S\'il vous pla&icirc;t v&eacute;rifier &agrave; nouveau vos donn&eacute;es.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5','N\'existe pas ce num&eacute;ro de routage, s\'il vous pla&icirc;t corriger votre entr&eacute;e.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8','Erreur dans le num&eacute;ro de routage ou de trier le code non sp&eacute;cifi&eacute;!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9','Aucun num&eacute;ro de compte!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10','Vous ne disposez pas de titulaires de compte indiqu&eacute;.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128','Erreur interne lors de la v&eacute;rification de la banque.');

// Fehlermeldungen alle IBAN-Nummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000','Dans IBAN inclus le code du pays (1er et 2&egrave;me place) inconnu.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010','IBAN longueur erron&eacute;e: Trop de points entr&eacute;s.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020','IBAN longueur mal: Trop peu de sites inscrits.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030','IBAN ne correspond pas &agrave; celui &eacute;tabli pour le format de pays.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040','Ne pas v&eacute;rifier les chiffres de IBAN (points 3 et 4) correctement -> typo dans l\'IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050','BIC a un format non valide.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060','BIC-longueur erron&eacute;e: entr&eacute;e Trop de caract&egrave;res. 8 ou 11 caract&egrave;res sont requis.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070','BIC-longueur erron&eacute;e: Trop peu de caract&egrave;res sp&eacute;cifient. 8 ou 11 caract&egrave;res sont requis.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080','BIC-longueur non valide: 8 ou 11 caract&egrave;res requis.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200','IBAN du pays sp&eacute;cifi&eacute; (liste lieu 1&egrave;re et 2&egrave;me de l\'IBAN) k &amp; ouml; nous ne pouvons accepter, malheureusement.');

// Fehlermeldungen fuer deutsche Kontonummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001','Dans le num&eacute;ro de compte IBAN inclus (points 13 &agrave; 22) et / ou num&eacute;ro de routage (points 5 &agrave; 12) invalide ou ne pas correspondre &agrave; l\'autre.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002','Dans le num&eacute;ro de compte IBAN inclus (points 13 &agrave; 22) ne fait pas automatiquement testables.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003','Pour contenue dans le num&eacute;ro de compte IBAN (points 13 &agrave; 22) ne chiffre de contr&ocirc;le est d&eacute;fini.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004','Dans le num&eacute;ro de compte IBAN inclus (points 13 &agrave; 22) ne peut &ecirc;tre v&eacute;rifi&eacute;e!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005','Code banque (points 5 &agrave; 12 de l\'IBAN) inexistante!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008','Erreur dans le code de banque (points 5 &agrave; 12 de l\'IBAN) ou toute sorte de code donn&eacute;!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009','Aucun num&eacute;ro de compte (points 13 &agrave; 22 de la IBAN) sp&eacute;cifi&eacute;e!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010','Pas titulaires de compte indiqu&eacute;.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020','Invalide BIC: aucune banque existante avec ce BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128','Erreur interne lors de la v&eacute;rification de la banque.');

define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN','Erreur inconnue lors de la v&eacute;rification de la banque.');

define('PRODUCT_REVIEWS_SUCCESS', 'Merci pour votre examen.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Merci pour votre examen. Celle-ci sera v&eacute;rifi&eacute;e avant sa publication.');

define('TITLE_PRODUCTS_NEW', 'Nouveaux produits');
define('TITLE_SPECIALS', 'Offres sp&eacute;ciales');

define('SITEMAP_ERROR_400', 'Error 400: Mauvaise demande.');
define('SITEMAP_ERROR_401', 'Error 401: Non autoris&eacute;.');
define('SITEMAP_ERROR_403', 'Error 403: Interdit.');
define('SITEMAP_ERROR_404', 'Error 404: Non trouv&eacute;!');
define('SITEMAP_ERROR_500', 'Error 500: Erreur de serveur interne.');
define('ERROR_PRODUCTS_MISSING_CONFIGURATION_NOT_ADDED', 'Certains articles de votre commande ne sont plus disponibles dans la configuration souhait&eacute;e et n\'ont pas &eacute;t&eacute; ajout&eacute;s au panier.');

?>