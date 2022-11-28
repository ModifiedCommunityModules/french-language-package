<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalexpress.php 14191 2022-03-24 07:03:40Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_TITLE' => 'PayPal Express',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ADMIN_TITLE' => 'PayPal sur la page du panier d\'achat',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_DESCRIPTION' => 'Apr&egrave;s avoir confirm&eacute; votre commande, vous serez redirig&eacute; vers PayPal pour payer votre commande.<br />Vous retournerez ensuite dans la boutique et recevrez votre confirmation de commande.<br />Payez maintenant plus rapidement avec la protection illimit&eacute;e des acheteurs PayPal - bien s&ucirc;r gratuitement.',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_DESC' => 'Indiquez <b>individuellement</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_TITLE' => 'Activer PayPal Express',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_DESC' => 'Vous souhaitez accepter les paiements par PayPal Express ?',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALEXPRESS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore effectuer les r&eacute;glages sous "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a> avant!',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Nous avons cr&eacute;&eacute; pour vous un compte client avec votre adresse e-mail PayPal. Vous pouvez demander le mot de passe de votre nouveau compte client plus tard en utilisant la fonction "Mot de passe oubli&eacute;".',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>