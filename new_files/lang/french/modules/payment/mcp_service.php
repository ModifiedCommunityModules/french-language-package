<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE','Statut');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC','Activer le module micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE','Positionnement');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC','Position dans la liste');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE','<div style="color:#850000;font-style: italic;">Les param&egrave;tres de configuration suivants sont utilis&eacute;s globalement pour tous les micropaiements et transactions ; les modules de paiement ne doivent &ecirc;tre configur&eacute;s qu\'une seule fois</div><br />ID du compte');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC','ID du compte de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE','Cl&eacute; d\'acc&egrave;s');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC','Cl&eacute; d\'acc&egrave;s de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE','Code du projet');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC','Code du projet de micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE','Texte de paiement');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC','Cette option est indiqu&eacute;e sur la facture et le titre de la page de la fen&ecirc;tre de paiement. Avec le caract&egrave;re de remplissage #ORDER#, il est possible d\'int&eacute;grer automatiquement l\'OrderID dans la fen&ecirc;tre de facture ou de paiement. par exemple "Order : #ORDER#" indiquerait "Order : 0000023"');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE','Th&egrave;me');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC','Th&egrave;me pour les fen&ecirc;tres de paiement, la valeur par d&eacute;faut est x1');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE','Logo-Code');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC','Veuillez ins&eacute;rer votre Logo-Code ici');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE','Param&egrave;tre de l\'image de fond');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC','Veuillez ins&eacute;rer votre param&egrave;tre d\'image de fond ici.');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE','Couleur de fond');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC','Veuillez ins&eacute;rer votre couleur de fond dans HEX ici.');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE','Nom du champ de s&eacute;curit&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC','Pour plus de s&eacute;curit&eacute; dans la communication de serveur &agrave; serveur, veuillez entrer un nom que vous seul connaissez.');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE','Valeur du champ de s&eacute;curit&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC','Veuillez entrer un code de s&eacute;curit&eacute; priv&eacute; qui ne doit pas &ecirc;tre transmis aux clients. Le serveur Micropayment&trade ; traitera ce code &agrave; chaque notification pour une meilleure s&eacute;curit&eacute;.');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','La commande a &eacute;t&eacute; pay&eacute;e. L\'Auth-Code est: %s');
define('MODULE_PAYMENT_MCP_SERVICE_IP_NOT_ALLOWED','L\'adresse IP n\'est pas valable.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','La demande n\'est pas valable.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','Cet ordre n\'existe pas');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','Le domaine de la s&eacute;curit&eacute; n\'est pas le bon!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','La somme ne correspond pas au montant pay&eacute; ! R&eacute;el : %s Solde d&ucirc; : %s');
define('MODULE_PAYMENT_MCP_SERVICE_PAYIN_MESSAGE','%s %s a &eacute;t&eacute; pay&eacute;.');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','fonction inconnue');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','code d\'auteur non valide');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','montant non valable');
define('MODULE_PAYMENT_MCP_SERVICE_PENDING_PAYMENT','Paiement en attente. Annulation automatique %s');
define('MODULE_PAYMENT_MCP_PREPAY_EXPIRED','Pas de r&eacute;ception du paiement, annulation automatique');
define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','Le remboursement est augment&eacute;.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE','&Eacute;tat de la commande : en cours');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','Le client paie la commande');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE','Statut de la commande : pay&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','Le client a pay&eacute; avec succ&egrave;s.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE','Statut de la commande : Annul&eacute; / Erreur');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC','En cas d\'affichage r&eacute;troactif, ce statut est activ&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE','Statut de la commande : Rembours&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Si un remboursement est effectu&eacute;, ce statut est &eacute;tabli.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE','Statut de la commande : R&eacute;vision du paiement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','Ce statut est activ&eacute; lorsqu\'un probl&egrave;me est survenu et que le paiement doit &ecirc;tre revu');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE','Statut de l\'ordre : conflit');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','le flux logique des paiements a &eacute;t&eacute; interrompu. Veuillez revoir cet ordre.');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Statut de la commande : Pr&eacute;paiement - paiement partiel');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC','la pr&eacute;sente ordonnance comporte un paiement partiel mais n\'a pas encore &eacute;t&eacute; enti&egrave;rement pay&eacute;e');
define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION','%s<div class="mcp_notice_register">Nouvelle version de micropaiement&trade ; des modules de paiement sont disponibles. <a href="http://ecommerce.micropayment.de/modifiedshop/?lang=EN" target="_new">Cliquez ici pour t&eacute;l&eacute;charger.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT','%s<div class="mcp_notice_register">Afin d\'assurer la fonctionnalit&eacute; des modules de micropaiement et de commerce ; paiement, veuillez d\'abord enregistrer un compte et cr&eacute;er un projet. <a href="https://%s.micropayment.de" target="blank">Cliquez ici pour vous inscrire.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS','
<style type="text/css">
.mcp_notice_register {
    margin-bottom: 5px;
    background-image: url("../images/micropayment/logo_small.png");
	background-position: 10px 10px;
	background-color: #ffdede;
    background-repeat: no-repeat;
    background-size: 100px;
    height: 40px;
	padding-left:130px;
	padding-top: 18px;
	border: 1px #cdcdcd solid;
}
</style>
');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE','Le paiement est en cours');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE','Paiement anticip&eacute;, paiement partiel');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE','en cours');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE','V&eacute;rifier l\'ordre');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE','V&eacute;rifier l\'ordre');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE','Probl&egrave;me de l\'&eacute;v&eacute;nement!');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE','en attente de paiement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE','payer d\'avance, payer partiellement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE','traitement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE','annul&eacute;');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE','la r&eacute;vision des paiements');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE','&eacute;v&eacute;nement - conflit!');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Suppression des commandes impay&eacute;es');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','Combien de jours une commande peut-elle avoir avec le statut "en attente de paiement" avant d\'&ecirc;tre supprim&eacute;e par le bouton "effacer les anciennes commandes". Important : les ordres de paiement anticip&eacute; ne seront pas supprim&eacute;s.');
?>