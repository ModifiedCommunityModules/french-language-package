<?php
$lang_array = array(
  'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE' => 'Les crochets Web de PayPal',

  'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'non configur&eacute;',
  'TEXT_PAYPAL_WEBHOOK_INFO' => '<ul><li>Pas d\'acc&egrave;s au Webhooks.</li><li>Avec Webhhoks, vous recevez des mises &agrave; jour sur l\'&eacute;tat des paiements et des commandes</li><li>Pour utiliser le webhook, il est imp&eacute;ratif que vous disposiez d\'un certificat SSL valide.</li></ul>',
  'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO' => 'Pas de Webhooks disponibles. Veuillez v&eacute;rifier vos r&eacute;f&eacute;rences.',
  
  'TABLE_HEADING_URL' => 'URL',
  'TABLE_HEADING_WEBHOOK' => 'Webhook',
  'TABLE_HEADING_STATUS' => 'Statut',
  'TABLE_HEADING_DESCRIPTION' => 'Description',
  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>