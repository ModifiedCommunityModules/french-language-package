<?php
/* -----------------------------------------------------------------------------------------
   $Id: klarna.php 13152 2021-01-12 11:53:34Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$lang_array = array(
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_DESCRIPTION' => 'Avant de pouvoir configurer les m&eacute;thodes de paiement de Klarna Payments, il est n&eacute;cessaire d\'ouvrir un compte marchand avec Klarna. Vous recevrez alors les informations et les donn&eacute;es de connexion n&eacute;cessaires &agrave; la cr&eacute;ation du compte. Si vous avez d&eacute;j&agrave; un num&eacute;ro de client Klarna mais qu\'il ne figure pas dans le sch&eacute;ma Kxxxxxx, veuillez envoyer un e-mail &agrave; <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com</a>.<br /><br />
    <img src="../lang/english/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/uk/business/" target="_blank" style="text-decoration: underline; font-weight: bold;">Cr&eacute;er un compte Klarna maintenant.</a>
    <img src="images/icon_popup.gif" border="0" />',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_INFO' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_DESC' => 'Veuillez saisir les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones)).',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_TITLE' => 'Module d\'activation',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_DESC' => 'Voulez-vous accepter les paiements via ce module?',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_TITLE' => 'Ordre de tri',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_DESC' => 'Ordre de tri de l\'affichage. Le plus bas est affich&eacute; en premier.',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_DESC' => 'Si une zone est choisie, le mode de paiement ne sera valable que pour cette zone..',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_TITLE' => 'D&eacute;finir le statut de la commande',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_DESC' => 'Donnez cette valeur au statut des commandes pass&eacute;es avec ce module de paiement.',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_TITLE' => 'Activez',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_DESC' => 'L\'ordre doit-il &ecirc;tre activ&eacute; automatiquement?',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_HEADING' => 'Klarna',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE' => 'Le paiement a &eacute;t&eacute; annul&eacute;.',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_VERSION' => '<b>Version du module</b><br/>',

  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE' => 'Nom d\'utilisateur',
  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC' => 'Nom d\'utilisateur de l\'API Klarna',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE' => 'Mot de passe',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC' => 'Mot de passe API Klarna',
  'MODULE_PAYMENT_KLARNA_MODE_TITLE' => 'Mode',
  'MODULE_PAYMENT_KLARNA_MODE_DESC' => 'Klarna Mode',
);
