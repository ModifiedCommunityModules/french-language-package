<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_TITLE' => 'Ratenzahlung propuls&eacute; par PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_DESCRIPTION' => 'Installment Powered by PayPal<br/>Vous pouvez trouver plus d\'informations sur Installment powered by PayPal <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/installments">ici</a>.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_TITLE' => 'Activer le Ratenzahlung aliment&eacute; par PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_DESC' => 'Voulez-vous accepter le Ratenzahlung aliment&eacute; par des paiements PayPal?',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_DESC' => 'Classement de la vue. Le chiffre le plus bas sera affich&eacute; en premier',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant.</strong></a>',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer PayPal sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration de PayPal"</strong></a>!',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_CHECKBOX' => 'J\'accepte que mes donn&eacute;es soient partag&eacute;es avec PayPal.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_CHECKBOX' => 'Veuillez accepter que vos donn&eacute;es soient partag&eacute;es avec PayPal.',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>