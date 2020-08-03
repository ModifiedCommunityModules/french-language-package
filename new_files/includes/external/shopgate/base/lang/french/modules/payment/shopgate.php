<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */

define('MODULE_PAYMENT_SHOPGATE_TEXT_TITLE', 'Shopgate');
define('MODULE_PAYMENT_SHOPGATE_TEXT_DESCRIPTION', 'Shopgate - Achats mobiles.');
define('MODULE_PAYMENT_SHOPGATE_TEXT_INFO', 'Les commandes sont d&eacute;j&agrave; pay&eacute;es au Shopgate.');

define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SHIPPING', 'Exp&eacute;dition');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SUBTOTAL', 'Sous-total');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_PAYMENTFEE', 'Frais de paiement');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_TOTAL', 'Total');

define('MODULE_PAYMENT_SHOPGATE_TEXT_EMAIL_FOOTER', "");
define('MODULE_PAYMENT_SHOPGATE_STATUS_TITLE', 'Activation du module de paiement Shopgate:');

define('MODULE_PAYMENT_SHOPGATE_STATUS_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_DESC', 'Trier l\'ordre d\'affichage. Le plus bas est affich&eacute; en premier.');
define('MODULE_PAYMENT_SHOPGATE_ZONE_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ZONE_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_TITLE', 'Statut');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_DESC', 'D&eacute;finir le statut des commandes import&eacute;es par ce module &agrave;:');
define('MODULE_PAYMENT_SHOPGATE_ERROR_READING_LANGUAGES', 'Erreur de configuration des param&egrave;tres linguistiques.');
define('MODULE_PAYMENT_SHOPGATE_ERROR_LOADING_CONFIG', 'Erreur de configuration de chargement.');
define(
'MODULE_PAYMENT_SHOPGATE_ERROR_SAVING_CONFIG',
    'Configuration de la sauvegarde des erreurs. ' .
    'Veuillez v&eacute;rifier les autorisations (777) pour le dossier ' .
    '&quot;/shopgate_library/config&quot; du plugin Shopgate.'
);

define("MODULE_PAYMENT_SHOPGATE_LABEL_NEW_PRODUCTS", "Nouveaux produits");
define("MODULE_PAYMENT_SHOPGATE_LABEL_SPECIAL_PRODUCTS", "Produits sp&eacute;ciaux");
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Champ(s) personnalis&eacute;(s) de cette commande Shopgate:');

define("SHOPGATE_COUPON_ERROR_NEED_ACCOUNT", "Vous devez &ecirc;tre connect&eacute; pour utiliser ce coupon");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_PRODUCTS", "Ce coupon est r&eacute;serv&eacute; aux produits sp&eacute;ciaux");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_CATEGORIES", "Ce coupon est r&eacute;serv&eacute; &agrave; des cat&eacute;gories sp&eacute;ciales");
define("SHOPGATE_COUPON_ERROR_MINIMUM_ORDER_AMOUNT_NOT_REACHED", "Ce coupon a un montant minimum de commande qui n'a pas &eacute;t&eacute; atteint");
?>