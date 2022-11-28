<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalacdc.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALACDC_TEXT_TITLE' => 'Carte de cr&eacute;dit',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ADMIN_TITLE' => 'Carte de cr&eacute;dit (sans r&eacute;f&eacute;rence &agrave; PayPal)',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal_creditcard.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALACDC_TEXT_DESCRIPTION' => 'Lors de la derni&egrave;re &eacute;tape du checkout, il vous sera demand&eacute; de saisir les donn&eacute;es de votre carte de cr&eacute;dit afin de payer votre commande.',
  'MODULE_PAYMENT_PAYPALACDC_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALACDC_ALLOWED_DESC' => 'Indiquez <b>individuellement</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALACDC_STATUS_TITLE' => 'Activer la carte de cr&eacute;dit',
  'MODULE_PAYMENT_PAYPALACDC_STATUS_DESC' => 'Souhaitez-vous accepter les paiements par carte PayPal ?',
  'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALACDC_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALACDC_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALACDC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore effectuer les r&eacute;glages sous "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a> avant!',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MESSAGE' => 'Le paiement par carte de cr&eacute;dit a &eacute;t&eacute; annul&eacute;',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MSG' => 'Le paiement ne peut malheureusement pas &ecirc;tre effectu&eacute;.',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER' => 'Num&eacute;ro de carte',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDHOLDER' => 'Titulaire de la carte',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION' => 'Valable jusqu\'au',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV' => 'Chiffre de contr&ocirc;le',

  'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER_PLACEHOLDER' => 'Num&eacute;ro de carte',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION_PLACEHOLDER' => 'MM/JJ',
  'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV_PLACEHOLDER' => 'Chiffre de contr&ocirc;le',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>