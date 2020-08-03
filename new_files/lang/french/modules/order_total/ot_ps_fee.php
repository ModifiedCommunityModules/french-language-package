<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_ps_fee.php 10553 2017-01-11 13:45:14Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers ; http://www.themedia.at & http://www.oscommerce.at
   (c) 2006 XT-Commerce (ot_ps_fee.php 899 2005-04-29 02)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


  define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', 'Exp&eacute;dition personnelle');
  define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', 'Calcul de la taxe personnelle d\'exp&eacute;dition');

  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE','Exp&eacute;dition personnelle');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC','Calcul de la taxe personnelle d\'exp&eacute;dition');

  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE','Ordre de tri');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC','Ordre d\'affichage');

  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE','Taxclass');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC','Choisissez une classe d\'imp&ocirc;t.');

  function define_shipping_titles_ps() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    //support for ot_shipping
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = strtoupper($shipping_code);
        $title = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'english/modules/' . $module_type . '/' . $file)) {
          include_once(DIR_FS_LANGUAGES . 'french/modules/' . $module_type . '/' . $file);
          $title = constant('MODULE_SHIPPING_'.$shipping_code.'_TEXT_TITLE');
        }
        //support for ot_shipping
        $title = $shipping_code == 'FREE' ? 'Livraison gratuite (module de commande total ot_shipping)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_PS_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Prix&gt;, ....<br />
        00 car le code ISO2 permet l\'exp&eacute;dition de PS dans tous les pays. Si
        00 est utilis&eacute;, vous devez l\'entrer comme dernier argument. Si
        non 00:9.99 est entr&eacute; le PS l\'exp&eacute;dition dans les pays &eacute;trangers ne sera pas calcul&eacute;e
        (pas possible). Pour exclure un seul pays, n\'inscrivez pas de co&ucirc;ts pour ce pays.
        Exemple : DE:4.00,CH :,00:9.99<br />-> Explication : Exp&eacute;dition vers DE: 4&euro; / Exp&eacute;dition en CH : pas possible
        / Exp&eacute;dition vers le reste du monde : 9,99&euro;');
      }
    }
  }
  define_shipping_titles_ps();
?>