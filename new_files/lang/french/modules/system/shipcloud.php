<?php
if (defined('_VALID_XTC')) {
  define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - la nouvelle g&eacute;n&eacute;ration d\'exp&eacute;dition de colis');
  define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Imprimer les &eacute;tiquettes des colis directement &agrave; la sortie du magasin.');
  define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Statut');
  define('MODULE_SHIPCLOUD_STATUS_DESC', 'Activation du module?');
  define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
  define('MODULE_SHIPCLOUD_API_DESC', 'Cl&eacute; API de shipcloud');
  define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Taille de l\'emballage');
  define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Veuillez d&eacute;finir la taille des paquets comme suit : longueur, largeur, hauteur;<br/>Vous pouvez d&eacute;finir plusieurs tailles s&eacute;par&eacute;es par un point-virgule ( ;). Par exemple : 20,40,30;15,20,20 ;');
  define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>D&eacute;tails du client<br/>');
  define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Soci&eacute;t&eacute;:');
  define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Pr&eacute;nom:');
  define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Nom de famille:');
  define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
  define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Adresse:');
  define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
  define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'Zip:');
  define('MODULE_SHIPCLOUD_CITY_TITLE', '');
  define('MODULE_SHIPCLOUD_CITY_DESC', 'Ville:');
  define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
  define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'T&eacute;l&eacute;phone:');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN:');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC:');
  define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Coordonn&eacute;es bancaires<br/>');
  define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banque:');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Titulaire:');
  define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Log');
  define('MODULE_SHIPCLOUD_LOG_DESC', 'le fichier journal est stock&eacute; dans le dossier / log.');
  define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Notification par courrier &eacute;lectronique');
  define('MODULE_SHIPCLOUD_EMAIL_DESC', 'Aviser le client par courrier &eacute;lectronique?');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Notification');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', 'Le client doit-il &ecirc;tre averti par le Shop ou shipcloud?<br><Note:</b>Pour une notification de la boutique doit d&eacute;finir un Webhook &agrave; cette URL: '.xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false).' dans shipcloud.');
}

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Exp&eacute;dition cr&eacute;&eacute;e &agrave; shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Un label a &eacute;t&eacute; cr&eacute;&eacute;');
define('SHIPMENT.TRACKING.PICKED_UP', 'L\'envoi a &eacute;t&eacute; pris en charge par le transporteur');
define('SHIPMENT.TRACKING.TRANSIT', 'L\'envoi est en transit');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'En route pour la livraison');
define('SHIPMENT.TRACKING.DELIVERED', 'Livr&eacute; &agrave;');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'En attente d\'une prise en charge par le receveur');
define('SHIPMENT.TRACKING.CANCELED', 'l\'&eacute;tiquette a &eacute;t&eacute; supprim&eacute;e');
define('SHIPMENT.TRACKING.DELAYED', 'La livraison sera retard&eacute;e');
define('SHIPMENT.TRACKING.EXCEPTION', 'Il y a un probl&egrave;me avec l\'envoi');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'Non d&eacute;livr&eacute;e');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Notification interne du transporteur : Le suivi des &eacute;v&eacute;nements au sein de l\'envoi donnera lieu &agrave; des informations plus d&eacute;taill&eacute;es.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Statut inconnu');
?>