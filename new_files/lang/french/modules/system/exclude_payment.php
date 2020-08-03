<?php
define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Modes de paiement en fonction du mode d\'exp&eacute;dition');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE' , 'Statut');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC' , 'Activer le module?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE' , 'Nombre de m&eacute;thodes d\'exp&eacute;dition');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC' , 'Nombre d\'options de livraison &agrave; configurer.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
  for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE' , '<hr noshade>'.$module_exclude_payment_i.'. mode d\'exp&eacute;dition');
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC' , 'S&eacute;lectionnez le mode de livraison lorsque vous souhaitez exclure un mode de paiement.');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE' , $module_exclude_payment_i.'. mode de paiement exclu');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC' , 'S&eacute;lectionnez le mode de paiement que vous souhaitez exclure.');
  }
}
?>