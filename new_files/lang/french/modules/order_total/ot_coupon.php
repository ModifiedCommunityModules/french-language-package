<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_coupon.php 11640 2019-03-28 10:38:31Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_coupon.php 899 2005-04-29)

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

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Bons de r&eacute;duction');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Ch&egrave;ques-cadeaux/coupons de r&eacute;duction');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Coupon de r&eacute;duction');
  define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
  define('ERROR_NO_INVALID_REDEEM_COUPON', 'Code de coupon non valable');
  //BOF - DokuMan - 2010-08-31 - constants already defined in english.php
  //define('ERROR_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
  //define('ERROR_INVALID_FINISDATE_COUPON', 'This coupon has expired');
  //define('ERROR_INVALID_USES_COUPON', 'This coupon could only be used ');  
  //define('TIMES', ' times.');
  //define('ERROR_INVALID_USES_USER_COUPON', 'You have used the coupon the maximum number of times allowed per customer.'); 
  //define('REDEEMED_COUPON', 'a coupon worth ');  
  //EOF - DokuMan - 2010-08-31 - constants already defined in english.php
  define('REDEEMED_MIN_ORDER', 'sur les commandes de plus de ');  
  define('REDEEMED_RESTRICTIONS', ' [Des restrictions par cat&eacute;gorie de produits s\'appliquent]');  
  define('TEXT_ENTER_COUPON_CODE', 'Entrez le code de rachat&nbsp;&nbsp;');
  
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', 'Afficher le total');
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', 'Voulez-vous afficher la valeur du coupon de r&eacute;duction ?');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', 'Ordre de tri');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', 'Ordre d\'affichage.');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', 'Inclure le transport maritime');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', 'Inclure le transport maritime dans le calcul');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', 'Inclure la taxe');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', 'Inclure la taxe dans le calcul.');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', 'Recalculer l\'imp&ocirc;t');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', 'Recalculer l\'imp&ocirc;t');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', 'Cat&eacute;gorie d\'imp&ocirc;t');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', 'Utilisez la classe d\'imp&ocirc;t suivante lorsque vous traitez le coupon de r&eacute;duction comme une note de cr&eacute;dit.');
  //BOF - web28 - 2010-06-20 - no discount for special offers
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_TITLE', 'Rabais pour les offres sp&eacute;ciales');
  define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_DESC', 'R&eacute;duction autoris&eacute;e pour les offres sp&eacute;ciales');
  //EOF - web28 - 2010-06-20 - no discount for special offers
?>