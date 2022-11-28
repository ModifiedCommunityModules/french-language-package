<?php
/* -----------------------------------------------------------------------------------------
   $Id: zettle_categories.php 13892 2021-12-16 10:48:28Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_TITLE', 'Zettle par PayPal');
  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_DESCRIPTION', 'Des syst&egrave;mes de caisse modernes sous forme d\'app pour l\'acceptation des paiements et le suivi du chiffre d\'affaires : Facilitez votre quotidien avec Zettle.<br>
                                                             <br>Les fonctionnalit&eacute;s suivantes sont actuellement prises en charge:
                                                             <ul style="padding-left: 20px;">
                                                               <li>Les articles sont transf&eacute;r&eacute;s de la boutique &agrave; Zettle.</li>
                                                               <li>Possibilit&eacute; de cr&eacute;er son propre groupe de clients pour les prix des articles</li>
                                                               <li>L\'&eacute;tat des stocks est synchronis&eacute; entre la boutique et Zettle sur demande</li>
                                                             </ul>');

  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_TITLE', 'Importation en vrac');
  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_DESC', 'Faut-il activer l\'importation en vrac ?<br><b>Remarque:</b> Pour cela, il faut qu\'une t&acirc;che cron soit dirig&eacute;e vers l\'URL '.HTTP_SERVER.DIR_WS_CATALOG.'api/zettle/cronjob.php est cr&eacute;&eacute;.');

  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_TITLE', 'Cl&eacute; API');
  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_DESC', 'Indiquez la cl&eacute; API Zettle.');

  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_TITLE', 'Langue');
  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_DESC', 'Choisissez la langue pour la transmission des articles.');

  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_TITLE', 'Groupe de clients');
  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_DESC', 'Choisissez le groupe de clients pour le transfert des prix.');

  define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BUTTON_API', 'Cr&eacute;er une cl&eacute; API Zettle');
