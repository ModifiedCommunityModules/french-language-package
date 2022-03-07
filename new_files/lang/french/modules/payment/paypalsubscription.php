<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypallink.php 12400 2019-11-08 13:28:49Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE' => 'Abonnement PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION' => 'PayPal comme lien de paiement qui n\'est disponible pour le client qu\'apr&egrave;s la conclusion de la commande. D&eacute;cidez vous-m&ecirc;me o&ugrave; le client re&ccedil;oit la demande de paiement.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC' => 'Indiquez <b>individuellement</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE' => 'Abonnement PayPal aktivieren',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC' => 'Souhaitez-vous accepter les paiements par PayPal Subscription ?',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone..',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore effectuer les r&eacute;glages sous "Modules partenaires". -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Konfiguration de PayPal"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>