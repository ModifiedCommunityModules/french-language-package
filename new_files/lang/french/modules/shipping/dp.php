<?php
define('MODULE_SHIPPING_DP_TEXT_TITLE', 'La Poste allemande');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'La poste allemande - Module d\'exp&eacute;dition mondial');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Envoi &agrave;');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Malheureusement, il n\'est pas possible d\'envoyer dans ce pays');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Les frais d\'exp&eacute;dition ne peuvent &ecirc;tre calcul&eacute;s pour l\'instant');
define('MODULE_SHIPPING_DP_STATUS_TITLE' , 'German Post WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC' , 'Souhaitez-vous proposer l\'exp&eacute;dition avec German Post WorldNet?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , 'Frais de traitement');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , 'Frais de traitement en euros');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , 'Fiscalit&eacute;');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' , 'Veuillez choisir le taux d\'imposition pour l\'exp&eacute;dition.');
define('MODULE_SHIPPING_DP_ZONE_TITLE' , 'Zone de navigation');
define('MODULE_SHIPPING_DP_ZONE_DESC' , 'Si vous choisissez une zone, seules les zones d\'exp&eacute;dition utilis&eacute;es.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , 'Ordre d\'affichage');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , 'Le plus bas montr&eacute; en premier.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , 'Zones d\'exp&eacute;dition individuelles');
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_DP_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE' , '<hr/>DP Zone '.$module_shipping_dp_i.' Pays');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC' , 'Liste s&eacute;par&eacute;e par des virgules des codes pays ISO &agrave; deux caract&egrave;res qui font partie de la zone '.$module_shipping_dp_i.' (Entrez dans le MONDE pour le reste du monde.).');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE' , 'DP Zone '.$module_shipping_dp_i.' Tableau d\'exp&eacute;dition');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC' , 'Les tarifs d\'exp&eacute;dition vers les destinations de la zone '.$module_shipping_dp_i.' sont bas&eacute;s sur une gamme de poids de commande. Exemple : 3:8.50,7:10.50,99999:12.00... Les poids sup&eacute;rieurs &agrave; 0 et inf&eacute;rieurs &agrave; 3 co&ucirc;tent 8,50, les poids inf&eacute;rieurs &agrave; 7 co&ucirc;tent 10,50 pour les destinations de la zone '.$module_shipping_dp_i);
  }
}
?>