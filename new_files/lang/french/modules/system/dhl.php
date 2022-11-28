<?php
/* -----------------------------------------------------------------------------------------
   $Id: dhl.php 14308 2022-04-13 11:43:36Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_DHL_TEXT_TITLE', 'Connexion DHL');
  define('MODULE_DHL_TEXT_DESCRIPTION', 'Imprimer facilement des &eacute;tiquettes de colis DHL &agrave; partir de la boutique en ligne.');

  define('MODULE_DHL_STATUS_TITLE', 'Statut');
  define('MODULE_DHL_STATUS_DESC', 'Activer le module');
  define('MODULE_DHL_USER_TITLE', '<hr noshade>Utilisateur');
  define('MODULE_DHL_USER_DESC', 'Nom d\'utilisateur du portail clients de DHL');
  define('MODULE_DHL_SIGNATURE_TITLE', 'Mot de passe');
  define('MODULE_DHL_SIGNATURE_DESC', 'Mot de passe du portail clients DHL');
  define('MODULE_DHL_EKP_TITLE', 'EKP');
  define('MODULE_DHL_EKP_DESC', 'Num&eacute;ro de client DHL');
  define('MODULE_DHL_ACCOUNT_TITLE', 'Compte');
  define('MODULE_DHL_ACCOUNT_DESC', 'Konto-ID im ISO2:ID-Format, die durch ein Komma getrennt ist (z. B. WORLD:01).&lt;br&gt;Wenn der Warenbrief eine andere ID hat, f&uuml;gen Sie PK (Paket) oder WP (Warenbrief) hinzu. Beispiel: WORLD:01PK,WORLD:02WP');
  define('MODULE_DHL_PREFIX_TITLE', 'R&eacute;f&eacute;rence de l\'exp&eacute;diteur Prefix');
  define('MODULE_DHL_PREFIX_DESC', 'Geben Sie ein Prefix f&uuml;r die Absenderreferenz an. Die Bestellnummer wird automatisch mit angeh&auml;ngt.');
  define('MODULE_DHL_WEIGHT_CN23_TITLE', 'Gewicht CN23');
  define('MODULE_DHL_WEIGHT_CN23_DESC', 'Indiquez le poids de l\'article pour la d&eacute;claration en douane, s\'il n\'est pas d&eacute;fini pour l\'article.');
  
  define('MODULE_DHL_NOTIFICATION_TITLE', '<hr noshade>Notification');
  define('MODULE_DHL_NOTIFICATION_DESC', 'Faut-il choisir la notification par d&eacute;faut via DHL ? 
 Le client est inform&eacute; de l\'exp&eacute;dition par DHL par e-mail. Remarque : pour cela, le client doit donner son accord pour la transmission de son adresse e-mail.');
  define('MODULE_DHL_STATUS_UPDATE_TITLE', 'Notification &amp; mise &agrave; jour du statut');
  define('MODULE_DHL_STATUS_UPDATE_DESC', 'Le client est inform&eacute; par e-mail, y compris les informations de suivi, et la commande est plac&eacute;e sous ce statut.');
  define('MODULE_DHL_CODING_TITLE', 'Codage de guidage');
  define('MODULE_DHL_CODING_DESC', 'Si le code de guidage doit &ecirc;tre pr&eacute;s&eacute;lectionn&eacute; comme standard?');
  define('MODULE_DHL_PRODUCT_TITLE', 'Produit');
  define('MODULE_DHL_PRODUCT_DESC', 'Quel produit doit &ecirc;tre choisi par d&eacute;faut ?');
  define('MODULE_DHL_DISPLAY_LABEL_TITLE', 'Afficher l\'&eacute;tiquette');
  define('MODULE_DHL_DISPLAY_LABEL_DESC', 'L\'&eacute;tiquette DHL doit-elle &ecirc;tre affich&eacute;e (popup) apr&egrave;s la cr&eacute;ation ?');
  define('MODULE_DHL_RETOURE_TITLE', '&Eacute;tiquette de retour');
  define('MODULE_DHL_RETOURE_DESC', 'Faut-il en plus cr&eacute;er une &eacute;tiquette de retour ?');
  define('MODULE_DHL_PERSONAL_TITLE', 'Propre &agrave; l\'entreprise');
  define('MODULE_DHL_PERSONAL_DESC', 'Doit-on choisir par d&eacute;faut l\'autosuffisance ?');
  define('MODULE_DHL_BULKY_TITLE', 'Objets encombrants');
  define('MODULE_DHL_BULKY_DESC', 'Faut-il choisir un colis encombrant par d&eacute;faut ?');
  define('MODULE_DHL_NO_NEIGHBOUR_TITLE', 'Pas de distribution de proximit&eacute;');
  define('MODULE_DHL_NO_NEIGHBOUR_DESC', 'Ne faut-il pas choisir la distribution de proximit&eacute; comme norme ?');
  define('MODULE_DHL_PARCEL_OUTLET_TITLE', 'Routage des magasins');
  define('MODULE_DHL_PARCEL_OUTLET_DESC', 'Faut-il choisir par d&eacute;faut le routage des points de vente ?');
  define('MODULE_DHL_AVS_TITLE', 'Examen de la vue de l\'&acirc;ge');
  define('MODULE_DHL_AVS_DESC', 'Qu\'est-ce qui doit &ecirc;tre pr&eacute;s&eacute;lectionn&eacute; par d&eacute;faut pour l\'examen visuel de l\'&acirc;ge (0 est d&eacute;sactiv&eacute;) ??');
  define('MODULE_DHL_IDENT_TITLE', 'V&eacute;rification de l\'&acirc;ge');
  define('MODULE_DHL_IDENT_DESC', 'Qu\'est-ce qui doit &ecirc;tre pr&eacute;s&eacute;lectionn&eacute; par d&eacute;faut pour le test de vieillissement (0 est d&eacute;sactiv&eacute;) ?');
  define('MODULE_DHL_PREMIUM_TITLE', 'Premium');
  define('MODULE_DHL_PREMIUM_DESC', 'Faut-il choisir Premium par d&eacute;faut ?');
  define('MODULE_DHL_ENDORSEMENT_TITLE', 'Proc&eacute;dure de pr&eacute;-admission');
  define('MODULE_DHL_ENDORSEMENT_DESC', 'Comment les colis internationaux doivent-ils &ecirc;tre trait&eacute;s s\'ils ne peuvent pas &ecirc;tre livr&eacute;s ?');

  define('MODULE_DHL_COMPANY_TITLE', '<hr noshade>D&eacute;tails du client<br/>');
  define('MODULE_DHL_COMPANY_DESC', 'Soci&eacute;t&eacute;:');
  define('MODULE_DHL_FIRSTNAME_TITLE', '');
  define('MODULE_DHL_FIRSTNAME_DESC', 'Pr&eacute;nom:');
  define('MODULE_DHL_LASTNAME_TITLE', '');
  define('MODULE_DHL_LASTNAME_DESC', 'Nom de famille:');
  define('MODULE_DHL_ADDRESS_TITLE', '');
  define('MODULE_DHL_ADDRESS_DESC', 'Adresse:');
  define('MODULE_DHL_POSTCODE_TITLE', '');
  define('MODULE_DHL_POSTCODE_DESC', 'code postal:');
  define('MODULE_DHL_CITY_TITLE', '');
  define('MODULE_DHL_CITY_DESC', 'Ville:');
  define('MODULE_DHL_TELEPHONE_TITLE', '');
  define('MODULE_DHL_TELEPHONE_DESC', 'T&eacute;l&eacute;phone:');
  
  define('MODULE_DHL_ACCOUNT_OWNER_TITLE', '<hr noshade>Donn&eacute;es bancaires<br/>');
  define('MODULE_DHL_ACCOUNT_OWNER_DESC', 'Titulaire du compte:');
  define('MODULE_DHL_ACCOUNT_NUMBER_TITLE', '');
  define('MODULE_DHL_ACCOUNT_NUMBER_DESC', 'Num&eacute;ro de compte:');
  define('MODULE_DHL_BANK_CODE_TITLE', '');
  define('MODULE_DHL_BANK_CODE_DESC', 'Code bancaire:');
  define('MODULE_DHL_BANK_NAME_TITLE', '');
  define('MODULE_DHL_BANK_NAME_DESC', 'Nom de la banque:');
  define('MODULE_DHL_IBAN_TITLE', '');
  define('MODULE_DHL_IBAN_DESC', 'IBAN:');
  define('MODULE_DHL_BIC_TITLE', '');
  define('MODULE_DHL_BIC_DESC', 'BIC:');
