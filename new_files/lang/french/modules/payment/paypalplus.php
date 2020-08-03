<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE' => 'PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE' => 'PayPal Plus avec PayPal Express',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO' => 'Veuillez s&eacute;lectionner l\'un des modes de paiement &eacute;num&eacute;r&eacute;s ici en cliquant.',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION' => 'PayPal Plus - les quatre m&eacute;thodes de paiement les plus populaires aupr&egrave;s des acheteurs allemands : PayPal, d&eacute;bit direct, carte de cr&eacute;dit et facture.<br/>Vous pouvez trouver plus d\'informations sur PayPal Plus <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">ici</a>.',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE' => 'Activer PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC' => 'Vous voulez accepter PayPal, Carte de cr&eacute;dit, D&eacute;bit direct et Paiement sur facture?',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC' => 'Classement de la vue. Le chiffre le plus bas sera affich&eacute; en premier',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALPLUS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant.</strong></a>',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer PayPal sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',
  'MODULE_PAYMENT_PAYPALPLUS_INVOICE' => 'Paiement sur facture',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>