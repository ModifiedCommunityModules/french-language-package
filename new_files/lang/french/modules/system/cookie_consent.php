<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.js.php $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Statut du module');
  define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Module d\'activation?');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Utilisez un cookie lisible');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Si vous utilisez le gestionnaire de balises Google ou un autre logiciel, ils ne peuvent ins&eacute;rer des scripts et des cookies que si le visiteur l\'autorise. Un cookie suppl&eacute;mentaire, lisible, peut &ecirc;tre plac&eacute; pour que le gestionnaire de balises puisse lire la demande du client.<br /><br />Configuration dans Google Tag Manager:<br />Allez dans le menu "Variables&quot ; et cr&eacute;ez une nouvelle variable sous "Variables d&eacute;finies par l\'utilisateur&quot ;. Nommez-la, par exemple, "Cookie Consent&quot ;.<br />Cliquez ensuite sur "Configurer la variable" et s&eacute;lectionnez le type "First-Party-Cookie". Entrez le nom du cookie &quot;MODOilTrack&quot;.<br /><br />Vous pouvez alors &eacute;diter votre &quot;trigger&quot;.<br />D&eacute;finissez le type de d&eacute;clencheur "Pageview" et s&eacute;lectionnez l\'option &quot;Some pageviews&quot;.<br />Entrez le texte suivant comme condition: <em>&quot;Cookieconsent&quot;</em> (nom de la variable) contient <em>[&quot;1&quot;: true]</em>. La valeur contenue par cookie peut &ecirc;tre trouv&eacute;e dans la configuration du consentement aux cookies.<br /><br />Vous pouvez trouver des instructions illustr&eacute;es ici: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>');

  define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENTION:</font></strong> Veuillez configurer le consentement &agrave; l\'utilisation de cookies sous "Configuration". -> <a href="'.((defined('FILENAME_COOKIE_CONSENT') && function_exists('xtc_href_link')) ? xtc_href_link(FILENAME_COOKIE_CONSENT) : '#').'"><strong>"Cookie Consent"</strong></a>!');
  define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Plus d\'informations:');