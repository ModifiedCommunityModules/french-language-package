<?php
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'Virement bancaire en ligne.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', 'Virement bancaire en ligne. est le mode de paiement gratuit, certifi&eacute; T&Uuml;V par SOFORT GmbH.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'Vous pouvez payer avec le syst&egrave;me bancaire en ligne certifi&eacute; T&Uuml;V Virement bancaire en ligne. de SOFORT GmbH.');
// checkout
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'https://images.sofort.com/en/su/landing.php\',\'Customerinformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Virement bancaire en ligne.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Simple et s&ucirc;r.</li>
  </ul>');
// admin
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Activer le virement bancaire en ligne.');
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Activer/d&eacute;sactiver le virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_TITLE', 'Zones autoris&eacute;es');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_DESC', 'Veuillez saisir <b>einzeln</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par exemple, autoriser AT, DE (si vide, toutes les zones))');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_TITLE', 'Ordonnance temporaire');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_DESC', 'Vous souhaitez cr&eacute;er un ordre temporaire?');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_TITLE', 'activer l\'enregistrement');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_DESC', 'Active/d&eacute;sactive la journalisation<br/>Les fichiers de journalisation sont enregistr&eacute;s dans /log');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_TITLE', 'Cl&eacute; de configuration');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_DESC', 'La cl&eacute; de configuration peut &ecirc;tre trouv&eacute;e dans Virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit num&eacute;ro est affich&eacute; en premier');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_DESC', 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_TITLE', 'Monnaie de transaction');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_DESC', 'R&eacute;ception de devises Virement bancaire en ligne. r&eacute;glage');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_TITLE', 'Commande confirm&eacute;e');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_DESC', 'Statut de la commande apr&egrave;s r&eacute;ception d\'une commande, a &eacute;t&eacute; envoy&eacute; avant une confirmation de paiement r&eacute;ussi');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_TITLE', 'Statut de l\'ordonnance temporaire');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_DESC', 'Ordre pour les transactions non encore termin&eacute;es');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_TITLE', 'Pour v&eacute;rifier l\'&eacute;tat de la commande');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_DESC', 'Le statut de la commande a &eacute;t&eacute; re&ccedil;u dans une confirmation de paiement incorrecte apr&egrave;s la r&eacute;ception d\'une commande');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_TITLE', '&Eacute;tat de la commande apr&egrave;s paiement');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_DESC', '&Eacute;tat de la commande apr&egrave;s que l\'argent a &eacute;t&eacute; cr&eacute;dit&eacute; sur votre compte.');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_TITLE', '&Eacute;tat de la commande apr&egrave;s r&eacute;trofacturation');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_DESC', '&Eacute;tat de la commande apr&egrave;s une r&eacute;trofacturation.');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_TITLE', 'Statut de la commande si aucun argent n\'est arriv&eacute;');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_DESC', 'Statut de la commande si aucun montant n\'est cr&eacute;dit&eacute; sur votre compte.');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_TITLE', 'Ligne d\'utilisation 1');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_DESC', 'Si aucun ordre temporaire n\'est cr&eacute;&eacute;, le num&eacute;ro d\'ordre n\'est pas disponible. Par cons&eacute;quent, il doit &ecirc;tre plac&eacute; sur -TRANSACTION-');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_TITLE', 'Ligne d\'utilisation 2');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_DESC', 'En usage (27 caract&egrave;res maximum) &agrave; remplacer par les caract&egrave;res de remplacement suivants:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_TITLE', 'Paiement Grafic / Texte');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_DESC', 'Grafic / Texte sur la v&eacute;rification des paiements');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_TITLE', 'Protection du client activ&eacute;e');
define('MODULE_PAYMENT_'.$sofort_code.'_KS_STATUS_DESC', 'Activer la protection des clients pour les virements bancaires en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_TITLE', 'Num&eacute;ro de client');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_DESC', 'Num&eacute;ro de client lors d\'un virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_TITLE', 'Num&eacute;ro de projet');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_DESC', 'Le num&eacute;ro du projet responsable dans la navigation imm&eacute;diate utilise Virement bancaire en ligne. au paiement appartient');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_TITLE', 'Mot de passe du projet');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_DESC', 'Vous trouverez ces informations sous Param&egrave;tres du virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_TITLE', 'Mot de passe de notification');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_DESC', 'Vous trouverez ces informations sous Param&egrave;tres du virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_TITLE', 'Hash-Algorithmus:');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_DESC', 'Vous trouverez ces informations sous Param&egrave;tres du virement bancaire en ligne.');
define('MODULE_PAYMENT_'.$sofort_code.'_DESCRIPTION_INSTALL', '<br/><br/>Voulez-vous installer le bon statut de commande ? <br/>Les statuts actuellement d&eacute;finis sont &eacute;cras&eacute;s.');
// status
defined('TEXT_NO_STATUSUPDATE') OR define('TEXT_NO_STATUSUPDATE', 'pas de mise &agrave; jour du statut');
// error
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_HEADING', 'L\'erreur suivante a &eacute;t&eacute; signal&eacute;e au cours de la proc&eacute;dure:');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_MESSAGE', 'Le paiement n\'est malheureusement pas possible ou a &eacute;t&eacute; annul&eacute; par le client. Veuillez s&eacute;lectionner un autre mode de paiement.');
// callback
defined('TEXT_SOFORT_NOT_CREDITED_YET') OR define('TEXT_SOFORT_NOT_CREDITED_YET', 'Virement bancaire en ligne effectu&eacute; avec succ&egrave;s.');
defined('TEXT_SOFORT_NOT_CREDITED') OR define('TEXT_SOFORT_NOT_CREDITED', 'Pas re&ccedil;u d\'argent sur un compte');
defined('TEXT_SOFORT_LOSS') OR define('TEXT_SOFORT_LOSS', 'v&eacute;rifier la commande');
defined('TEXT_SOFORT_RECEIVED') OR define('TEXT_SOFORT_RECEIVED', 'A re&ccedil;u de l\'argent sur un compte');
defined('TEXT_SOFORT_CREDITED') OR define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED') OR define('TEXT_SOFORT_REFUNDED', 'L\'argent a &eacute;t&eacute; enti&egrave;rement rembours&eacute;');
defined('TEXT_SOFORT_CANCELED') OR define('TEXT_SOFORT_CANCELED', 'Virement bancaire en ligne. annul&eacute;');
defined('TEXT_SOFORT_WAIT_FOR_MONEY') OR define('TEXT_SOFORT_WAIT_FOR_MONEY', 'En attente de paiement');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') OR define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Virement bancaire en ligne. Timeout');
defined('TEXT_SOFORT_REJECTED') OR define('TEXT_SOFORT_REJECTED', 'Virement bancaire en ligne. rejet&eacute;');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED') OR define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_TRANSACTION', "Erreur lors de la notification HTTP\nVeuillez v&eacute;rifier la transaction et la notification\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_PAYMENT', "Argent NON encore re&ccedil;u\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_UNEXPECTED_STATUS', "Erreur (SU204) : Statut inattendu\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_TRANSACTION', "Paiement r&eacute;ussi\nTransaction-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_PAYMENT', "Argent re&ccedil;u\nTransaction-ID: %s");
// order status
$SOFORT_INST_ORDER_STATUS_TMP_NAME = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME = 'En attente';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME = 'En attente';
$SOFORT_INST_ORDER_STATUS_REC_NAME = 'Paiement re&ccedil;u';
$SOFORT_INST_ORDER_STATUS_REF_NAME = 'Rembours&eacute;';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Paiement';
?>