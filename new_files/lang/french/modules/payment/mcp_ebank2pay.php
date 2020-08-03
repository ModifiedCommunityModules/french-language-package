<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_DESCRIPTION', 'micropayment&trade; module de virement bancaire en ligne
<br /><br />
liens<br />
<b>outils</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="clear old orders">
</a><br />
<br />
<b>Externe</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Manual">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Micropayment register">
    </a>
');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE', 'micropayment&trade; virement bancaire en ligne');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE_EXTERN', 'Virement bancaire en ligne');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>Veuillez avoir vos coordonn&eacute;es bancaires en ligne &agrave; port&eacute;e de main.</b><br />
Pour conclure votre commande, vous allez maintenant &ecirc;tre transmis &agrave; notre prestataire de services de paiement, micropayment&trade ; en coop&eacute;ration avec sofort.com.<br /><br /> &#10004 ; s&eacute;curis&eacute; &nbsp ; &#10004 ; simple &nbsp ; &#10004 ; pas d\'enregistrement n&eacute;cessaire
</div>
');

define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_TITLE','Virement bancaire en ligne');
define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_DESC','Module de transfert bancaire en ligne par  micropayment&trade;');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_TITLE','Montant minimum');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_DESC','Montant minimum pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_TITLE','Montant maximum');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_DESC','Montant maximum pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_TITLE','Positionnement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_DESC','Positionnement dans le choix du mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_TITLE','S&eacute;lection du pays');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_DESC','N\'autoriser que les commandes en provenance de ces pays (liste s&eacute;par&eacute;e par des virgules DE,EN)');

?>