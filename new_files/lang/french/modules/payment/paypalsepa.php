<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalsepa.php 14303 2022-04-13 08:17:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALSEPA_TEXT_TITLE' => 'Pr&eacute;l&egrave;vement automatique via PayPal',
  'MODULE_PAYMENT_PAYPALSEPA_TEXT_ADMIN_TITLE' => 'Pr&eacute;l&egrave;vement automatique via PayPal',
  'MODULE_PAYMENT_PAYPALSEPA_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal_sepa.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALSEPA_TEXT_DESCRIPTION' => 'Apr&egrave;s avoir confirm&eacute; votre commande, vous serez redirig&eacute; vers PayPal pour payer votre commande. &lt;br /&gt;Vous retournerez ensuite dans la boutique et recevrez votre confirmation de commande. &lt;br /&gt;Payez maintenant plus rapidement avec la protection illimit&eacute;e de PayPal - naturellement gratuitement.',
  'MODULE_PAYMENT_PAYPALSEPA_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALSEPA_ALLOWED_DESC' => 'Indiquez &lt;b&gt;individuellement&lt;/b&gt; les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALSEPA_STATUS_TITLE' => 'Activer le pr&eacute;l&egrave;vement automatique PayPal',
  'MODULE_PAYMENT_PAYPALSEPA_STATUS_DESC' => 'Souhaitez-vous accepter les paiements par pr&eacute;l&egrave;vement automatique PayPal ?',
  'MODULE_PAYMENT_PAYPALSEPA_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALSEPA_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALSEPA_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALSEPA_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone..',
  'MODULE_PAYMENT_PAYPALSEPA_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALSEPA_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore effectuer les r&eacute;glages sous "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALSEPA_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALSEPA_TEXT_ERROR_MESSAGE' => 'Le paiement par pr&eacute;l&egrave;vement automatique via PayPal a &eacute;t&eacute; interrompu',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>