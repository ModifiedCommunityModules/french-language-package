<?php
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_TEXT_TITLE', 'Virement bancaire en ligne');
$_var = 'Virement bancaire en ligne via Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var.='<br /><br /><b><font color="red">Veuillez d\'abord configurer skrill.com ! (Configuration avanc&eacute;e -> Partenaire -> Skrill.com)!</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_NOCURRENCY_ERROR', 'Il n\'y a pas de monnaie accept&eacute;e par Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_TEXT_INFO','');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ERRORTEXT2', '&error=Il y a eu une erreur lors de votre paiement chez Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ORDER_TEXT', 'Date de l\'ordonnance: ');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_TEXT_ERROR', 'Erreur de paiement!');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_CONFIRMATION_TEXT', 'Merci pour votre commande!');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_TRANSACTION_FAILED_TEXT', 'Votre transaction de paiement chez Skrill a &eacute;chou&eacute;. Veuillez r&eacute;essayer, ou s&eacute;lectionnez un autre mode de paiement!');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_STATUS_TITLE', 'Activer les comp&eacute;tences');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_STATUS_DESC', 'Voulez-vous accepter des paiements par le biais de Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_SORT_ORDER_TITLE', 'Ordre d\'affichage.');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_SORT_ORDER_DESC', 'Trier l\'ordre d\'affichage. Le plus bas est affich&eacute; en premier.');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ZONE_DESC', 'Si une zone est s&eacute;lectionn&eacute;e, n\'activez ce mode de paiement que pour cette zone.');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
define('MODULE_PAYMENT_MONEYBOOKERS_SFT_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
?>