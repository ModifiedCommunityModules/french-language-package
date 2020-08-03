<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 11640 2019-03-28 10:38:31Z GTB $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_GV_TITLE', 'Bons d\'achat');
  define('MODULE_ORDER_TOTAL_GV_HEADER', 'Bons d\'achat');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', 'Bons d\'achat');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Composez le num&eacute;ro si vous voulez utiliser votre cr&eacute;dit');
  define('TEXT_ENTER_GV_CODE', 'Veuillez entrer votre code de bon ici &nbsp;&nbsp;');

  define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Valeur d\'affichage');
  define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', 'Vous souhaitez afficher la valeur du ch&egrave;que cadeau?');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Ordre de tri');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'S&eacute;quence d\'affichage');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Liste de diffusion');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', 'Les ch&egrave;ques-cadeaux command&eacute;s doivent-ils d\'abord &ecirc;tre ajout&eacute;s &agrave; la liste de diffusion?');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Y compris les frais d\'exp&eacute;dition');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Ajouter les frais d\'exp&eacute;dition &agrave; la valeur des marchandises');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'TVA incluse');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'TVA &agrave; la valeur des marchandises.');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'Recalculer la TVA');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', 'Recalculer la TVA');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'Taux de TVA');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'La TVA suivante si vous utilisez le bon comme une note de cr&eacute;dit.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Le solde cr&eacute;diteur comprend la TVA.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'Cr&eacute;dit de la TVA sur la valeur du bon');
?>