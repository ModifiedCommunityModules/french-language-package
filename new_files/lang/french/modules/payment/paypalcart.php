<?php
$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'PayPal Express Checkout - le bouton PayPal dans le panier d\'achat et sur la page de l\'article pour une conversion maximale.<br/>Vous pouvez trouver plus d\'informations sur le raccourci PayPal Express <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">ici</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Activer PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => 'Voulez-vous accepter les paiements PayPal Express?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Classement de la vue. Le chiffre le plus bas sera affich&eacute; en premier',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant.</strong></a>',
  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer PayPal sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuration"</strong></a>!',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a &eacute;t&eacute; annul&eacute;',
  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Nous avons cr&eacute;&eacute; un compte client avec votre adresse e-mail PayPal. Vous pouvez demander le mot de passe de votre nouveau compte client ult&eacute;rieurement en utilisant la fonction "Mot de passe oubli&eacute;".',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>