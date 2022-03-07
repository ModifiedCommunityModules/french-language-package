<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 11739 2019-04-11 11:32:27Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Plänkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2013 Gambio GmbH - http://www.gambio.de
  
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

// error messages
define('NOTE_ADDRESS_CHANGED', 'L\'adresse a chang&eacute;.');
define('ADDRESSES_MUST_BE_EQUAL','Avec le mode de paiement choisi, l\'adresse de facturation et de livraison doit correspondre!');
define('INSTALLMENT_TYPE_NOT_SELECTED', 'Aucun type s&eacute;lectionn&eacute;.');
define('PAYDATA_INCOMPLETE', 'Les indications relatives au mode de paiement sont incompl&egrave;tes.');
define('PAYMENT_ERROR', 'Une erreur s\'est produite lors du traitement.');
define('ERROR_MUST_CONFIRM_MANDATE', 'Veuillez confirmer que vous souhaitez accorder le mandat de pr&eacute;l&egrave;vement SEPA.');
 
// credit risk check
define('CREDIT_RISK_HEADING', 'V&eacute;rification de la solvabilit&eacute;');
defined('BUTTON_CONFIRM') OR define('BUTTON_CONFIRM', 'Oui, effectuer une v&eacute;rification de cr&eacute;dit');
define('BUTTON_NOCONFIRM', 'Non, n\'effectuez pas de v&eacute;rification');
define('TEXT_CREDIT_RISK_INFO', 'Une &eacute;valuation de cr&eacute;dit est en cours d\'ex&eacute;cution.');
define('TEXT_CREDIT_RISK_COMFIRM', 'Souhaitez-vous &ecirc;tre d\'accord avec cette?');
define('CREDIT_RISK_FAILED', 'Veuillez choisir un autre mode de paiement.');
define('CREDIT_RISK_CONFIGURATION', 'V&eacute;rification de la solvabilit&eacute;');
define('CR_ACTIVE', 'actif');
define('CR_OPERATING_MODE', 'Mode de fonctionnement');
define('CR_TIMEOFCHECK', 'Moment de l\'&eacute;valuation');
define('CR_TIMEOFCHECK_BEFORE', 'avant le choix du mode de paiement');
define('CR_TIMEOFCHECK_AFTER', 'apr&egrave;s le choix du mode de paiement');
define('CR_TYPEOFCHECK', 'M&eacute;thode d\'&eacute;valuation');
define('CR_TYPEOFCHECK_ISCOREHARD', 'Infoscore (crit&egrave;res stricts)');
define('CR_TYPEOFCHECK_ISCOREALL', 'Infoscore (tous les crit&egrave;res)');
define('CR_TYPEOFCHECK_ISCOREBSCORE', 'Infoscore (tous les crit&egrave;res + score de boni');
define('CR_NEWCLIENTDEFAULT', 'Valeur par d&eacute;faut pour les nouveaux clients');
define('CR_VALIDITY', 'Validit&eacute;');
define('CR_MIN_CART_VALUE', 'Valeur minimale des biens');
define('CR_MAX_CART_VALUE', 'Valeur maximale des marchandises');
define('CR_CHECKFORGENRE', '&Eacute;valuation avec');
define('CR_ERROR_MODE', 'Comportement d\'erreur');
define('CR_ERROR_MODE_ABORT', 'Annulation de la proc&eacute;dure');
define('CR_ERROR_MODE_CONTINUE', 'continuer');
define('CR_NOTICE', 'Avis');
define('CR_CONFIRMATION', 'Enqu&ecirc;te sur l\'agr&eacute;ment');
define('CR_ABTEST', 'Test A/B');
 
// address check
define('TEXT_ADDRESS_CHECK_HEADING', 'Adresse correcte');
define('TEXT_ADDRESS_CHECK_CHANGED', 'corrig&eacute;');
define('AC_ACTIVE', 'actif');
define('AC_OPERATING_MODE', 'Mode de fonctionnement');
define('AC_BILLING_ADDRESS', 'Adresse de facturation');
define('AC_DELIVERY_ADDRESS', 'Adresse de livraison');
define('AC_AUTOMATIC_CORRECTION', 'Correction automatique');
define('AC_ERROR_MODE', 'Comportement d\'erreur');
define('AC_MIN_CART_VALUE', 'Valeur minimale des biens');
define('AC_MAX_CART_VALUE', 'Valeur maximale des marchandises');
define('AC_VALIDITY', 'Validit&eacute;');
define('AC_ERROR_MESSAGE', 'Message d\'erreur');
define('AC_PSTATUS_MAPPING', 'Cartographie de la situation des personnes');
define('AC_BACHECK_NONE', 'ne pas v&eacute;rifier');
define('AC_BACHECK_BASIC', 'De base');
define('AC_BACHECK_PERSON', 'Personne (seulement DE !)');
define('AC_AUTOMATIC_CORRECTION_NO', 'non');
define('AC_AUTOMATIC_CORRECTION_YES', 'oui');
define('AC_AUTOMATIC_CORRECTION_USER', 'D&eacute;cision des utilisateurs');
define('AC_ERROR_MODE_ABORT', 'Annulation de la proc&eacute;dure');
define('AC_ERROR_MODE_REENTER', 'Reprenez');
define('AC_ERROR_MODE_CHECK', 'Effectuer une v&eacute;rification de cr&eacute;dit ult&eacute;rieure');
define('AC_ERROR_MODE_CONTINUE', 'continuer');
define('DAYS', 'Journ&eacute;es');
define('ERROR_MESSAGE_INFO', 'Utiliser {payone_error} comme placeholder pour la r&eacute;ponse de la plate-forme PAYONE');
define('AC_PSTATUS_NOPCHECK', 'Aucun audit de personne n\'a &eacute;t&eacute; effectu&eacute;');
define('AC_PSTATUS_FULLNAMEKNOWN', 'Le pr&eacute;nom et le nom de famille sont connus');
define('AC_PSTATUS_LASTNAMEKNOWN', 'Le nom de famille est connu');
define('AC_PSTATUS_NAMEUNKNOWN', 'Pr&eacute;nom et nom de famille inconnus');
define('AC_PSTATUS_NAMEADDRAMBIGUITY', 'Ambigu&iuml;t&eacute; du nom &agrave; l\'adresse');
define('AC_PSTATUS_UNDELIVERABLE', 'non livrable (plus)');
define('AC_PSTATUS_DEAD', 'Personne d&eacute;c&eacute;d&eacute;e');
define('AC_PSTATUS_POSTALERROR', 'Mauvaise adresse postale');
 
// api
define('STATUS_UPDATED_BY_PAYONE', 'Statut mis &agrave; jour par PAYONE');
define('COMMENT_ERROR', 'comment_error');
define('COMMENT_REDIRECTION_INITIATED', 'comment_redirection_initiated');
define('COMMENT_AUTH_APPROVED', 'Paiement approuv&eacute;');
define('COMMENT_PREAUTH_APPROVED', 'Paiement approuv&eacute;');
define('VOUCHER_OR_DISCOUNT', 'voucher_or_discount');
define('MISC_HANDLING', 'misc_handling');
define('SHIPPING_COST', 'shipping_cost');
 
// payment
define('paymenttype_visa', 'Visa');
define('paymenttype_mastercard', 'Mastercard');
define('paymenttype_amex', 'American Express');
define('paymenttype_cartebleue', 'Carte Bleue');
define('paymenttype_dinersclub', 'Diners Club');
define('paymenttype_discover', 'Discover');
define('paymenttype_jcb', 'JCB');
define('paymenttype_maestro', 'Maestro');
define('paymenttype_billsafe', 'BillSAFE');
define('paymenttype_klarna', 'Klarna');
define('paymenttype_commerzfinanz', 'CommerzFinanz');
define('paymenttype_lastschrift', 'Direct debit');
define('paymenttype_invoice', 'Vente &agrave; cr&eacute;dit');
define('paymenttype_prepay', 'Paiement anticip&eacute;');
define('paymenttype_cod', 'Paiement &agrave; la livraison');
define('paymenttype_paypal', 'PayPal');
define('paymenttype_paydirekt', 'PayDirekt');
define('paymenttype_sofortueberweisung', 'Virement bancaire en ligne');
define('paymenttype_giropay', 'GiroPay');
define('paymenttype_eps', 'EPS');
define('paymenttype_pfefinance', 'Post-Finance EFinance');
define('paymenttype_pfcard', 'Post-Finance Card');
define('paymenttype_ideal', 'iDEAL');
 
// payment form
define('selection_type', 'Mode de paiement:');
define('customers_dob', 'Date de naissance (DD.MM.YYYY):');
define('customers_telephone', 'T&eacute;l&eacute;phone:');
define('personalid', 'Carte d\'identit&eacute; personnelle:');
define('addressaddition', 'Adresse suppl&eacute;mentaire:');
 
// installment
define('TEXT_KLARNA_CONFIRM', ' Je suis d\'accord avec le traitement des donn&eacute;es n&eacute;cessaires &agrave; l\'ex&eacute;cution de la vente sur compte et &agrave; un contr&ocirc;le d\'identit&eacute; et de solvabilit&eacute; par Klarna. Je peux r&eacute;voquer mon %s &agrave; tout moment avec effet pour l\'avenir. Les conditions g&eacute;n&eacute;rales de vente du concessionnaire s\'appliquent.');
define('TEXT_KLARNA_ERROR_CONDITIONS', 'Si vous n\'acceptez pas les conditions de facturation de Klarna, nous ne pouvons malheureusement pas accepter votre commande!');
define('TEXT_KLARNA_INVOICE', 'Pour plus d\'informations sur la vente &agrave; cr&eacute;dit, voir le');
define('KLARNA_STOREID', 'Klarna SoreID');
define('KLARNA_COUNTRIES', 'Pays de Klarna');
 
// otrans
define('onlinetransfer_type', 'Tapez:');
define('bankaccountholder', 'Titulaire du compte:');
define('iban', 'IBAN:');
define('bic', 'BIC:');
define('ideal', 'Groupe bancaire:');
define('eps', 'Groupe bancaire:');
define('bankaccount', 'Num&eacute;ro de compte:');
define('bankcode', 'Code de la banque:');
 
// ELV
define('SEPA_MANDATE_HEADING', 'D&eacute;bit direct SEPA');
define('SEPA_MANDATE_INFO', 'Pour le remboursement du montant par pr&eacute;l&egrave;vement sur votre compte bancaire, nous avons besoin d\'un mandat de pr&eacute;l&egrave;vement SEPA.');
define('SEPA_MANDATE_CONFIRM_LABEL', 'Je souhaite accorder un mandat (transmission &eacute;lectronique)');
define('NOTE_GERMAN_ACCOUNT', 'ou payez comme d\'habitude avec vos coordonnées bancaires connues (uniquement pour les comptes bancaires allemands)');
define('ELV_IBAN', 'IBAN:');
define('ELV_BIC', 'BIC:');
define('ELV_ACCOUNT_HOLDER', 'Titulaire du compte:');
define('ELV_BANKCODE', 'Code de la banque:');
define('ELV_ACCOUNT_NUMBER', 'Num&eacute;ro de compte:');
define('ELV_COUNTRY', 'Pays:');
define('ELV_COUNTRY_DE', 'Allemagne');
define('ELV_COUNTRY_AT', 'Autriche');
define('ELV_COUNTRY_NL', 'Pays-Bas');
define('SEPA_COUNTRIES', 'Liste des pays supportant le pr&eacute;l&egrave;vement SEPA');
define('SEPA_DISPLAY_KTOBLZ', 'Champs suppl&eacute;mentaires compte bancaire/code bancaire');
define('SEPA_DISPLAY_KTOBLZ_NOTE', 'Afficher les champs suppl&eacute;mentaires pour le num&eacute;ro de compte/code bancaire (uniquement les comptes bancaires allemands)');
define('SEPA_USE_MANAGEMANDATE', 'Permettre l\'octroi d\'un mandat');
define('SEPA_USE_MANAGEMANDATE_NOTE', 'L\'octroi du mandat a lieu avec la demande de "gestion". La demande comprend un ch&egrave;que de compte bancaire. Toutefois, aucune demande de blocage de la liste de blocage des points de vente n\'est possible avec ce.');
define('SEPA_DOWNLOAD_PDF', 'T&eacute;l&eacute;charger le mandat en PDF');
define('SEPA_DOWNLOAD_PDF_NOTE', 'Proposez le t&eacute;l&eacute;chargement du mandat de pr&eacute;l&egrave;vement SEPA sous forme de fichier PDF (uniquement disponible si vous avez d&eacute;pens&eacute; le produit "Mandats SEPA en PDF" chez PAYONE)');
define('DOWNLOAD_MANDATE_HERE', 'Vous pouvez maintenant t&eacute;l&eacute;charger le mandat dans le cadre du paiement par pr&eacute;l&egrave;vement SEPA ici: ');
define('MANDATE_PDF', 'Fichier PDF');
define('CHECK_BANKDATA', 'V&eacute;rifier les donn&eacute;es du compte');
define('DONT_CHECK', 'ne pas v&eacute;rifier les donn&eacute;es du compte');
define('CHECK_BASIC', 'De base');
define('CHECK_POS', 'avec liste de blocage des points de vente');
 
// cc
define('TEXT_CARDOWNER', 'Titulaire de la carte:');
define('TEXT_CARDTYPE', 'Type de carte:');
define('TEXT_CARDNO', 'Num&eacute;ro de carte:');
define('TEXT_CARDEXPIRES', 'Valable jusqu\'au (mois / ann&eacute;e):');
define('TEXT_CARDCHECKNUM', 'Chiffre de contr&ocirc;le:');
define('TEXT_CHECK_DATA', 'Veuillez v&eacute;rifier vos données.');
 
// orders status
define('ORDERS_STATUS_CONFIGURATION', 'Configuration de l\'&eacute;tat des commandes');
define('ORDERS_STATUS_TMP', 'statut temporaire');
define('ORDERS_STATUS_PENDING', 'Re&ccedil;u de paiement incertain/attendu');
define('ORDERS_STATUS_PAID', 'Paiement r&eacute;ussi');
define('ORDERS_STATUS_DENIED', 'Paiement &eacute;chou&eacute;/refus&eacute;');
define('ORDERS_STATUS_APPROVED', 'Paiement approuv&eacute;');
define('ORDERS_STATUS_APPOINTED', 'Paiement fix&eacute;');
define('ORDERS_STATUS_CAPTURE', 'Saisie des paiements');
define('ORDERS_STATUS_UNDERPAID', 'Paiement insuffisant');
define('ORDERS_STATUS_CANCELATION', 'Paiement annul&eacute;');
define('ORDERS_STATUS_REFUND', 'Remboursement du paiement');
define('ORDERS_STATUS_DEBIT', 'Recouvrement des paiements');
define('ORDERS_STATUS_TRANSFER', 'Op&eacute;ration de paiement');
define('ORDERS_STATUS_REMINDER', 'Rappel de paiement');
define('ORDERS_STATUS_VAUTHORIZATION', 'vAire de paiement');
define('ORDERS_STATUS_VSETTLEMENT', 'Paiement vSettlement');
define('ORDERS_STATUS_INVOICE', 'Vente par paiement sur acompte');
define('ORDERS_STATUS_NONE', 'pas de changement');
define('TEXT_EXTERN_CALLBACK_URL', 'Redirection de l\'&eacute;tat des URL');
define('TEXT_EXTERN_CALLBACK_TIMEOUT', 'Timeout');
 
// global
defined('TEXT_YES') OR define('TEXT_YES', 'Oui');
defined('TEXT_NO') OR define('TEXT_NO', 'Non');
define('ERROR_OCCURED', 'Une erreur s\'est produite');
define('BOX_PAYONE_CONFIG', 'Configuration PAYONE');
define('BOX_PAYONE_LOGS', 'Journal de l\'API PAYONE');
define('PAYONE_CONFIG_TITLE', 'PAYONE configuration');
define('PAYMENT_CONFIGURATION', 'Configuration du paiement');
define('GLOBAL_CONFIGURATION', 'Param&egrave;tres globaux');
define('MERCHANT_ID', 'Identification du commer&ccedil;ant');
define('PORTAL_ID', 'ID du portail');
define('SUBACCOUNT_ID', 'Sous-compte-ID');
define('KEY', 'Cl&eacute;');
define('OPERATING_MODE', 'Mode de fonctionnement');
define('OPMODE_TEST', 'Mode test');
define('OPMODE_LIVE', 'Mode en direct');
define('AUTHORIZATION_METHOD', 'M&eacute;thode d\'autorisation');
define('AUTHMETHOD_AUTH', 'Autorisation instantan&eacute;e');
define('AUTHMETHOD_PREAUTH', 'Autorisation pr&eacute;alable');
define('SEND_CART', 'Chariot de transfert');
 
// payment genre
define('PAYMENT_GENRE', 'Mode de paiement');
define('PAYMENTGENRE_CONFIGURATION', 'Configuration des modes de paiement');
define('PG_ACTIVE', 'actif');
define('PG_ORDER', 'Ordre de tri');
define('PG_NAME', 'Nom interne');
define('PG_MIN_CART_VALUE', 'Valeur minimale des biens');
define('PG_MAX_CART_VALUE', 'Valeur maximale des marchandises');
define('PG_OPERATING_MODE', 'Mode de fonctionnement');
define('PG_GLOBAL_OVERRIDE', 'passer outre les param&egrave;tres globaux');
define('PG_COUNTRIES', 'pays actifs');
define('PG_SCORING_ALLOWED', 'valeurs de notation autoris&eacute;es');
define('PG_RED', 'rouge');
define('PG_YELLOW', 'jaune');
define('PG_GREEN', 'vert');
define('PG_PAYMENT_TYPES', 'Types de modes de paiement');
define('PG_PAYMENTTYPE_VISA', 'Visa');
define('PG_PAYMENTTYPE_MASTERCARD', 'Mastercard');
define('PG_PAYMENTTYPE_AMEX', 'American Express');
define('PG_PAYMENTTYPE_CARTEBLEUE', 'Carte Bleue');
define('PG_PAYMENTTYPE_DINERSCLUB', 'Diners Club');
define('PG_PAYMENTTYPE_DISCOVER', 'Discover');
define('PG_PAYMENTTYPE_JCB', 'JCB');
define('PG_PAYMENTTYPE_MAESTRO', 'Maestro');
define('PG_PAYMENTTYPE_LASTSCHRIFT', 'Direct debit');
define('PG_PAYMENTTYPE_INVOICE', 'Vente &agrave; cr&eacute;dit');
define('PG_PAYMENTTYPE_PREPAY', 'Paiement anticip&eacute;');
define('PG_PAYMENTTYPE_COD', 'Paiement &agrave; la livraison');
define('PG_PAYMENTTYPE_PAYPAL', 'PayPal');
define('PG_PAYMENTTYPE_BILLSAFE', 'BillSAFE');
define('PG_PAYMENTTYPE_COMMERZFINANZ', 'CommerzFinanz');
define('PG_TYPE_ACTIVE', 'actif');
define('PG_CHECK_CAV', 'Enqu&ecirc;te sur les chiffres de contr&ocirc;le');
define('PG_PAYMENTTYPE_SOFORTUEBERWEISUNG', 'Virement bancaire en ligne (Virement par Sofort.)');
define('PG_PAYMENTTYPE_GIROPAY', 'GiroPay');
define('PG_PAYMENTTYPE_EPS', 'EPS');
define('PG_PAYMENTTYPE_PFEFINANCE', 'Post-Finance EFinance');
define('PG_PAYMENTTYPE_PFCARD', 'Post-Finance Card');
define('PG_PAYMENTTYPE_IDEAL', 'iDEAL');
define('OVERRIDE_DATA', 'Param&egrave;tres locaux');
define('ADD_PAYMENT_GENRE', 'Ajouter un mode de paiement');
define('PAYGENRE_CREDITCARD', 'Cartes de cr&eacute;dit');
define('PAYGENRE_ONLINETRANSFER', 'Transaction en ligne');
define('PAYGENRE_EWALLET', 'Portefeuille &eacute;lectronique');
define('PAYGENRE_ACCOUNTBASED', 'M&eacute;thodes de paiement bas&eacute;es sur un compte bancaire');
define('PAYGENRE_INSTALLMENT', 'Location, achat et montage');
 
// config
define('ACTIVE', 'actif');
define('CONFIG_SAVE', 'Enregistrer la configuration');
define('NO_PAYMENTGENRE_CONFIGURED', 'Il n\'y a pas encore de mode de paiement configur&eacute;.');
define('ADDRESS_CHECK_CONFIGURATION', 'V&eacute;rification de l\'adresse');
define('SELECT_ALL_COUNTRIES', 'activer tous les pays');
define('SELECT_NO_COUNTRY', 'd&eacute;sactiver tous les pays');
define('REMOVE_PAYMENT_GENRE', 'Supprimer le mode de paiement');
define('REMOVE_THIS_GENRE', 'Supprimer ce mode de paiement lors de l\'&eacute;pargne');
define('CONFIGURATION_SAVED', 'Configuration sauvegard&eacute;e');
define('PAYMENTGENRE_ADDED', 'Mode de paiement ajout&eacute;');
define('PAYONE_ORDERS_HEADING', 'Paiement PAYONE');
define('TRANSACTIONS', 'Transactions');
define('TXID', 'Identification des transactions');
define('USERID', 'ID utilisateur');
define('CREATED', 'cr&eacute;&eacute;');
define('LAST_MODIFIED', 'derni&egrave;re modification');
define('STATUS', 'Statut');
define('TRANSACTION_STATUS', 'Statut de la transaction');
define('NO_TRANSACTION_STATUS_RECEIVED', 'aucun statut de transaction n\'a encore &eacute;t&eacute; re&ccedil;u');
define('ERROR_OCCURRED', 'Une erreur s\'est produite');
define('ERROR_ADDRESSES_MUST_BE_EQUAL', 'Avec le mode de paiement choisi, l\'adresse de facturation et de livraison doit correspondre!');
define('TABLE_HEADING_CHECK', 'Choisissez');
define('DUMP_CONFIG', 'Configuration de l\'exportation');
define('CONFIGURATION_DUMPED_TO', 'Configuration enregistr&eacute;e dans un fichier');
define('ERROR_DUMPING_CONFIGURATION', 'Il y a eu une erreur lors de l\'exportation de la configuration.');
define('INSTALL_CONFIG', 'Installer PAYONE');
 
// Capture
define('CAPTURE_TRANSACTION', 'Paiement de la capture');
define('CAPTURE_AMOUNT', 'Montant');
define('CAPTURE_SUBMIT', 'Capturez maintenant');
define('AMOUNT_CAPTURED', 'Montant saisi');
 
// Clearing
define('CLEARING_INTRO', 'Veuillez transf&eacute;rer le montant de la facture sur le compte bancaire suivant:');
define('CLEARING_OUTRO', 'Votre commande ne sera pas exp&eacute;di&eacute;e tant que nous n\'aurons pas re&ccedil;u votre paiement sur notre compte bancaire.');
define('CLEARING_ACCOUNTHOLDER', 'Titulaire du compte: ');
define('CLEARING_ACCOUNT', 'Num&eacute;ro de compte: ');
define('CLEARING_BANKCODE', 'Code de la banque: ');
define('CLEARING_IBAN', 'IBAN: ');
define('CLEARING_BIC', 'BIC: ');
define('CLEARING_BANK', 'Banque: ');
define('CLEARING_AMOUNT', 'Montant');
define('CLEARING_TEXT', 'R&eacute;f&eacute;rence: ');
 
// Refund
define('REFUND_TRANSACTION', 'Conseil en mati&egrave;re de cr&eacute;dit');
define('REFUND_SUBMIT', 'Traitement des conseils en mati&egrave;re de cr&eacute;dit');
define('REFUND_AMOUNT', 'Montant');
define('REFUND_BANKCOUNTRY', 'Pays');
define('REFUND_COUNTRY_DE', 'Allemagne');
define('REFUND_COUNTRY_FR', 'France');
define('REFUND_COUNTRY_NL', 'Pays-Bas');
define('REFUND_COUNTRY_AT', 'Autriche');
define('REFUND_COUNTRY_CH', 'Suisse');
define('REFUND_BANKACCOUNT', 'Num&eacute;ro de compte');
define('REFUND_BANKCODE', 'Code de la banque');
define('REFUND_BANKBRANCHCODE', 'Succursale');
define('REFUND_BANKCHECKDIGIT', 'Chiffre de contr&ocirc;le');
define('REFUND_IBAN', 'IBAN');
define('REFUND_BIC', 'BIC');
define('AMOUNT_REFUNDED', 'Montant cr&eacute;dit&eacute;');
 
// Log
define('PAYONE_LOGS_TITLE', 'Journal de l\'API PAYONE');
define('EVENT_ID', 'ID de l\'&eacute;v&eacute;nement');
define('DATETIME', 'Point dans le temps');
define('CUSTOMER', 'Client (aussi longtemps qu\'il est connu)');
define('START_DATE', 'D&eacute;marrer');
define('END_DATE', 'Fin');
define('PAGE', 'Page');
define('SEARCH', 'Recherchez');
define('SHOW', 'montrer');
define('EVENT_LOG_COUNT', 'Num&eacute;ro de sous-&eacute;v&eacute;nement');
define('NO_LOGS', 'Il n\'y a pas d\'entr&eacute;es pour la p&eacute;riode choisie.');
define('API', 'API');

// Payolution
define('PAYOLUTION_CHANNELID', 'Identification de la cha&icirc;ne Payolution');
define('PAYOLUTION_CHANNELPWD', 'Mot de passe de la cha&icirc;ne Payolution');

define('paymenttype_payolution_debit', 'Payolution DirectDebit');
define('paymenttype_payolution_invoice', 'Facture de Payolution');
define('paymenttype_payolution_monthly', 'Facture mensuelle de Payolution');
define('paymenttype_payolution_financing', 'Financement de la r&eacute;solution des probl&egrave;mes de paiement');

define('company_uid', 'TVA (facultatif):');
define('company_trade_registry_number', 'Registre du commerce (facultatif):');
define('company_register_key', 'Identification du registre (facultatif):');

define('TEXT_PAYOLUTION_ERROR_CONDITIONS', 'Si vous n\'acceptez pas le transfert de vos donn&eacute;es pour le r&egrave;glement de l\'achat, nous ne pouvons malheureusement pas accepter votre commande!');
define('TEXT_PAYOLUTION_CONFIRM_SEPA', 'J\'autorise <a target="_blank" href="%s">le mandat de pr&eacute;l&egrave;vement SEPA</a>');
define('TEXT_PAYOLUTION_CONFIRM', 'J\'accepte la v&eacute;rification des donn&eacute;es n&eacute;cessaires &agrave; la r&eacute;alisation de l\'achat sur facture et un contr   &ocirc;le d\'identit&eacute; et de cr&eacute;dit.<br/>Je peux r&eacute;voquer <a class="'.((defined('TPL_POPUP_SHIPPING_LINK_CLASS')) ? TPL_POPUP_SHIPPING_LINK_CLASS : POPUP_PRODUCT_LINK_CLASS).'" href="https://payment.payolution.com/payolution-payment/infoport/dataprivacydeclaration?lang=en&mId='.base64_encode(STORE_OWNER).((defined('TPL_POPUP_CONTENT_LINK_PARAMETERS')) ? TPL_POPUP_CONTENT_LINK_PARAMETERS : POPUP_PRODUCT_LINK_PARAMETERS).'">mon autorisation</a> avec effet pour l\'avenir &agrave; tout moment.');

define('TEXT_EACH_MONTH', 'par mois');
define('TEXT_RATES', 'tarifs');
define('TEXT_DURATION', 'Dur&eacute;e');
define('TEXT_DURATION_MONTHS', 'mois');
define('TEXT_FINANCING_AMOUNT', 'Montant du financement');
define('TEXT_TOTAL_AMOUNT', 'Montant total');
define('TEXT_INTERESTRATE', 'Taux d\'int&eacute;r&ecirc;t');
define('TEXT_EFFECTIVE_INTERESTRATE', 'Taux d\'int&eacute;r&ecirc;t effectif');
define('TEXT_MONTHLY_RATES', 'Taux mensuel');
define('TEXT_RATES_PLAN', 'Plan tarifaire');
define('TEXT_RATES_DUE', 'taux d&ucirc;');
define('TEXT_CONTRACT', 'Contrat');
define('TEXT_DOWNLOAD_CONTRACT', 't&eacute;l&eacute;charger');
?>