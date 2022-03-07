<?php
/* -----------------------------------------------------------------------------------------
   $Id: semknox_system.php 13465 2021-03-11 11:35:15Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Recherche de sites 360 Recherche de produits');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Recherche r&eacute;volutionnaire de produits de nouvelle g&eacute;n&eacute;ration pour votre entreprise avec un traitement enti&egrave;rement automatique des donn&eacute;es.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Statut du module');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Activer la recherche de sites 360 Productsearch');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'CSS par d&eacute;faut');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Voulez-vous charger le CSS 360 de Site Search par d&eacute;faut ??');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Couleur d\'accentuation');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Sp&eacute;cifiez la couleur d\'accentuation pour le titre et les boutons (ce param&egrave;tre ne fonctionne que si le CSS standard est charg&eacute;)..');
  
  $languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Cl&eacute; API');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'Cl&eacute; API pour '.strtoupper($language['code']).'');

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] ID du projet');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'ID du projet pour '.strtoupper($language['code']).'');
  }