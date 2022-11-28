<?php
/* -----------------------------------------------------------------------------------------
   
   $Id: sitemaporg.php 
   XML-Sitemap.org for xt:Commerce SP2.1a
   by Mathis Klooss
   V1.2
   -----------------------------------------------------------------------------------------
      Original Script:
   $Id: gsitemaps.php 
   Google Sitemaps by hendrik.koch@gmx.de
   V1.1 August 2006
   -----------------------------------------------------------------------------------------
   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com 
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SITEMAPORG_TEXT_DESCRIPTION', 'La d&eacute;finition standard se trouve ici: <a href="http://www.sitemaps.org/" target="_blank">www.sitemap.org</a>');
define('MODULE_SITEMAPORG_TEXT_TITLE', 'XML Sitemap.org');
define('MODULE_SITEMAPORG_EXPORTED', 'XML Sitemap.org cr&eacute;&eacute; avec succ&egrave;s.');

define('MODULE_SITEMAPORG_FILE_TITLE' , '<hr />Nom de fichier');
define('MODULE_SITEMAPORG_FILE_DESC' , 'Entrez un nom de fichier pour le plan du site, si vous souhaitez qu\'il soit enregistr&eacute; localement<br />(R&eacute;pertoire "export/")');
define('MODULE_SITEMAPORG_STATUS_DESC','Statut du module');
define('MODULE_SITEMAPORG_STATUS_TITLE','Statut');
define('MODULE_SITEMAPORG_ROOT_TITLE', '<hr /><b>Installation dans Shoproot?</b>');
define('MODULE_SITEMAPORG_ROOT_DESC', 'Enregistrer le fichier sitemap dans le r&eacute;pertoire racine ?');
define('MODULE_SITEMAPORG_GZIP_TITLE', '<b>Utiliser la compression gzip ?</b>');
define('MODULE_SITEMAPORG_GZIP_DESC', 'File extension ".gz" is extended automatically added!');
define('MODULE_SITEMAPORG_EXPORT_TITLE', '<hr /><b>T&eacute;l&eacute;charger?</b>');
define('MODULE_SITEMAPORG_EXPORT_DESC', 'Voulez-vous t&eacute;l&eacute;charger le fichier?');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_TITLE', 'Groupe de clients');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_DESC','Indiquez ici quel groupe de clients doit &ecirc;tre utilis&eacute; pour l\'exportation de sitemap.xml.');
define('MODULE_SITEMAPORG_LANGUAGE_TITLE', 'Langue');
define('MODULE_SITEMAPORG_LANGUAGE_DESC','Indiquez ici la langue &agrave; utiliser pour l\'exportation de sitemap.xml.');
?>