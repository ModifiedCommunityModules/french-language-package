<?php
define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Tableau Taux');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Tableau Taux');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'La meilleure fa&ccedil;on (%01.2f kg)');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Poids');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Montant');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'Pas d\'exp&eacute;dition disponible dans le pays s&eacute;lectionn&eacute;!');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'Le tarif d\'exp&eacute;dition ne peut &ecirc;tre d&eacute;termin&eacute; pour l\'instant.');
define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , 'Activer la m&eacute;thode des tableaux');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , 'Souhaitez-vous proposer l\'exp&eacute;dition au tarif de table?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , 'M&eacute;thode des tableaux');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , 'Les frais d\'exp&eacute;dition sont bas&eacute;s sur le total de la commande ou sur le poids total des articles command&eacute;s.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , 'Cat&eacute;gorie d\'imp&ocirc;t');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' , 'Utilisez la classe d\'imp&ocirc;t suivante sur les frais d\'exp&eacute;dition.');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , 'Zone de navigation');
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , 'Si une zone est s&eacute;lectionn&eacute;e, n\'activez ce mode d\'exp&eacute;dition que pour cette zone.');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , 'Ordre de tri');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , 'Ordre d\'affichage.');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
  for ($module_shipping_table_i = 1; $module_shipping_table_i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $module_shipping_table_i ++) {
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_TITLE' , '<hr/>Zone '.$module_shipping_table_i.' Pays');
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_DESC' , 'Liste s&eacute;par&eacute;e par des virgules des codes pays ISO &agrave; deux caract&egrave;res qui font partie de la zone '.$module_shipping_table_i.' (Entrez dans le MONDE pour le reste du monde.).');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' Tableau d\'exp&eacute;dition');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_DESC' , 'Tarifs d\'exp&eacute;dition vers la zone '.$module_shipping_table_i.'  les destinations bas&eacute;es sur un groupe de poids maximum de commande ou sur le total de la commande. Exemple : 3:8.50,7:10.50,... Un total de poids inf&eacute;rieur ou &eacute;gal &agrave; 3 co&ucirc;terait 8,50 pour les destinations de la zone '.$module_shipping_table_i);
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' Frais de traitement');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_DESC' , 'Frais de manutention pour cette zone de navigation');
  }
}
?>