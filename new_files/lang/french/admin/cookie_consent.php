<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.php 13006 2020-12-06 15:26:30Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Copyright (c) 2019, Andreas Guder [info@andreas-guder.de]     
   --------------------------------------------------------------   
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('HEADING_TITLE', 'Cookie-Consentement');
  define('HEADING_TITLE_DETAIL', 'Consentement aux cookies - Cookies');

  define('TABLE_HEADING_ACTION', 'Action');
  define('TABLE_HEADING_STATUS', 'Statut');
  define('TABLE_HEADING_SORT', 'Trier');

  define('TABLE_HEADING_VALUES_CONTENT', 'Cookies/Groupe');
  define('TABLE_HEADING_VALUES_NAME', 'Nom');
  define('TABLE_HEADING_VALUES_DESCRIPTION', 'Description');
  define('TABLE_HEADING_VALUES_COOKIES', 'Cookies');

  define('TABLE_HEADING_OPTIONS_NAME', 'Nom');
  define('TABLE_HEADING_OPTIONS_DESCRIPTION', 'Description');

  define('TEXT_INFO_DATE_ADDED', 'Date ajout&eacute;e:');
  define('TEXT_INFO_LAST_MODIFIED', 'Derni&egrave;re modification:');

  define('TEXT_INFO_VALUE_NAME', 'Nom:');
  define('TEXT_INFO_VALUE_DESCRIPTION', 'Description:');
  define('TEXT_INFO_VALUE_COOKIES', 'Cookies:');
  define('TEXT_INFO_VALUE_SORT', 'Trier:');
  define('TEXT_INFO_VALUE_COOKIES_DESC', 'Saisissez le nom du cookie &agrave; supprimer. Vous pouvez sp&eacute;cifier plusieurs noms s&eacute;par&eacute;s par des virgules. Vous pouvez &eacute;galement saisir simplement les premiers caract&egrave;res des noms, mais ils ne doivent pas se superposer &agrave; d\'autres cookies afin de ne pas supprimer le mauvais cookie.');

  define('TEXT_INFO_HEADING_NEW_VALUE', 'Nouveau cookie/groupe');
  define('TEXT_INFO_NEW_VALUE_INTRO', 'Veuillez saisir le nouveau cookie en incluant toutes les donn&eacute;es pertinentes');
  define('TEXT_INFO_HEADING_EDIT_VALUE', 'cookie d\'&eacute;dition');
  define('TEXT_INFO_EDIT_VALUE_INTRO', 'Veuillez apporter les modifications n&eacute;cessaires.');
  define('TEXT_INFO_HEADING_DELETE_VALUE', 'supprimer le cookie/gruppe');
  define('TABLE_HEADING_VALUES_PURPOSEID', 'objet-id');
  define('TEXT_INFO_HEADING_JSCRIPT_SRC', 'Tag Javascript pour les scripts inclus');
  define('TEXT_INFO_HEADING_JSCRIPT_DIRECT', 'Tag Javascript pour les scripts en ligne');
  define('TEXT_INFO_HEADING_JSCRIPT_OTHER_CODE', 'Code pour les autres &eacute;l&eacute;ments de suivi');
  define('TEXT_INFO_DELETE_VALUE_INTRO', '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce cookie ?');
  define('TEXT_INFO_HEADING_EXTERNAL_TRIGGER', '&quot;MODOilTrack&quot; contient');

  define('TEXT_DISPLAY_NUMBER_OF_VALUES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> cookies)');
  define('TEXT_INFO_WARNING_COOKIES', '<b>Attention : </b> Il y a encore %s cookies associ&eacute;s &agrave; cette cat&eacute;gorie ! Ces cookies sont supprim&eacute;s en m&ecirc;me temps que la cat&eacute;gorie.');

  define('TEXT_INFO_OPTION_NAME', 'Nom:');
  define('TEXT_INFO_OPTION_DESCRIPTION', 'Description:');
  define('TEXT_INFO_OPTION_SORT', 'Trier:');

  define('TEXT_INFO_NUMBER_OPTION', 'Nombre de cookies:');
  define('TEXT_INFO_HEADING_NEW_OPTION', 'nouvelle cat&eacute;gorie');
  define('TEXT_INFO_NEW_OPTION_INTRO', 'Veuillez saisir la nouvelle cat&eacute;gorie en incluant toutes les donn&eacute;es pertinentes');
  define('TEXT_INFO_HEADING_EDIT_OPTION', 'cat&eacute;gorie d\'&eacute;dition');
  define('TEXT_INFO_EDIT_OPTION_INTRO', 'Veuillez apporter les modifications n&eacute;cessaires.');
  define('TEXT_INFO_HEADING_DELETE_OPTION', 'Supprimer la cat&eacute;gorie');
  define('TEXT_INFO_DELETE_OPTION_INTRO', '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette cat&eacute;gorie ?');

  define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Affich&eacute; <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> propri&eacute;t&eacute;s au total)');

  define('SORT_ORDER','Ordre de tri');
  define('TEXT_SORTORDER', 'Triage');
  define('BUTTON_COOKIES', 'Cookies');
