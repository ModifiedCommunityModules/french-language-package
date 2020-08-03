<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION', 'micropayment&trade; Module de pr&eacute;paiement
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
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'micropayment&trade; Pr&eacute;payer');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Pr&eacute;payer');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div><div style="float:left;">
<b>Le formulaire de paiement pr&eacute;-rempli vous sera envoy&eacute; par courrier &eacute;lectronique.</b><br />
Pour conclure votre commande, vous allez maintenant &ecirc;tre dirig&eacute; vers notre fournisseur de services de paiement, micropaiement&trade ;.<br /><br />
&#10004; s&eacute;curis&eacute; &nbsp; &#10004; simple &nbsp; &#10004; pas d\'enregistrement n&eacute;cessaire
</div>
');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE','Pr&eacute;payer');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC','Module de pr&eacute;paiement par micropayment&trade;');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE','Montant minimum');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC','Montant minimum pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE','Montant maximum');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC','Montant maximum pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE','Positionnement');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC','Positionnement dans le choix du mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE','S&eacute;lection du pays');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC','N\'autoriser que les commandes en provenance de ces pays (liste s&eacute;par&eacute;e par des virgules DE,EN)');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT','Pending Payment. Expires on %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN','Paid in %s %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED','No deposit');
?>