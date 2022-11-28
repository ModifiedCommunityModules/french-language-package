<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypaltrustly.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_TITLE' => 'Trustly via PayPal',
  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_ADMIN_TITLE' => 'En toute confiance via PayPal',
  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_INFO' => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_trustly_color.svg" />',
  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_DESCRIPTION' => 'Apr&egrave;s avoir confirm&eacute; votre commande, vous serez redirig&eacute; vers Trustly pour payer votre commande. &lt;br /&gt;Vous retournerez ensuite dans la boutique et recevrez votre confirmation de commande. &lt;br /&gt;Payez maintenant plus rapidement avec la protection illimit&eacute;e des acheteurs PayPal - naturellement gratuitement.',
  'MODULE_PAYMENT_PAYPALTRUSTLY_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALTRUSTLY_ALLOWED_DESC' => 'Indiquez &lt;b&gt;individuellement&lt;/b&gt; les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALTRUSTLY_STATUS_TITLE' => 'Trustly via PayPal activer',
  'MODULE_PAYMENT_PAYPALTRUSTLY_STATUS_DESC' => 'Vous souhaitez accepter les paiements par PayPal Trustly ?',
  'MODULE_PAYMENT_PAYPALTRUSTLY_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALTRUSTLY_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALTRUSTLY_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALTRUSTLY_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALTRUSTLY_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>JCr&eacute;er un compte PayPal ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore effectuer les r&eacute;glages sous "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuration"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALTRUSTLY_TEXT_ERROR_MESSAGE' => 'Le paiement avec Trustly via PayPal a &eacute;t&eacute; annul&eacute;',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>