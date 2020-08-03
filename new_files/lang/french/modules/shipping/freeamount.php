<?php
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Livraison gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Livraison gratuite avec montant minimum de commande');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'Commande minimale d\'exp&eacute;dition gratuite: %s');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Malheureusement, il n\'est pas possible d\'envoyer dans ce pays');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE' , 'Permettre la livraison gratuite avec un achat minimum');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC' , 'Voulez-vous offrir la livraison gratuite?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , 'Zone de navigation');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , 'Si vous choisissez une zone, seules les zones d\'exp&eacute;dition utilis&eacute;es.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , 'Ordre d\'affichage');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , 'Le plus bas sera affich&eacute; en premier.');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE' , '<hr/>Zone '.$module_shipping_freeamount_i.' Pays');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC' , 'Liste s&eacute;par&eacute;e par des virgules des codes pays ISO &agrave; deux caract&egrave;res qui font partie de la zone '.$module_shipping_freeamount_i.' (Entrez dans le MONDE pour le reste du monde.).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE' , 'Zone '.$module_shipping_freeamount_i.' Co&ucirc;t minimum');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC' , 'Le montant minimum de commande achet&eacute; pour la zone '.$module_shipping_freeamount_i.' avant l\'exp&eacute;dition est gratuit.');
  }
}
?>