<?php
  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Ch&egrave;que / mandat');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'A l\'ordre de:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Objet du paiement: %s<br /><br />Envoyer &agrave;:<br /><br />' . nl2br(STORE_OWNER) . '<br /><br />' . 'Votre commande ne sera pas exp&eacute;di&eacute;e tant que nous n\'aurons pas re&ccedil;u le paiement!');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "A l\'ordre de: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nObjet du paiement: %s\n\nEnvoyer &egrave;:\n" . STORE_OWNER . "\n\n" . 'Votre commande ne sera pas exp&eacute;di&eacute;e tant que nous n\'aurons pas re&ccedil;u le paiement');
  if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Nous exp&eacute;dions votre commande apr&egrave;s r&eacute;ception du paiement. Vous recevrez les donn&eacute;es du compte &agrave; la derni&egrave;re &eacute;tape de la commande.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Nous exp&eacute;dions votre commande apr&egrave;s r&eacute;ception du paiement. Vous recevrez les donn&eacute;es du compte par courrier &eacute;lectronique lorsque votre commande aura &eacute;t&eacute; confirm&eacute;e.');
  }
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , 'Activer le module Ch&egrave;que/mandat');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC' , 'Voulez-vous accepter les paiements par ch&egrave;que ou mandat-poste?');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE' , 'Rendre payable &agrave;:');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC' , 'A qui les paiements doivent-ils &ecirc;tre adress&eacute;s?');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE' , 'Ordre d\'affichage.');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC' , 'Ordre d\'affichage. Le plus bas est affich&eacute; en premier.');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE' , 'Zone de paiement');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC' , 'Si une zone est s&eacute;lectionn&eacute;e, n\'activez ce mode de paiement que pour cette zone.');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE' , 'D&eacute;finir le statut de la commande');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC' , 'R&eacute;gler le statut des commandes effectu&eacute;es avec ce module de paiement &agrave; cette valeur');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE' , 'Afficher les donn&eacute;es bancaires');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC' , 'Afficher les donn&eacute;es bancaires sur le succ&egrave;s de la caisse?');
?>