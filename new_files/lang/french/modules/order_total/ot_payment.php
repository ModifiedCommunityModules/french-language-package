<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_payment.php 11584 2019-03-21 10:35:17Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (C) 2007 Estelco - Ebusiness & more - http://www.estelco.de
   (C) 2004 IT eSolutions Andreas Zimmermann - http://www.it-esolutions.de

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=french\', \'AIDE\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=french"><b>[AIDE]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Type de paiement escompte &amp ; surcharge</h2>
S\'il y a plus d\'&eacute;chelle de remises requises (la valeur par d&eacute;faut est <b>3</b>), la valeur de la variable $num (fichiers de langue) et $this->num (fichier de module) doit &ecirc;tre modifi&eacute;e &agrave; la valeur souhait&eacute;e.
Une augmentation ult&eacute;rieure n&eacute;cessite une d&eacute;sinstallation/r&eacute;installation du module ou une correction manuelle de la base de donn&eacute;es !
<hr>
<h3>Domaines &eacute;chelle de remise</h3>
<p class="red">Remarque : l\'adresse de livraison est cruciale pour les codes de pays. Si une r&eacute;duction ou une majoration doit &ecirc;tre valable pour tous les pays, le code 00 doit &ecirc;tre utilis&eacute; ou le code du pays doit &ecirc;tre compl&egrave;tement omis (y compris le &quot;|&quot;)!</p>
<h4>Pour les rabais, utilisez la notation suivante :</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
<p>Signification:</p>
<p>Pour les clients de <span class="blue">Allemagne</span>  avec un volume de commande de <span class="green">100&euro;</span> une r&eacute;duction de <span class="red">4%</span> sera accord&eacute;e, &agrave; partir de <span class="green">200&euro;</span> une r&eacute;duction de <span class="red">5%</span> sera accord&eacute;e.</p>
<pre>   <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
<p>Signification:</p>

<p>Pour les clients de tous les pays ayant un volume de commande de <span class="green">100&euro;</span> une r&eacute;duction de <span class="red">2%</span>sera accord&eacute;e, &agrave; partir de <span class="green">200&euro;</span> une r&eacute;duction de <span class="red">3%</span> sera accord&eacute;e.</p>
<h4>Pour les suppl&eacute;ments, utilisez la mention suivante:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">-3</span></pre>
<p>Signification:</p>
<p>Pour les clients de <span class="blue">Allemagne</span> avec un volume de commande de <span class="green">100&euro;</span> un suppl&eacute;ment de <span class="red">3%</span> sera ajout&eacute;.</p>
<h4>Exemple pour Paypal</h4>
1. bar&egrave;me de remise
<pre>   <span class="blue">DE</span>|<span class="green">0</span>:<span class="red">-1.9</span>&amp;<span class="lila">-0.35</span></pre>
2. bar&egrave;me de remise
<pre>   <span class="blue">00</span>|<span class="green">0</span>:<span class="red">-3.4</span>&amp;<span class="lila">-0.35</span></pre>
<p>Signification:</p>
<p>Pour les clients de <span class="blue">Allemagne</span> avec un volume de commande de <span class="green">0&euro;</span> (c\'est-&agrave;-dire toujours) un suppl&eacute;ment de <span class="red">1,9%</span> plus <span class="lila">0,35&euro;</span> sera ajout&eacute;.</p>
<p>Pour les clients de <span class="blue">tous les autres pays (00=tous)</span> avec un volume de commande de <span class="green">0&euro;</span> un suppl&eacute;ment de <span class="red">3,4%</span> plus <span class="lila">0,35&euro;</span> sera ajout&eacute;.</p>
<p>L\'important est l\'ordre des entr&eacute;es (tous les autres pays toujours en dernier) et que  &quot;Calcul multiple&quot; est fix&eacute; &agrave; &quot;false&quot;, sinon les deux surtaxes seront ajout&eacute;es.</p>
<h4>Exemple pour les montants fixes</h4>
<pre>   <span class="green">0</span>:<span class="red">0</span>&amp;<span class="lila">-2</span></pre>
<p>Signification:</p>
<p>Pour les clients de tous les pays ayant un volume de commande de <span class="green">0&euro;</span> (c\'est-&agrave;-dire toujours) un suppl&eacute;ment de <span class="red">0%</span> (donc pas de surcharge en pourcentage) plus <span class="lila">2,00&euro;</span> (surcharge fixe) sera ajout&eacute;.</p>
<hr>
<h3>Champs type de paiement</h3>
<p>Entrez le <b>code d\'usage interne</b> du type de paiement, par exemple <b>moneyorder</b> pour un ch&egrave;que ou un mandat ou <b>cod</b> pour le paiement &agrave; la livraison. Les autres types de paiement doivent &ecirc;tre s&eacute;par&eacute;s par une virgule.</p>
Voir aussi les modules -&gt; Syst&egrave;mes de paiement -&gt; colonne &quot;Nom du module (pour usage interne)&quot;.<br/><br/>
<hr>
<h3>Affichage du paiement en caisse pendant le processus de commande</h3>
Si la remise appropri&eacute;e doit &ecirc;tre affich&eacute;e pendant le processus de commande lorsqu\'un paiement doit &ecirc;tre s&eacute;lectionn&eacute;, d&eacute;finissez l\'option &quot;Affichage dans les types de paiement&quot; &agrave; &quot;true&quot;. <br/><br/>
En outre, vous pouvez utiliser l\'option &quot;Type d\'affichage dans le processus de commande lors de la s&eacute;lection du paiement&quot; pour d&eacute;finir le type d\'affichage :
<p> -- par d&eacute;faut : pourcentage ou montant, en fonction des entr&eacute;es dans le bar&egrave;me des rabais</p>
<p> -- prix : toujours indiquer le montant r&eacute;el</p>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Type de paiement escompte &amp; surcharge');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Type de paiement escompte &amp; surcharge'.MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Remise d\'affichage');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', 'Voulez-vous activer le rabais de commande');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Ordre de tri');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Ordre d\'affichage');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
  for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', $j . '. Pourcentage de remise');
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Montant du rabais(pays|valeur:pourcentage&frais)');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Type de paiement');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Type de paiement pour obtenir une r&eacute;duction');
  }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Inclure le transport maritime');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Inclure le transport maritime dans le calcul');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>Inclure la taxe');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'Inclure l\'imp&ocirc;t dans le calcul');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Calculer l\'imp&ocirc;t');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Recalculer la taxe sur le montant escompt&eacute;');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Zones autoris&eacute;es');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui devraient &ecirc;tre autoris&eacute;s &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Remise');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Tarifs');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE','<hr>Classe d\'imp&ocirc;t');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC','Utilisez la classe d\'imposition suivante pour les frais de commande de faible montant.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE','<hr>Calcul multiple');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC','Le calcul multiple devrait-il &ecirc;tre possible ? Si le faux calcul sera arr&ecirc;t&eacute; apr&egrave;s la premi&egrave;re mise en place de l\'appareillage.');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Affichage dans les types de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Affichage pendant le processus de paiement &agrave; la caisse');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Affichage des modes de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Affichage dans le processus de commande &agrave; la caisse <br /> - par d&eacute;faut : pourcentage ou montant, en fonction des entr&eacute;es au rabais <br /> - le prix : il indiquera toujours le montant r&eacute;el');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Num&eacute;ro Type de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Nombre d\'escompte de type de paiement &amp; suppl&eacute;ment');
?>