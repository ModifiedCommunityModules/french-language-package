<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALLINK_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ADMIN_TITLE' => 'PayPal Zahlungslink<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">ALT</span>',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALLINK_TEXT_DESCRIPTION' => 'PayPal comme lien de paiement pour le client apr&egrave;s que la commande ait &eacute;t&eacute; compl&eacute;t&eacute;e. D&eacute;cidez vous-m&ecirc;me de l\'endroit o&ugrave; le client re&ccedil;oit la demande de paiement.',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_TITLE' => 'Activer le lien PayPal',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_DESC' => 'Voulez-vous accepter les paiements par PayPal Link?',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_DESC' => 'Classement de la vue. Le chiffre le plus bas sera affich&eacute; en premier',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant.</strong></a>',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer PayPal sous "Modules partenaires". -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration de PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',
  
  'MODULE_PAYMENT_PAYPALLINK_TEXT_SUCCESS' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zoneVeuillez cliquer sur le lien suivant:<br/> %s',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_COMPLETED' => 'Merci de payer avec PayPal.',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>