<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE' => 'PayPal<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">ALT</span>',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION' => 'Apr&egrave;s avoir "confirm&eacute;", vous serez redirig&eacute; vers PayPal pour payer votre commande.<br />Retour &agrave; la boutique, vous recevrez votre commande par courrier &eacute;lectronique.<br />PayPal est le moyen le plus s&ucirc;r de payer en ligne. Nous prot&eacute;geons vos donn&eacute;es personnelles et pouvons vous aider &agrave; r&eacute;cup&eacute;rer votre argent si jamais quelque chose se passe mal.',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE' => 'Activer PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC' => 'Voulez-vous accepter les paiements PayPal?',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC' => 'Classement de la vue. Le chiffre le plus bas sera affich&eacute; en premier',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALCLASSIC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant.</strong></a>',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer PayPal sous "Modules partenaires"-> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration de PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>