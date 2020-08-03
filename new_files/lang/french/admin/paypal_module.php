<?php
$lang_array = array(
  'TEXT_PAYPAL_MODULE_HEADING_TITLE' => 'Produits PayPal',
  'TABLE_HEADING_MODULES' => 'Module',
  'TABLE_HEADING_FILENAME' => 'Nom du module (pour usage interne)',
  'TABLE_HEADING_SORT_ORDER' => 'Triage',
  'TABLE_HEADING_STATUS' => 'Statut',
  'TABLE_HEADING_ACTION' => 'Action',
  'TABLE_HEADING_WALL_STATUS' => 'Affichage sur Paymentwall',
  'TABLE_HEADING_WALL_DESCRIPTION' => 'Description',
  'TEXT_PAYPAL_MODULE_PROFILE' => 'Profil',
  'TEXT_PAYPAL_NO_PROFILE' => 'pas de profil Web',
  'TEXT_PAYPAL_STANDARD_PROFILE' => 'Profil Web standard',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS' => 'Lien &agrave; la caisse',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO' => 'Le lien de paiement doit-il &ecirc;tre affich&eacute; dans la caisse?',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT' => 'Lien vers le compte',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO' => 'Le lien de paiement doit-il &ecirc;tre affich&eacute; dans le compte?',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT' => 'Bouton sur le produit',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT_INFO' => 'Le bouton PayPal doit-il &ecirc;tre affich&eacute; dans les d&eacute;tails du produit?',
  'TEXT_PAYPAL_MODULE_USE_TABS' => 'Accord&eacute;on / Onglets',
  'TEXT_PAYPAL_MODULE_USE_TABS_INFO' => 'Le mod&egrave;le utilise-t-il un accord&eacute;on ou des onglets dans la caisse?',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST' => 'les frais d\'exp&eacute;dition provisoires',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO' => 'Montant pour les frais d\'exp&eacute;dition provisoires.',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT' => 'Pr&eacute;senter le produit',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO' => 'Afficher les d&eacute;tails du versement sur le produit?',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART' => 'Afficher au panier',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO' => 'Afficher les d&eacute;tails de l\'acompte dans le panier?',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT' => 'Afficher &agrave; la caisse',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO' => 'Afficher les d&eacute;tails de l\'acompte lors du paiement?',
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>