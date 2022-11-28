<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_shipping.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_shipping.php,v 1.4 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (ot_shipping.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_SHIPPING_TITLE', 'Exp&eacute;dition');
  define('MODULE_ORDER_TOTAL_SHIPPING_DESCRIPTION', 'Frais d\'exp&eacute;dition de la commande');

  define('FREE_SHIPPING_TITLE', 'Livraison gratuite');
  define('FREE_SHIPPING_DESCRIPTION', 'Livraison gratuite pour les commandes de plus de %s');

  define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_TITLE','Afficher la navigation');
  define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_DESC','Voulez-vous afficher les frais d\'exp&eacute;dition de la commande?');

  define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_TITLE','Ordre de tri');
  define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_DESC', 'Trier l\'ordre d\'affichage');

  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_TITLE','Autoriser la livraison gratuite');
  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_DESC','Voulez-vous autoriser la livraison gratuite?');

  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_TITLE','Livraison gratuite pour les commandes nationales de plus de');
  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_DESC','Pr&eacute;voir la gratuit&eacute; des frais de port pour les commandes sup&eacute;rieures au montant fix&eacute;.');

  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_INTERNATIONAL_TITLE','Livraison gratuite pour les commandes internationales de plus de');
  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_INTERNATIONAL_DESC','Pr&eacute;voir la gratuit&eacute; des frais de port pour les commandes sup&eacute;rieures au montant fix&eacute;.');

  define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_TITLE','Fournir une livraison gratuite pour les commandes pass&eacute;es');
  define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_DESC','Fournir une exp&eacute;dition gratuite pour les commandes envoy&eacute;es &agrave; la destination fix&eacute;e.');
  
  define('MODULE_ORDER_TOTAL_SHIPPING_TAX_CLASS_TITLE','Taxclass');
  define('MODULE_ORDER_TOTAL_SHIPPING_TAX_CLASS_DESC','S&eacute;lectionnez la classe d\'imp&ocirc;t (uniquement pour les commandes)');   
?>