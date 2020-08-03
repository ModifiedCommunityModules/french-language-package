<?php
define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Taux de zone');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Taux par zone');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Exp&eacute;dition vers:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'Pas d\'exp&eacute;dition disponible dans le pays s&eacute;lectionn&eacute;!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'Le tarif d\'exp&eacute;dition ne peut &ecirc;tre d&eacute;termin&eacute; pour l\'instant.');
define('MODULE_SHIPPING_ZONES_STATUS_TITLE' , 'M&eacute;thode d\'activation des zones');
define('MODULE_SHIPPING_ZONES_STATUS_DESC' , 'Vous souhaitez proposer un transport au tarif de zone?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , 'Cat&eacute;gorie d\'imp&ocirc;t');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' , 'Utilisez la classe d\'imp&ocirc;t suivante sur les frais d\'exp&eacute;dition.');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , 'Zone de navigation');
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , 'Si vous choisissez une zone, seules les zones d\'exp&eacute;dition utilis&eacute;es.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , 'Ordre de tri');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , 'Ordre d\'affichage.');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_TITLE' , '<hr/>Zone '.$module_shipping_zones_i.' Pays');
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_DESC' , 'Liste s&eacute;par&eacute;e par des virgules des codes pays ISO &agrave; deux caract&egrave;res qui font partie de la zone '.$module_shipping_zones_i.' (Entrez dans le MONDE pour le reste du monde).');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_TITLE' , 'Tableau des exp&eacute;ditions de la zone '.$module_shipping_zones_i);
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_DESC' , 'Les tarifs d\'exp&eacute;dition vers les destinations de la zone '.$module_shipping_zones_i.' sont bas&eacute;s sur un groupe de poids maximum de commande. Exemple : 3:8.50,7:10.50,... Les poids inf&eacute;rieurs ou &eacute;gaux &agrave; 3 co&ucirc;teraient 8,50 pour les destinations de la zone '.$module_shipping_zones_i);
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_TITLE' , 'Zone '.$module_shipping_zones_i.' Frais de traitement');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_DESC' , 'Frais de manutention pour cette zone de navigation');
  }
}
?>